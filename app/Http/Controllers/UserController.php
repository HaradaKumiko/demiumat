<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::where('name', 'LIKE', '%'.$search.'%')->orderBy('id', 'asc')->paginate(2);
        else
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'alamat' => 'nullable',
            'telepon' => 'nullable',
            'avatar' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        ],

        [
            'name.required' => 'Nama Harus Diisi!',

            'email.required' => 'Email Harus Diisi!',
            'email.unique' => 'Email Sudah Digunakan, Silahkan Ganti Email Lain!',

            'avatar.mimes' => 'Format Avatar Harus Berupa : Jpg,Jpeg,Png!',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('user12345');
        $user->role = $request->role;
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;
        if($request->hasFile('avatar')){
            $user->avatar = $request->file('avatar')->store('avatar', 'public');
        }
        $user->save();

        session()->flash('success', "Sukses Menambahkan Pengguna $request->name");
        return redirect()->route('users.index');


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

        $user = User::FindOrFail($id);
        return view('admin.users.edit', compact('user'));
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
        $this->validate($request, [
            'name' => 'required',
            'alamat' => 'nullable',
            'telepon' => 'nullable',
            'avatar' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        ],

        [
            'name.required' => 'Nama Harus Diisi!',

            'avatar.mimes' => 'Format Avatar Harus Berupa : Jpg,Jpeg,Png!',
        ]);

        $user = User::FindOrFail($id);
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;

        if($request->hasFile('avatar')){
            if($user->avatar != "avatar/avatar-1.png"){
                Storage::disk('public')->delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('avatar', 'public');

        }
        $user->save();
        
        session()->flash('success', "Sukses Ubah Pengguna $request->name");
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        if($user->avatar != "avatar/avatar-1.png"){
            Storage::disk('public')->delete($user->avatar);
        }
        $user->delete();
        
        session()->flash('success', "Sukses Menhapus Pengguna");
        return redirect()->route('users.index');
    }
}
