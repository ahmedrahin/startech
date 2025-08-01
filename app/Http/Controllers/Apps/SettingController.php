<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function manage(){
        return view('pages.apps.setting.genarel');
    }

    public function website_setting(){
        $setting = WebsiteSetting::first();
        return view('pages.apps.setting.website', compact('setting'));
    }

    public function new_arrvial_image_setting(Request $request)
    {
        $request->validate([
            'new_arrivale_image' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
        ]);

        $setting = WebsiteSetting::first();

        if ($request->hasFile('new_arrivale_image')) {
            $image = $request->file('new_arrivale_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destination = public_path('uploads/');
            $image->move($destination, $imageName);

            // Delete old image
            if ($setting && $setting->new_arrivale_image && file_exists(public_path($setting->new_arrivale_image))) {
                unlink(public_path($setting->new_arrivale_image));
            }

            // Save new image path
            $setting = $setting ?: new WebsiteSetting();
            $setting->new_arrivale_image = 'uploads/' . $imageName;
            $setting->save();
        }

        return response()->json(['status' => 'success', 'message' => 'Watermark image uploaded successfully.']);
    }

    public function delete_new_arrival_image(Request $request)
    {
        $setting = WebsiteSetting::first();

        if ($setting && $setting->new_arrivale_image && file_exists(public_path($setting->new_arrivale_image))) {
            unlink(public_path($setting->new_arrivale_image));
            $setting->new_arrivale_image = null;
            $setting->save();
            return response()->json(['status' => 'success', 'message' => 'Image deleted successfully.']);
        }

        return response()->json(['status' => 'error', 'message' => 'Image not found.'], 404);
    }


    public function pagesContent(Request $request)
    {
        $request->validate([
            'privacy_policy' => 'nullable|string',
            'refund_policy' => 'nullable|string',
            'term_condition' => 'nullable|string',
        ]);

        DB::table('pages_contents')->updateOrInsert(
            ['id' => 1],
            [
                'privacy_policy' => $request->privacy_policy,
                'refund_policy' => $request->refund_policy,
                'terms' => $request->term_condition,
                'updated_at' => now()
            ]
        );

        return response()->json(['message' => 'Updated successfully']);
    }


}
