<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('BlogCRUD.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BlogCRUD.create');
    }

    public function store(Request $request)
    {
        Blog::create($request->all());
        return redirect('/blog')
                        ->with('success','Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('BlogCRUD.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('BlogCRUD.edit',compact('blog'));
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

        $this->Requests($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        Blog::update($request->all());
        return redirect('/blog')
                        ->with('success','Blog update successfully');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
          return redirect('/blog')->with('alert-success', 'Data Berhasil Dihapus.');
        //
    }
}
