<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tailorclothes;
use App\Http\Resources\Clothes as ClothesResource;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get clothes
        $clothes=tailorclothes::paginate(15);
        //Return collection of articles as a resource
        return ClothesResource::collection($clothes);
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
    
        $clothes=$request->isMethod('put') ? tailorclothes::findOrFail($request->clothes_id): new tailorclothes;
        $clothes->id=$request->input('clothes_id');
        $clothes->name=$request->input('name');
        $clothes->color=$request->input('color');
        $clothes->texture=$request->input('texture');
        $clothes->quality=$request->input('quality');
        $clothes->price=$request->input('price');
        $clothes->material=$request->input('material');
        $clothes->basePhoto = $request -> input('basePhoto');
        $name = $request -> input('race');
        
        $name = str_replace('data:image/png;base64','',$name);
        

        $name = str_replace('','+',$name);
        $imageName= str_random(10).'.'.'png';
        \File::put(storage_path('app/public').'/'.$imageName,base64_decode($name));
        error_log(storage_path());
        $clothes->name=$imageName;


        if($clothes->save()){
            return new ClothesResource($clothes);
            info('The $name has been put');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clothes=tailorclothes::findOrFail($id);
        return new ClothesResource($clothes);
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
        $clothes=tailorclothes::findOrFail($id);
        if($clothes->delete()){
        return new ClothesResource($clothes);
    }
    }
}
