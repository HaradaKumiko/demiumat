<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Cash;
use Illuminate\Http\Request;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cashs = Cash::orderBy('id', 'desc')->paginate(10);
        return view('admin.cashes.index', compact('cashs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createin()
    {
        $cashs = Cash::where('type', 'Masuk')->paginate(10);
        return view('admin.cashes.createin', compact('cashs'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createout()
    {
        $cashs = Cash::where('type', 'Keluar')->paginate(10);
        return view('admin.cashes.createout', compact('cashs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storein(Request $request)
    {
        $cash = new Cash;
        $cash->info = $request->info;
        $cash->amount = $request->amount;
        $cash->type = "Masuk";
        $cash->user_id =  Auth::user()->id;
        $cash->save();

        session()->flash('success', "Sukses Menambahkan Data Kas Masuk");
        return redirect()->route('cashs.index');
    }

    public function storeout(Request $request)
    {
        $cash = new Cash;
        $cash->info = $request->info;
        $cash->amount = $request->amount;
        $cash->type = "Keluar";
        $cash->user_id =  Auth::user()->id;
        $cash->save();

        session()->flash('success', "Sukses Menambahkan Data Kas Keluar");
        return redirect()->route('cashs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editin($id)
    {
        $cash = Cash::findOrFail($id);
        return view('admin.cashes.editin', compact('cash'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatein(Request $request, $id)
    {
        $cash = Cash::findOrFail($id);
        $cash->info = $request->info;
        $cash->amount = $request->amount;
        $cash->save();

        session()->flash('success', "Sukses Mengedit Data Kas Masuk");
        return redirect()->route('cashs.index');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editout($id)
    {
        $cash = Cash::findOrFail($id);
        return view('admin.cashes.editout', compact('cash'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateout(Request $request, $id)
    {
        $cash = Cash::findOrFail($id);
        $cash->info = $request->info;
        $cash->amount = $request->amount;
        $cash->save();

        session()->flash('success', "Sukses Mengedit Data Kas Masuk");
        return redirect()->route('cashs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cash = Cash::findOrFail($id);
        $cash->delete();

        session()->flash('success', "Sukses Mengahapus Data Kas");
        return redirect()->route('cashs.index');
    }
}
