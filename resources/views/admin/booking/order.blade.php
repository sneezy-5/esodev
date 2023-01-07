@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
<div class="container-fluid">
<div class="row justify-content-center ">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Commande</h3>
			
              </div>

			  @if ($errors->any())
			<div class="alert alert-danger">
				<ul class="list-unstyled">
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('booking.store')}}"  enctype="multipart/form-data">

              @csrf
			  <div class="card-body">
             			 <div class="form-group">
							<label for="fname">Prénom<span>*</span></label>
							<input id="fname" type="text" name="fname" class="form-control"  value="" placeholder="Your name">
							</div>
							<div class="form-group">
							<label for="lname">Nom<span>*</span></label>
							<input id="lname" type="text" name="lname" class="form-control"  value="" placeholder="Your last name">
							</div>
							<div class="form-group">
							<label for="email">Email:</label>
							<input id="email" type="email" name="email" class="form-control"  value="" placeholder="Type your email">
							</div>
						
						<div class="form-group">
						<label for="phone">Phone<span>*</span></label>
                   		 <input  id="phone"  type="number" class="form-control"  placeholder="10 digits format" name="phone">
                  		</div>
						
						  <div class="form-group">
							<label for="add">Adresse<span>*</span></label>
							<input id="add" type="text" name="add" class="form-control"  value="" placeholder="Street at apartment number">
							</div>
					
							<div class="form-group">
							<label for="city">Vile<span>*</span></label>
							<input id="city" type="text" name="city" class="form-control"  value="" placeholder="City name">
							</div>

							<div class="form-group">
						
						<select class="selectpicker" class="form-control" name="produit">
						@foreach($products as $product)
						<option value="{{$product->id}}">{{$product->title}}</option>
						@endforeach
						</select>
						</div>
	
						
						<div class="form-group">
							<label for="status">Liver</label>
							<input id="status" type="checkbox"name="delivered" value="0" onclick="check()" placeholder="Your postal code">
							</div>
				
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				</div>
              </form>
            </div>
            <!-- /.card -->

          

          
        

          </div>
    </div>
    </div>
    </div>


	<script>
		function check(){
			document.getElementById('status').value=1;
			//console.log(document.getElementById('status').value)
		}
		
	</script>
@endsection
