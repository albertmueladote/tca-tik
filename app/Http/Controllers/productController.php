<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\store;

class productController extends Controller
{
    public function list()
    {
        $products = product::all();
        return view('products')->with('products', $products)->with('url', 'product');
    }

    public function detail(Request $request)
    {
        $product = product::find($request->id_product);
        if ($product) {
            $categories = category::all();
            $stores = store::all();
        return view('product')->with('item', $product)->with('categories', $categories)->with('stores', $stores)->with('id', $product->id_product)->with('url', 'product')->with('back', 'products');
        } else {
            return redirect('/products')->with('error', 'Producto no encontrado');
        }
    }

    public function remove(Request $request)
    {
        $product = product::find($request->id_product);
        if ($product) {
            $product->delete();
            return redirect('/products')->with('success', 'Producto eliminado correctamente');
        } else {
            return redirect('/products')->with('error', 'Producto no encontrado');
        }
    }

    public function update(Request $request)
    {
        $product = product::find($request->id_product);
        if ($product) {
            $request->validate([
                'name' => 'required|string',
                'price' => 'required|numeric',
                'observations' => 'nullable|string',
                'id_category' => 'required|integer',
            ]);
            $product->update($request->all());
            $product->stores()->sync($request->input('id_store', []));
            return redirect('/product/' . $product->id_product)->with('success', 'Producto actualizado correctamente');
        } else {
            return redirect('/products')->with('error', 'Producto no encontrado');
        }
    }

    public function new()
    {
        $categories = category::all();
        $stores = store::all();
        return view('product')->with('categories', $categories)->with('stores', $stores)->with('url', 'product')->with('back', 'products');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'observations' => 'nullable|string',
            'id_category' => 'required|integer',
        ]);
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->observations = $request->input('observations');
        $product->id_category = $request->input('id_category');
        $product->save();
        $product->stores()->sync($request->input('id_store', []));
        return redirect('/products')->with('success', 'Producto creado correctamente');
    }
}