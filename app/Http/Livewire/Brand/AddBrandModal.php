<?php

namespace App\Http\Livewire\Brand;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class AddBrandModal extends Component
{
    use WithFileUploads;

    // Properties for storing brand data
    public $brand_id;
    public $name;
    public $logo;
    public $current_image;
    public $status = 1;
    public $edit_mode = false;

    // Cache key for brands
    private $cacheKey;

    // Event listeners
    protected $listeners = [
        'update_brand'      => 'updateBrand',
        'delete_brand'      => 'delete',
        'open_add_modal'    => 'openAddModal',
        'update_status'     => 'updateStatus',
    ];

    public function __construct()
    {
        $this->cacheKey = config('dbcachekey.brand');
    }

    // Render the component view
    public function render()
    {
        return view('livewire.brand.add-brand-modal');
    }

    // Handle form submission
    public function submit()
    {
        // Validation rules
        $rules = [
            'name'  => 'required|unique:brands,name',
            'logo'  => 'required|mimes:jpeg,png|max:2048'
        ];

        // Custom messages
        $messages = [
            'logo.mimes' => 'The logo must be a file of type: jpeg, png.',
            'logo.max'   => 'The logo size must not exceed 2MB.'
        ];

        if ($this->edit_mode) {
            $rules['name'] = 'required|unique:brands,name,' . $this->brand_id;
            $rules['logo']  = 'nullable|mimes:jpeg,png|max:2048';
        }

        // Validate form input
        $this->validate($rules, $messages);

        // Check if we are in edit mode
        if ($this->edit_mode) {
            $this->updateExistingBrand();
        } else {
            $this->createNewBrand();
        }

        // Reset the form
        $this->resetForm();
    }

    // Create a new brand
    public function createNewBrand()
    {
        // Prepare the brand data
        $brandData = [
            'name' => $this->name,
            'status' => $this->status,
        ];

        if ($this->logo) {
            $thisImage = $this->logo;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads/brand', $imageName, 'real_public');

            // Store the path in the database
            $brandData['image'] = 'uploads/brand/' . $imageName;
        }


        // Create the brand
        Brand::create($brandData);

        // Emit success message
        $this->emit('success', __('Brand created successfully.'));
        $this->refreshCache();

        // Reset form fields
        $this->resetForm();
    }

    // update the brand
    public function updateBrand($id)
    {
        $brand = Brand::findOrFail($id);

        $this->edit_mode = true;
        $this->brand_id = $brand->id;
        $this->current_image = $brand->image;
        $this->name = $brand->name;
        $this->status = $brand->status;
    }

    // Update an existing brand
    public function updateExistingBrand()
    {
        $brand = Brand::findOrFail($this->brand_id);

        $brand->name = $this->name;
        $brand->status = $this->status;

        if ($this->logo) {
            if ($brand->image) {
                Storage::disk('real_public')->delete($brand->image);
            }
            $brand->image = $this->logo->store('uploads/brand', 'real_public');
        } elseif ($this->current_image === null) {
            if ($brand->image) {
                Storage::disk('real_public')->delete($brand->image);
            }
            $brand->image = null;
        }

        $brand->save();

        $this->emit('success', __('Brand updated successfully.'));
        $this->refreshCache();
        $this->resetForm();
    }

    //update status
    public function updateStatus($id, $status)
    {
        $brand = Brand::findOrFail($id);
        $brand->update(['status' => $status]);

        $message = $status == 0 ? "{$brand->name} is inactive" : "{$brand->name} is active";
        $type = $status == 0 ? 'info' : 'success';

        // Emit success message
        $this->emit($type, $message);
        $this->refreshCache();
    }

    // Delete a brand
    public function delete($id)
    {
        // Find the brand by ID
        $brand = Brand::findOrFail($id);

        // Delete the brand image if exists
        if ($brand->image) {
            Storage::disk('real_public')->delete($brand->image);
            $brand->update(['image' => null]);
        }

        // Delete the brand
        $brand->delete();

        // Emit success message and reset the form
        $this->emit('info', __('Brand was deleted.'));
        $this->resetForm();

        $this->refreshCache();
    }

    // Method to remove the image
    public function removeImage()
    {
        $this->logo   = null;
        if ($this->current_image) {
            $this->current_image = null;
        }
    }

    // Handle component hydration
    public function hydrate()
    {
        // Reset error bag and validation
        $this->resetErrorBag();
        $this->resetValidation();
    }

    // Reset form fields
    private function resetForm()
    {
        // Reset edit mode and form fields
        $this->edit_mode = false;
        $this->reset(['name', 'brand_id', 'status', 'logo', 'current_image']);
    }

    // Refresh the cache
    private function refreshCache()
    {
        Cache::forget($this->cacheKey);
        Cache::rememberForever($this->cacheKey, function () {
            return Brand::orderBy('id', 'desc')->get();
        });
    }

    // Method to open the add modal and reset the form
    public function openAddModal()
    {
        $this->resetForm();
    }

}
