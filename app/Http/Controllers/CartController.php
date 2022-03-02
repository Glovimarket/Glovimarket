<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Collection;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
       return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Producto agregado al carrito !');

        $product = Products::find($request->id);

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Los productos se han actualizado correctamente !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Los productos se han removido correctamente !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Todos Los productos se han removido correctamente !');

        return redirect()->route('cart.list');
    }

    public function factura(Request $request){

        $resultado = str_split($request->resultado, 2);
        $pattern = "/[-]/";
        $components = preg_split($pattern, $request->resultado);
        return $components;

        //Solo necesitaria parsear el arreglo de la cadena de texto a enteros, realizar la consulta de cada uno de los productos y registrar los en la tabla de facturas.
    }
}