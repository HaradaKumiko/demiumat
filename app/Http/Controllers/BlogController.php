<?php

namespace App\Http\Controllers;

use Auth;
use Storage;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $blogs = Blog::where('title', 'LIKE', '%'.$search.'%')->orderBy('id', 'desc')->paginate(10);
        else
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug =  Str::slug($request->title, '-') . '-' . time();
        $blog->content = $request->content;
        if($request->hasFile('thumbnail')){
            $blog->thumbnail = $request->file('thumbnail')->store('thumbnail/blogs', 'public');
        }
        $blog->user_id = Auth::user()->id;
        $blog->save();

        session()->flash('success', "Sukses Menambahkan Blog $request->title");
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blogs.single', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->ownership()){
        return view('blogs.edit', compact('blog'));
        }else{
        abort(404);
        }
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
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->slug =  Str::slug($request->title, '-') . '-' . time();
        $blog->content = $request->content;
        if($request->hasFile('thumbnail')){
            if($blog->thumbnail != "thumbnail/default.jpg"){
                Storage::disk('public')->delete($blog->thumbnail);
            }
            $blog->thumbnail = $request->file('thumbnail')->store('thumbnail/blogs', 'public');
        }
        $blog->user_id = Auth::user()->id;
        $blog->save();
        
        session()->flash('success', "Sukses Ubah Blog $request->title");
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->ownership()){
        if($blog->thumbnail != "thumbnail/default.jpg"){
            Storage::disk('public')->delete($blog->thumbnail);
        }
        $blog->delete();
        }else{
        abort(404);
        }
        session()->flash('success', "Sukses Menghapus Blog");
        return redirect()->route('blogs.index');
    }
}
