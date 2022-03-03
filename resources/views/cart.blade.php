@extends('layouts.frontend')


@section('content')
          <main class="my-8 space"style="padding-top:5rem; color:black">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5 dashboard-cards-single"style="background-color:white">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold "> Carrito</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Nombre</th>

                              <th class="pl-5 text-left lg:text-right lg:pl-0 h-12 uppercase">

                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline "style="padding-top:5rem; color:black">Cantidad</span>
                              </th>
                              <th class="hidden text-right md:table-cell"> Precio</th>
                              <th class="hidden text-right md:table-cell"> Eliminar </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" style="width:100px" 
                                    class="w-6 text-center bg-gray-300 btn-vaciar" min="1"  />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">Actualizar</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base text-black">
                                  <p style="color:black">  ${{ $item->price }}</p>
                                  
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <div>
                         Total: ${{ Cart::getTotal() }}
                        </div>
                        <div>
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300 btn-vaciar">Vaciar el carrito</button>
                          </form>
                          <form action="{{ route('cart.factura') }}" method="POST">
                            @csrf
                            <div class="datos">
                            <input type="text" name="total" value="{{Cart::getTotal()}}">
                            <?php
                            $producto_seleccionado = "";
                            $total_seleccionado = "";
                            $cantidad_seleccionado = "";
                            ?>
                            @foreach ($cartItems as $item)
                              <?php
                              $tmp_ids = $item->id;
                              $tmp_cantidad = $item->quantity;
                              $producto_seleccionado =  $producto_seleccionado.strval($tmp_ids)."-";
                              $cantidad_seleccionado =  $cantidad_seleccionado.strval($tmp_cantidad)."-"; 
                              ?>
                              @endforeach
                              <input type="text" name="resultado_ids" value="<?php echo $producto_seleccionado; ?>">
                              <input type="text" name="resultado_cantidad" value="<?php echo $cantidad_seleccionado; ?>">
                            </div>
                            <button class="px-6 py-2 text-red-800 bg-red-300 btn-vaciar">Finalizar Compra</button>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection