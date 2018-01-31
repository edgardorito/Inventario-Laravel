<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller{
  public function index(){

    $product = Product::orderBy('id','ASC')->paginate(5);

    return view('admin.products.index')->with('products',$product);
  }

  public function create(){

    return view('admin.products.create');

  }

  public function store(Request $request){
    $product = new Product($request->all());
    $product->user_id = $request->user_id;
    $product->totalPrice = ($request->unitPrice) * $request->quantity;
    $product->save();

    Flash("Se ha registrado el producto". $product->name . "de forma existosa" )->success();
    return redirect()->route('products.index');
  }

  public function edit($id){
    $product = Product::find($id);
    return view('admin.products.edit')->with('product',$product);
  }

  public function update(Request $request, $id){
    $product = Product::find($id);
    $product->fill($request->all());
    $product->save();

    Flash("El producto ". $product->name . " ha sido editado con exito" )->success();
    return redirect()->route('products.index');
  }

  public function destroy($id){
    $product = Product::find($id);
    $product->delete();
    Flash("Se ha eliminado ". $product->name . "de forma existosa" )->error();
    return redirect()->route('products.index');

  }
/*


  public function show(){

  }

  */
}
