@extends('1template')

<!----------- Settings template --------------------->
@section('titulo','Ingresos')
@section('valor', 'askjjjjjd')
@section('icon','person')

<!----------- Tabla --------------------->
@section('main')

								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
										<table id="recent-flex-proyectos-card-body-table">
											<thead>
												<tr>
													<td>Proveedor </td>
													<td>Producto</td>
													<td>Cantidad</td>
													<td>Valor</td>
													<td>Fecha</td>
													<td>Controles</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($incomes as $income)
														<tr>
															<td>{{$income->users_id}}</td>
															<td>{{$income->products_id}}</td>
															<td>{{$income->amount_products}}</td>
															<td>{{$income->value}}</td>
															<td>{{$income->date}}</td>
															<td><a href="{{route('incomes.show', $income->id)}}">Detalles</a></td>
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