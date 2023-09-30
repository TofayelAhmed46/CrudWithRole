<?php

namespace App\Http\Controllers;

use App\Models\Crudmodel;
use Illuminate\Http\Request;

class CrudmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = new Crudmodel;
        $data = $model->get();
        return view('crudpractice.index', ['data' => $data]);
    }


    public function create()
    {
        return view('crudpractice.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imgname = time() . '.' . $request->image->extension();
        $request->image->move(public_path('crudimage'), $imgname);

        $model = new Crudmodel;
        $model->name = $request->name;
        $model->image = $imgname;
        $model->save();
        return redirect()->route('crud.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Crudmodel $crudmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = new Crudmodel;
        $data = $model->where('id', $id)->get();
        return view('crudpractice.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $imgname = time() . '.' . $request->image->extension();
        $request->image->move(public_path('crudimage'), $imgname);

        $model = new Crudmodel;
        $data = $model->where('id', $id)->first();
        $data->name = $request->name;
        $data->image = $imgname;
        $data->save();
        return redirect()->route('crud.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = new Crudmodel;
        $data = $model->where('id', $id)->first();
        $data->delete();
        return redirect()->route('crud.index')->with('success', 'Item deleted successfully');
    }
}