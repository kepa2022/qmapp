@extends('Admin.adminlayout')
@section('Admin_userlist')
<style>
.table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    font-weight: bold;
    background-color:#ddd0d0;
    text-align:center;
}
.table td {

    text-align:center;
}
</style>
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">USERS LIST</h4>
                 
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                          
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Designation</th>
                          <th>Dept_id</th>
                          <th>Glno</th>
                          <th>Mobile</th>
                        
                          <th style="text-align:right">Action</th>
                          <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        
                        <tr>
                          
                            <td>{{$user->name}}</td>
                            <td >{{$user->email}}</td>
                            <td>{{$user->roleid=="1"?"Admin" : "User"}}</td>
                            <td>{{$user->designation}}</td>
                            <td>{{$user->dept_id}}</td>
                            <td>{{$user->glno}}</td>
                            <td>{{$user->mobile}}</td>
                              
                              <td> 
                              @if($user->roleid=="1")
                            
                              <input type="hidden"  name="id" value="{{$user->id}}">
                            <!--  <button class="badge badge-info" href="{{ route('admin_changerole') }}" name="id"  onclick="event.preventDefault();
                                                     document.getElementById('changerole-form').submit();">
                                        {{ __('Make User') }}
                                        <form id="changerole-form" action="{{ route('admin_changerole') }}" method="POST" class="d-none">
                                        <input type="text"  name="uid" value="{{$user->id}}">
                                        @csrf
                                    </form>
                            </button> -->
                            <button class="badge badge-info" href="{{ route('admin_changerole') }}" name="id"  onclick="event.preventDefault();
                                                     document.getElementById('changerole-form').submit();">
                                        {{ __('Make User') }}
                                        <form id="changerole-form" action="{{ route('admin_changerole') }}" method="POST" class="d-none">
                                        <input type="text"  name="id" value="{{$user->id}}">
                                        @csrf
                                    </form>
                            </button>
                            

                               @else
                               <input type="hidden"  name="id" value="{{$user->id}}">
                            <!--   <button class="badge badge-warning" href="{{ route('admin_changerole') }}"   onclick="event.preventDefault();
                                                     document.getElementById('changerole-form').submit();">
                                        {{ __('Make Admin') }}
                                        <form id="changerole-form1" action="{{ route('admin_changerole') }}" method="POST" class="d-none">
                                        <input type="text"  name="aid" value="{{$user->id}}">
                                        @csrf
                                    </form>
                              </button> -->
                              <button class="badge badge-warning" href="{{ route('admin_changerole') }}" name="id"   onclick="event.preventDefault();
                                                     document.getElementById('changerole-form').submit();">
                                        {{ __('Make Admin') }}
                                        <form id="changerole-form1" action="{{ route('admin_changerole') }}" method="POST" class="d-none">
                                        <input type="text"  name="id" value="{{$user->id}}">
                                        @csrf
                                    </form>
                              </button>
                            
                              @endif
                             </td>
                          

                            
                            <td> 
                            <button name="delete" type="submit" class="badge badge-danger">Delete</button>
                            </td>
                            
                        </tr>
                        @endforeach
                         
                       
                         
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
             
              
         
                