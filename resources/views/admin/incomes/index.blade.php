@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Ingresos')
@section('valor', 'asd')
@section('icon','person')

<!----------- Tabla --------------------->
@section('main')

									<button data-bs-toggle="modal" data-bs-target="#createModal"><a href="{{route('admin.incomes.create')}}">Añadir</a>
											<ion-icon name="chevron-forward-outline"> </ion-icon>
										</button>
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
															<td><a href="{{route('admin.incomes.show', $income->id)}}">Detalles</a></td>
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