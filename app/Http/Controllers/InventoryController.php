<?php

namespace App\Http\Controllers;

use Auth;
use Storage;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if(!empty($search))
        $inventories = Inventory::where('name', 'LIKE', '%'.$search.'%')->orderBy('id', 'asc')->paginate(5);
        else
        $inventories = Inventory::paginate(10);
        return view('admin.inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory = new Inventory;
        $inventory->name = $request->name;
        $inventory->amount = $request->amount;
        $inventory->status = $request->status;
        $inventory->source = $request->source;
        if($request->hasFile('gallery')){
            $inventory->gallery = $request->file('gallery')->store('gallery', 'public');
        }
        $inventory->user_id = Auth::user()->id;
        $inventory->save();
        
        session()->flash('success', "Sukses Menambahkan Inventaris $request->name");
        return redirect()->route('inventory.index');
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
    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('admin.inventories.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->name = $request->name;
        $inventory->amount = $request->amount;
        $inventory->status = $request->status;
        $inventory->source = $request->source;
        if($request->hasFile('gallery')){
            if($inventory->gallery != "gallery/default.jpg"){
                Storage::disk('public')->delete($inventory->gallery);
            }
            $inventory->gallery = $request->file('gallery')->store('gallery', 'public');

        }
        $inventory->user_id = Auth::user()->id;
        $inventory->save();
        
        session()->flash('success', "Sukses Ubah Inventaris $request->name");
        return redirect()->route('inventory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        if($inventory->gallery != "gallery/default.jpg"){
            Storage::disk('public')->delete($inventory->gallery);
        }
        $inventory->delete();
        
        session()->flash('success', "Sukses Menghapus Inventaris");
        return redirect()->route('inventory.index');
    }
}
