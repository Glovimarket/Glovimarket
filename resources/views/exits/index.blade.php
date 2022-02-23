@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Usuarios')
@section('valor', 'asd')
@section('icon','person')

<!----------- Tabla --------------------->
@section('main')

								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
										<table id="recent-flex-proyectos-card-body-table">
											<thead>
												<tr>
													<td>Cliente </td>
													<td>Producto</td>
													<td>Cantidad</td>
													<td>Valor total</td>
													<td>Controles</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($exits as $exit)
														<tr>
															<td>{{$exit->users_id}}</td>
															<td>{{$exit->products_id}}</td>
															<td>{{$exit->amount_products}}</td>
															<td>{{$exit->value}}</td>
															<td><a href="{{route('exits.show', $exit->id)}}">Detalles</a></td>
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