@extends('template1')

<!----------- Settings template --------------------->
@section('titulo','Proveedores')
@section('valor', '')
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
													<td>Apellido</td>
													<td>Telefono</td>
													<td>Email</td>
													<td>Controles</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($suppliers as $user)
														<tr>
															<td>{{$user->name}}</td>
															<td>{{$user->name_supplier}}</td>
															<td>{{$user->telephone}}</td>
															<td>{{$user->email}}</td>
															<td><a href="{{route('user.show', $user->id)}}">Detalles</a></td>
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