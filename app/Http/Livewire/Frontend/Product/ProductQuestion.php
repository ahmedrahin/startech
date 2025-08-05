<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Question;
use illuminate\Support\Facades\Auth;

class ProductQuestion extends Component
{
    public $productId;
    public $user_id;
    public $question;

     protected $listeners = [
        'open_add_modal'    => 'openAddModal',
    ];

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->user_id = auth()->id();
    }

     public function submit(){

        if(!auth()->check()){
            return ;
        }

         // Validation rules
         $rules = [
            'question' => 'required'
        ];

        // Custom messages
        $messages = [];

        $this->validate($rules, $messages);

        $data = [
            'question' => $this->question,
            'user_id' => $this->user_id,
            'product_id' => $this->productId,
        ];

        // store the review
        $question = Question::create($data);

        // add notification
        $notification = new \App\Models\Notification();
        $notification->create([
            'type' => 'question',
            'question_id' => $question->id,
        ]);

        $this->emit('success', __('Your question has been submitted.'));
        $this->resetForm();
        $this->emit('load');
    }

     // Reset form fields
     private function resetForm()
     {
       $this->reset(['question']);
     }

     public function openAddModal()
     {
         $this->resetForm();
         $this->resetErrorBag();
         $this->resetValidation();
     }

     // Handle component hydration
     public function updated($propertyName)
     {
         $this->resetErrorBag($propertyName);
     }

    public function hydrate()
    {
        // Reset error bag and validation
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function render()
    {
        $questions = Question::where('user_id', $this->user_id)->where('product_id', $this->productId)->whereNotNull('answer')->get();
        return view('livewire.frontend.product.product-question' , compact('questions'));
    }
}
