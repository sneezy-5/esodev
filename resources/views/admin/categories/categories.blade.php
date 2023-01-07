


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
								<th scope="col">Nom</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($categories as $category)
							<tr>
								<th scope="row">{{$category->id}}</th>
								<td>{{$category->name}}</td>
                            <td>
                            <p>
                            <a href="{{route('categories.edit',['category'=>$category->id])}}"><i class="fa fa-edit"  style='font-size:36px'></i></a> 
                            <a href="{{route('categories.show',['category'=>$category->id])}}"><i class="fa fa-eye"  style='font-size:36px'></i></a>
                            <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="post">
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