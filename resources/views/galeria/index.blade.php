@extends('template')

<!----------- Settings template --------------------->
@section('titulo','Subir Imagenes')
@section('icon','pricetag')

@section('css')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

<!----------- Tabla --------------------->
@section('main')

									<button data-bs-toggle="modal" data-bs-target="#createModal"><a href="{{route('products.create')}}">Añadir</a>
											<ion-icon name="chevron-forward-outline"> </ion-icon>
										</button>
								</div>
								<div class="recent-flex-proyectos-card-body">
									<div class="table-responsive">
                                    @foreach ($suppliers as $user)
														<tr>
															<img src="{{$user->url}}" alt="">
															<td>{{$user->name_supplier}}</td>
															<td>{{$user->telephone}}</td>
															<td>{{$user->email}}</td>
															<td><a href="{{route('user.show', $user->id)}}">Detalles</a></td>
														</tr>
													@endforeach
									</div>
								</div>
							</div>
						</div>
				</section>
			</main>
		</section>
		</div>
@endsection