@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Categorias')
@section('icon','heart')

<!----------- Tabla --------------------->
@section('main')

									<button data-bs-toggle="modal" data-bs-target="#createModal"><a href="{{route('admin.categories.create')}}">Añadir</a>
											<ion-icon name="chevron-forward-outline"> </ion-icon>
										</button>
								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
										<table id="recent-flex-proyectos-card-body-table">
											<thead>
												<tr>
													<th>Nombre </th>
													<th>Controles</th>
												</tr>
											</thead>
											<tbody>
													@foreach ($categories as $category)
														<tr>
															<td>{{$category->name}}</td>
															<td><a href="{{route('admin.categories.show', $category->id)}}">Detalles</a></td>
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