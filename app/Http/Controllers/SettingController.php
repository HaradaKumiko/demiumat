<?php

namespace App\Http\Controllers;

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
            'WEB_BACKGROUND_IMAGE' => 'nullable|mimes:jpg,jpeg,png|max:5120',
            'WEB_HEADER' => 'required',
            'WEB_MOTTO' => 'required',
        ],

        [
            'WEB_PLACE_NAME.required' => 'Nama Masjid / Musholla Harus Diisi!',

            'WEB_PLACE_ADDRESS.required' => 'Alamat Masjid / Musholla harus diisi!',

            'WEB_LOGO.mimes' => 'Format Logo Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_LOGO.max' => 'Ukuran Logo Maximal 5mb!',

            'WEB_FAVICON.mimes' => 'Format Favicon Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_FAVICON.max' => 'Ukuran Favicon Maximal 5 MB!',

            'WEB_BACKGROUND_IMAGE.mimes' => 'Format Latar Belakang Harus Berupa : Jpg,Jpeg,Png!',
            'WEB_BACKGROUND_IMAGE.max' => 'Ukuran Background Maximal 5 MB!',

            'WEB_HEADER.required' => 'Header Website Harus Diisi!',

            'WEB_MOTTO.required' => 'Semboyan Masjid / Musholla Harus Diisi!',
        ]);

        $updates = $request->all();
        foreach($updates as $key => $value){
            if($key == 'WEB_LOGO' || $key == 'WEB_FAVICON' || $key == 'WEB_BACKGROUND_IMAGE') {
                $file = $request->file($key);
                $filename = $file->getClientOriginalName();
                $file->storeAs('assets/', $filename, 'public'); 
                $value = $filename;    
            }

            Setting::where('key',$key)->update(['value' => $value]);
        }

        session()->flash('success','Sukses Ubah Settings!');
        return redirect()->back();
    }
}
