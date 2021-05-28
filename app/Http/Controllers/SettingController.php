<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::all()->pluck('value', 'key'); 
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'WEB_PLACE_NAME' => 'required',
            'WEB_PLACE_ADDRESS' => 'required',
            'WEB_LOGO' => 'nullable|mimes:jpg,jpeg,png|max:5120',
            'WEB_FAVICON' => 'nullable|mimes:jpg,jpeg,png|max:5120',
            'WEB_PLACE_IMAGE' => 'nullable|mimes:jpg,jpeg,png|max:5120',
            'WEB_TAKMIR_IMAGE' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        ],

        [
            'WEB_PLACE_NAME.required' => 'Nama Masjid / Musholla Harus Diisi!',

            'WEB_PLACE_ADDRESS.required' => 'Alamat Masjid / Musholla harus diisi!',

            'WEB_LOGO.mimes' => 'Format Logo Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_LOGO.max' => 'Ukuran Logo Maximal 5mb!',

            'WEB_FAVICON.mimes' => 'Format Favicon Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_FAVICON.max' => 'Ukuran Favicon Maximal 5 MB!',

            'WEB_PLACE_IMAGE.mimes' => 'Gambar Masjid Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_PLACE_IMAGE.max' => 'Gambar Masjid Maximal 5 MB!',

            'WEB_TAKMIR_IMAGE.mimes' => 'Gambar Takmir Masjid Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_TAKMIR_IMAGE.max' => 'Gambar Takmir Masjid 5 MB!',
        ]);


        $setting = Setting::all()->pluck('value', 'key'); 
        $setting->WEB_PLACE_NAME = $request->WEB_PLACE_NAME;
        $setting->WEB_PLACE_ADDRESS = $request->WEB_PLACE_ADDRESS;

        foreach($setting as $key => $value){
        if($key == 'WEB_LOGO' || $key == 'WEB_FAVICON' || $key == 'WEB_PLACE_IMAGE' || $key == 'WEB_TAKMIR_IMAGE') {
            if($request->hasFile($key)){
                Storage::disk('public')->delete($value);
                $value = $request->file($key)->store('assets/slide', 'public');
            }
        }
        Setting::where('key',$key)->update(['value' => $value]);
    }

        session()->flash('success','Sukses Ubah Settings!');
        return redirect()->back();
    }
}
