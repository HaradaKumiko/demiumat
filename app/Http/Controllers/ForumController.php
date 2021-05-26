<?php

namespace App\Http\Controllers;

use Auth;
use Storage;
use App\Models\Forum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ForumController extends Controller
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
        $forums = Forum::where('title', 'LIKE', '%'.$search.'%')->orderBy('id', 'desc')->paginate(10);
        else
        $forums = Forum::orderBy('id', 'desc')->paginate(10);
        return view('forums.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forums.create');
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
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        ],

        [
            'title.required' => 'Judul Harus Diisi!',

            'content.required' => 'Konten Harus Diisi!',

            'thumbnail.mimes' => 'Format Thumbnail Harus Berupa : Jpg,Jpeg,Png!',
            'thumbnail.max' => 'Ukuran Thumbnail Maximal 5 MB',
        ]);
        
        $forum = new Forum;
        $forum->title = $request->title;
        $forum->slug =  Str::slug($request->title, '-') . '-' . time();
        $forum->content = $request->content;
        if($request->hasFile('thumbnail')){
            $forum->thumbnail = $request->file('thumbnail')->store('thumbnail', 'public');
        }
        $forum->user_id = Auth::user()->id;
        $forum->save();

        session()->flash('success', "Sukses Menambahkan Forum $request->title");
        return redirect()->route('forums.index');
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
        $forum = Forum::findOrFail($id);
        return view('forums.edit', compact('forum'));

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
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        ],

        [
            'title.required' => 'Judul Harus Diisi!',

            'content.required' => 'Konten Harus Diisi!',

            'thumbnail.mimes' => 'Format Thumbnail Harus Berupa : Jpg,Jpeg,Png!',
            'thumbnail.max' => 'Ukuran Thumbnail Maximal 5 MB',
        ]);

        $forum = Forum::findOrFail($id);
        $forum->title = $request->title;
        $forum->slug =  Str::slug($request->title, '-') . '-' . time();
        $forum->content = $request->content;
        if($request->hasFile('thumbnail')){
            if($forum->thumbnail != "thumbnail/default.jpg"){
                Storage::disk('public')->delete($forum->thumbnail);
            }
            $forum->thumbnail = $request->file('thumbnail')->store('thumbnail', 'public');
        }
        $forum->save();
        
        session()->flash('success', "Sukses Ubah Forum $request->title");
        return redirect()->route('forums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::findOrFail($id);
        if($forum->thumbnail != "thumbnail/default.jpg"){
            Storage::disk('public')->delete($forum->thumbnail);
        }
        $forum->delete();
        
        session()->flash('success', "Sukses Menghapus Forum");
        return redirect()->route('forums.index');
    }
}
