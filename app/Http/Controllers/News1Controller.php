<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News1;
use App\Models\Authors;

class News1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news1 = News1::all();
        $author = Authors::all();
        return view('admin.news1.news', compact("news1", "author"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Authors::all();
        return view('admin.news1.create', compact("data"));
        // return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // $author = Authors::all();
        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = public_path('/img/uploads/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['picture'] = "$profileImage";
        }

        News1::create($input);

        $id = $request->input('authorid');
        $auth = \App\Models\Authors::findOrFail($id);
        $news1 = \App\Models\News1::latest()->first();
        $auth->news1()->attach($news1);

        return redirect()->route('news1.index');
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
        $news1 = News1::findOrFail($id);
        return view('admin.news1.edit', compact('news1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News1 $news1)
    {
        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = public_path('/img/uploads/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['picture'] = "$profileImage";
        } else {
            unset($input['picture']);
        }

        $news1->update($input);

        return redirect()->route('news1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News1::findOrFail($id)->delete();
        return redirect()->back();
    }
}
