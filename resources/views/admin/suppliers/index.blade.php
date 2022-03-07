@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Proveedores')
@section('valor', '')
@section('icon','person')

<!----------- Tabla --------------------->
@section('main')

									<button data-bs-toggle="modal" data-bs-target="#createModal"><a href="{{route('admin.suppliers.create')}}">Añadir</a>
											<ion-icon name="chevron-forward-outline"> </ion-icon>
										</button>
								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
										<table id="recent-flex-proyectos-card-body-table">
											<thead>
												<tr>
													<td>Empresa </td>
													<td>Nombre de Contacto</td>
													<td>Telefono</td>
													<td>Email</td>
													<td>Controles</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($supplier as $user)
														<tr>
															<td>{{$user->name}}</td>
															<td>{{$user->name_supplier}}</td>
															<td>{{$user->telephone}}</td>
															<td>{{$user->email}}</td>
															<td><a href="{{route('admin.suppliers.show', $user->id)}}">Detalles</a></td>
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