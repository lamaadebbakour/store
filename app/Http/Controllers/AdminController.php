<?php

namespace App\Http\Controllers;
use App\Models\clothing;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 


    public function create()
    {
      


        return view('create');
    }


    public function store(Request $request)
    {    

        $attributes = \request()->validate([
            'price'=>'required',
            'image_path'=>'required|image'
        ]);

        $attributes['image_path'] = request()->file('image_path')->store('image_path');

        // clothing::create($attributes);

        return redirect('/');


    }



    public function show(Post $post)
    {
//        $post = Post::where('slug', $slug)->first();
        return view('posts.post', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
