
@extends('layouts.admin')

@section('content')

<div class="pd-20 card-box mb-30">
@if ($errors->any())
			<div class="alert alert-danger">
				<ul class="list-unstyled">
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
					<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nom de catégorie</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="nom de cétgorie" name="name">
							</div>
						</div>

      
            <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('products.index')}}">Annuler</a></button>
					</form>

				</div>

@endsection



