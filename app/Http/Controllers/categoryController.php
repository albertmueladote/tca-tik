<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    public function list()
    {
        $categories = category::all();
        return view('categories')->with('categories', $categories)->with('url', 'category');
    }

    public function detail(Request $request)
    {
        $category = category::find($request->id_category);
        if($category) {
            return view('category')->with('item', $category)->with('id', $category->id_category)->with('url', 'category')->with('back', 'categories');
        } else {
            return redirect('/categories')->with('error', 'Categoría no encontrada');
        }
    }

    public function remove(Request $request)
    {
        $category = category::find($request->id_category);
        if ($category) {
            $category->delete();
            return redirect('/categories')->with('success', 'Categoría eliminada correctamente');
        } else {
            return redirect('/categories')->with('error', 'Categoría no encontrada');
        }
    }

    public function update(Request $request)
    {
        $category = category::find($request->id_category);
        if ($category) {
            $request->validate([
                'name' => 'required|string',
            ]);
            $category->update($request->all());
            return redirect('/category/' . $category->id_category)->with('success', 'Categoría actualizada correctamente');
        } else {
            return redirect('/categories')->with('error', 'Categoría no encontrada');
        }
    }

    public function new()
    {
        return view('category')->with('url', 'category')->with('back', 'categories');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
        ]);
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect('/categories')->with('success', 'Categoría creada correctamente');
    }

}
