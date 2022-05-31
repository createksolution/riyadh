<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Proprety;
use Illuminate\Http\Request;
// use Intervention\Image\ImageManagerStatic as Photo;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($image){
        // dd($image);die();
        Image::find($image)->delete();
    }

    public function image($id,Request $request){
        if( $request->file('photo')){
            $photo = $request->file('photo')->getClientOriginalName();
            // $img = Photo::make('foo.jpg')->resize(300, 200);
            // return $img->response('jpg');
            Image::create(['proprety'=>$id, 'image'=>$photo]);
            $request->file('photo')->move(public_path('gallery'), $request->file('photo')->getClientOriginalName());
            $proprety = Proprety::where('unique',$id)->first();
            return redirect("/getProprety/".$proprety->id);
        }else{

            $photo = $request->file('file')->getClientOriginalName();
            Image::create(['proprety'=>$id, 'image'=>$photo]);
            $request->file('file')->move(public_path('gallery'), $request->file('file')->getClientOriginalName());
        }

    }
}
