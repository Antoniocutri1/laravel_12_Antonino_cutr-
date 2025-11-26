<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $tags = Tag::all();
        return view('product.product-create', compact('tags'));
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

        $product = Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'img' => $img,
            'user_id' => Auth::user()->id,
        ]);

        $product->tags()->attach($request->tags);

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
        if(Auth::id() == $product->user->id){
            return view('product.edit', compact('product'));
        }else{
            return redirect()->route('dashboard')->with('message', 'Non puoi effettuare questa operazione');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        if(Auth::id() == $product->user->id){

            // carico una nuova immagine se c'e, altrimenti mantengo la precedente
            if($request->hasFile('img')){
                $img = $request->file('img')->store('images', 'public');
            } else {
                $img = $product->img;
            }

            $product->update([
                'name' => $request->name,
                'type' => $request->type,
                'price' => $request->price,
                'description' => $request->description,
                'img' => $img,
            ]);

            return redirect()->route('product.show', $product)->with('status', 'Prodotto aggiornato con successo!');
        }else {
            return redirect()->route('dashboard')->with('message', 'Non puoi effettuare questa operazione');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(Auth::id() == $product->user->id){
            $product->delete();

            return redirect()->route('products')
                     ->with('status', 'Prodotto eliminato con successo!');
        }else{
            return redirect()->route('dashboard')->with('message', 'Non puoi effettuare questa operazione');
        }   
    }
}
