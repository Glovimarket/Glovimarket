@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Usuarios')
@section('valor', '22')
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
													<td>Correo electronico</td>
													<td>Rol</td>
													<td>Fecha de creacion</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($users as $user)
														<tr>
															<td>{{$user->name}}</td>
															<td>{{$user->email}}</td>
															<td>
																@if(auth()->user()->is_admin == 1)
																		Administrador
																@else
																		Usuario
																@endif
															</td>
															<td>{{$user->updated_at}}</td>
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