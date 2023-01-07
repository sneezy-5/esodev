
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
					<form method="POST" action="{{route('products.update',['product'=>$product->id])}}" enctype="multipart/form-data">
                        @csrf
                      @method('put')
            
              <div class="form-group">
                      <label for="exampleSelectGender">Catégorie</label>
                      
                        <select class="form-control" id="exampleSelectGender" name="category" style="width:1000px;">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
            
              </div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nom du produit</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="nom du produit" name="title" value="{{$product->title}}">
							</div>
						</div>

            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">prix du produit</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="prix du produit" name="price" value="{{$product->price}}">
							</div>
						</div>
						<div class="form-group">
                            <label>Description </label>
                            <textarea class="form-control" name="description">{{$product->description}}</textarea>
                        </div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"type="file" name="picture" >
							</div>
						</div>
            
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Stock</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="stock disponible" name="stock" value="{{$product->stock}}">
							</div>
						</div>
            <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" @if($product->status==1) checked @else @endif>
                    <label class="form-check-label" for="exampleCheck1">disponible</label>
            </div>

            <div class="form-check">
                    <input type="checkbox" class="form-check-input sale" id="exampleCheck1" name="sale">
                    <label class="form-check-label" for="exampleCheck1">En solde</label>
                  </div>
                  <div class="form-group sale_price" style="display: none;">
                    <label for="exampleInputPassword1">prix</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="prix" name="sale_price" value="{{$product->sale_price}}">
                  </div>
            <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('products.index')}}">Annuler</a></button>
					</form>

				</div>

        <script>

var value = document.querySelector('.sale');
value.addEventListener('click',()=>{
  if(value.checked==true){
    document.querySelector('.sale_price').style.display="flex";
  }else{
    document.querySelector('.sale_price').style.display="none";
  }
  //alert(value.checked)
})

</script>
@endsection



