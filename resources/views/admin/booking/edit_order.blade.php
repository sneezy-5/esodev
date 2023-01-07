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
              <form method="post" action="{{route('booking.update',['booking'=>$booking->id])}}" enctype="multipart/form-data">

              @csrf
              @method('put')
              <p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input id="fname" type="text" name="first_name" value="{{$booking->first_name}}" placeholder="Your name">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input id="lname" type="text" name="last_name" value="{{$booking->last_name}}" placeholder="Your last name">
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input id="email" type="email" name="email" value="{{$booking->email}}" placeholder="Type your email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input id="phone" type="number" name="number" value="{{$booking->number}}" placeholder="10 digits format">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input id="add" type="text" name="adresse" value="{{$booking->adresse}}" placeholder="Street at apartment number">
						</p>

						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input id="city" type="text" name="city" value="{{$booking->city}}" placeholder="City name">
						</p>
						<p class="row-in-form fill-wife">
						<p class="row-in-form">
							<label for="status">Liver</label>
							<input id="status" type="checkbox"name="delivered" value="0" onclick="check()" placeholder="Your postal code">
						</p>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
