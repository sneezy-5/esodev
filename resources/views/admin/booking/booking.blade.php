
@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  </section>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Livrer</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>email</th>
                    <th>Adresse</th>
                    <th>Phone</th>
                    <th>Produits</th>
                    <th>Montant</th>
                    <th>Editer</th>
                    <th>Voir</th>
                    <th>Suprimer</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                 
                  @foreach ($bookings as $booking) 
                    <tr>
                      <td>@if($booking->delivered==1)Oui @else Non @endif</td>
                      <td>{{$booking->first_name}}</td>
                      <td>{{$booking->last_name}}</td>
                      <td>{{$booking->email}}</td>
                      <td>{{$booking->adresse}}</td>
                      <td>{{$booking['number']}} </td>
                      <td>
                      @if (is_array($data = unserialize($booking->products)))
                              @foreach ($data as $item)
                                  {{ $item[0] }} 
                                
                                  <p> <strong>quantité</strong>{{ $item[2] }} {{-- try this --}} </p>

                                   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">show</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                              @endforeach
                          @endif  
                   
                      </td> 
                      <td>{{$booking->amount}}</td>
                      <td class="text-end">
                        <a class="btn btn-secondary" href="{{ route('booking.edit',['booking'=>$booking->id])}}">Mètre à jour</a>
                        </td>
                        <td>
                      <a class="btn btn-secondary" href="{{ route('booking.show',['booking'=>$booking->id])}}">Voir</a>
                              <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button> -->

 </td>
                        <td>
                        <form style="display: inline-block;" action="{{ route('booking.destroy', ['booking'=>$booking->id])}}" method="post"> 
                          @csrf 
                          @method('delete')
                          <button class="btn btn-danger" type="submit">Suprimer</button>
                        </form>
                      </td>
         
                    </tr>
                    @endforeach
                    <!-- <div class="col-6">
                    <a class="btn btn-primary" href="{{route('booking.create')}}">Ajouté Commande</a>
                    </div> -->
                    
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->


    </section>

</div>

@endsection