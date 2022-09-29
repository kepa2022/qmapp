@extends('layouts.app')
@section('userdashboard')

            <!-- first row starts here -->
            <div class="row">
              <div class="col-sm-4 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body p-0">
                    <img class="img-fluid w-100" src="../assets/images/dashboard/img_1.jpg" alt="" />
                  </div>
                  <div class="card-body px-3 text-dark">
                    <div class="d-flex justify-content-between">
                      <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                      <i class="mdi mdi-heart-outline"></i>
                    </div>
                    <h5 class="font-weight-semibold"> Cosy Studio flat in London </h5>
                    <div class="d-flex justify-content-between font-weight-semibold">
                      <p class="mb-0">
                        <i class="mdi mdi-star star-color pe-1"></i>4.60 (35) 
                      </p>
                        <p class="mb-0">$5,267/night</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body p-0">
                    <img class="img-fluid w-100" src="../assets/images/dashboard/img_2.jpg" alt="" />
                  </div>
                  <div class="card-body px-3 text-dark">
                    <div class="d-flex justify-content-between">
                      <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                      <i class="mdi mdi-heart-outline"></i>
                    </div>
                    <h5 class="font-weight-semibold"> Victoria Bedsit Studio Ensuite </h5>
                    <div class="d-flex justify-content-between font-weight-semibold">
                      <p class="mb-0">
                       <i class="mdi mdi-star star-color pe-1"></i>4.83 (12) 
                      </p>
                        <p class="mb-0">$6,144/night</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body p-0">
                    <img class="img-fluid w-100" src="../assets/images/dashboard/img_3.jpg" alt=""  />
                  </div>
                  <div class="card-body px-3 text-dark">
                    <div class="d-flex justify-content-between">
                      <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                      <i class="mdi mdi-heart-outline"></i>
                    </div>
                    <h5 class="font-weight-semibold">Fabulous Huge Room</h5>
                    <div class="d-flex justify-content-between font-weight-semibold">
                      <p class="mb-0">
                        <i class="mdi mdi-star star-color pe-1"></i>3.83 (15) 
                      </p> 
                        <p class="mb-0">$5,267/night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

  


            <!-- chart row starts here -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Profile</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
    <ul>
     Name : {{$data->name}}
    </ul>
    <ul>
     Role : {{$data->roleid}}
    </ul>
    <ul>
     Email : {{$data->email}}
    </ul>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <form method="POST" action="{{ route('userdata') }}">
  
       @csrf
      <input type="hidden" id="userId" name="userId" value="{{$data->id}}">
      <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Edit</button>
      </form>
      </div>

    </div>
  </div>
</div>
            <!-- chart row starts here -->
            
            <!-- image card row starts here -->
            
            <!-- table row starts here -->
           
            <!-- doughnut chart row starts -->
            
            <!-- last row starts here -->
 
@endsection

