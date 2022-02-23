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
													<td>Nombre </td>
												</tr>
											</thead>
											<tbody>
													@foreach ($roles as $rol)
														<tr>
															<td>{{$rol->name}}</td>
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