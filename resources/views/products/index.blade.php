@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Productos')
@section('icon','pricetag')

<!----------- Tabla --------------------->
@section('main')

									<button data-bs-toggle="modal" data-bs-target="#createModal"><a href="{{route('products.create')}}">Añadir</a>
											<ion-icon name="chevron-forward-outline"> </ion-icon>
										</button>
								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
										<table id="recent-flex-proyectos-card-body-table">
											<thead>
												<tr>
													<td>Nombre </td>
													<td>Cantidad</td>
													<td>Valor</td>
													<td>Descripcion</td>
													<td>Controles</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($products as $product)
														<tr>
															<td>{{$product->name}}</td>
															<td>{{$product->amount}}</td>
															<td>{{$product->value}}</td>
															<td>{{$product->description}}</td>
															<td><a href="{{route('products.show', $product->id)}}">Detalles</a></td>
														</tr>
													@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
				</section>
			</main>
		</section>
		</div>
@endsection