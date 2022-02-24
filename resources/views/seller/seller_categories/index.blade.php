@extends('template')

<!----------- Settings template --------------------->
@section('titulo','ojjoij	')
@section('icon','heart')

<!----------- Tabla --------------------->
@section('main')

								
								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
										<table id="recent-flex-proyectos-card-body-table">
											<thead>
												<tr>
													<td>Nombre </td>
													<td>Controles</td>
												</tr>
											</thead>
											<tbody>
													@foreach ($categories as $category)
														<tr>
															<td>{{$category->name}}</td>
															<td><a href="{{route('categories.show', $category->id)}}">Detalles</a></td>
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