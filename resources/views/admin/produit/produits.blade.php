


@extends('layouts.admin')

@section('content')
<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Produits</h4>
						
						</div>
					
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nom du produit</th>
								<th scope="col">Prix</th>
								<th scope="col">Image</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($products as $product)
							<tr>
								<th scope="row">{{$product->id}}</th>
								<td>{{$product->title}}</td>
								<td>{{$product->price}}</td>
								<td><img src="{{asset('storage/image/'.$product->picture)}}" alt="" width="100" height="100"></td>
                                <td>
                            <p>
                            <a href="{{route('products.edit',['product'=>$product->id])}}"><i class="fa fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('products.show',['product'=>$product->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('products.destroy',['product'=>$product->id])}}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit"><i class="fa fa-trash" style='font-size:36px;color:red'></i></button>
                            </form>
                         
                            
                            </p>
                
                      
                          </td>
							</tr>
                            @endforeach
						
						</tbody>
					</table>
				</div>
@endsection