<?php

namespace App\Http\Controllers;

use App\Models\Imagecrud;
use Illuminate\Http\Request;

class ImagecrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imgcrud = new Imagecrud;
        $data=$imgcrud -> get();
        return view('crud.index',['datas'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imgname=time().'.'.$request->image->extension();
        $request->image->move(public_path('image'),$imgname);
        
        $imgcrud= new Imagecrud;
        $imgcrud ->name = $request->name;
        $imgcrud ->price = $request->price;
        $imgcrud ->image = $imgname;

        $imgcrud->save();

         
    }

    /**
     * Display the specified resource.
     */
    public function show(Imagecrud $imagecrud)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        
        $imgcrud = new Imagecrud;
        $data=$imgcrud->where('id',$id)-> get();
        return view('crud.update',['datas'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imagecrud $imagecrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imagecrud $imagecrud)
    {
        //
    }
}
