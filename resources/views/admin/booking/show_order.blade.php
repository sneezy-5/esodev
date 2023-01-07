@extends('layouts.admin')

@section('content')


<div class="container-fluid">
<div class="row justify-content-center ">
          <div class="col-md-3">

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
    
              <div class="card-body">
                <div class="tab-content">
                 
                

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <p>{{$booking->first_name}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-10">
                          <p>{{$booking->last_name}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <p>{{$booking->email}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-10">
                          <p>{{$booking->adresse}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Produits</label>
                        <div class="col-sm-10">
                        @if (is_array($data = unserialize($booking->products)))
                              @foreach ($data as $item)
                                  {{ $item[0] }} 
                                
                                 <p> <strong> quantité {{ $item[2] }}</strong> {{-- try this --}} </p> 
                                  @endforeach
                        @endif  
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Amount</label>
                        <div class="col-sm-10">
                        <p>{{$booking->amount}}</p>
                        </div>
                      </div>
                      
                  </div>
                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    
    </div> 
  </div>
@endsection
