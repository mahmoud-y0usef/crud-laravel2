<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catigory;

class catigorys extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Catigory::all();
        return view('catigory.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catigory.create');
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
            'name' => 'required',
            'description' => 'required',
            'is_active' => 'required'
        ]);

        $catigory = new Catigory();
        $catigory->name = strip_tags($request->input('name'));
        $catigory->description = strip_tags($request->input('description'));
        $catigory->is_active = strip_tags($request->input('is_active'));
        $catigory->save();

        if ($catigory->save()){
            return redirect('categories')->with('success', 'Category added successfully');
        } else {
            return redirect('categories/create')->with('error', 'Failed to add category');
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
        $index = Catigory::findOrFail($id);
        return view('catigory.show', ['index' => $index]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $index = Catigory::findOrFail($id);
        return view('catigory.edit', ['index' => $index]);
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
        $catigory = Catigory::findOrFail($id);
        $catigory->name = strip_tags($request->input('name'));
        $catigory->description = strip_tags($request->input('description'));
        $catigory->is_active = strip_tags($request->input('is_active'));
        $catigory->save();

        if ($catigory->save()){
            return redirect('categories')->with('success', 'Category updated successfully');
        } else {
            return redirect('categories/create')->with('error', 'Failed to update category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Catigory::destroy($id);
        return redirect('categories')->with('success', 'Category deleted successfully');
    }
}
