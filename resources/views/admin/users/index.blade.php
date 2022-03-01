@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Usuarios')
@section('valor', 'asd')
@section('icon','person')

<!----------- Tabla --------------------->
@section('main')

									<button data-bs-toggle="modal" data-bs-target="#createModal"><a href="{{route('admin.users.create')}}">Añadir</a>
											<ion-icon name="chevron-forward-outline"> </ion-icon>
										</button>
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
													@foreach ($users as $user)
														<tr>
															<td>{{$user->first_name}}</td>
															<td>{{$user->last_name}}</td>
															<td>{{$user->telephone}}</td>
															<td>{{$user->email}}</td>
															<td><a href="{{route('admin.users.show', $user->id)}}">Detalles</a></td>
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