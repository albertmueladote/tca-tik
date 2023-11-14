<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\product;

class storeController extends Controller
{
    public function list()
    {
        $stores = store::withCount('products')->get();
        return view('stores')->with('stores', $stores)->with('url', 'store');
    }

    public function detail(Request $request)
    {
        $store = store::find($request->id_store);
        if($store) {
            $products = product::all();
            return view('store')->with('item', $store)->with('products', $products)->with('id', $store->id_store)->with('url', 'store')->with('back', 'stores');
        } else {
            return redirect('/stores')->with('error', 'Almacén no encontrado');
        }
    }

    public function remove(Request $request)
    {
        $store = store::find($request->id_store);
        if ($store) {
            $store->delete();
            return redirect('/stores')->with('success', 'Almacén eliminado correctamente');
        } else {
            return redirect('/stores')->with('error', 'Almacén no encontrado');
        }
    }

    public function update(Request $request)
    {
        $store = store::find($request->id_store);
        if ($store) {
            $request->validate([
                'name' => 'required|string',
            ]);
            $store->update($request->all());
            $store->products()->sync($request->input('id_product', []));
            return redirect('/store/' . $store->id_store)->with('success', 'Almacén actualizado correctamente');
        } else {
            return redirect('/stores')->with('error', 'Almacén no encontrado');
        }
    }

    public function new()
    {
        $products = product::all();
        return view('store')->with('products', $products)->with('url', 'store')->with('back', 'stores');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]); 
        $store = new Store();
        $store->name = $request->input('name');
        $store->save();
        $store->products()->sync($request->input('id_product', []));
        return redirect('/stores')->with('success', 'Almacén creado correctamente');
    }
}
