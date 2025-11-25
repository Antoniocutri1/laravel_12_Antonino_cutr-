<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.product-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $img = null;

        if ($request->img) {
            $img = $request->file('img')->store('images', 'public');
        }

        Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'img' => $img,
        ]);

        return redirect()->route('products')->with('status', 'Prodotto inserito con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();

        // carico una nuova immagine se c'e, altrimenti mantengo la precedente
        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('images', 'public');
        } else {
            $data['img'] = $product->img;
        }

        $product->update($data);

        return redirect()->route('product.show', $product)->with('status', 'Prodotto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products')
                     ->with('status', 'Prodotto eliminato con successo!');
    }
}
