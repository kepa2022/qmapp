@extends('Admin.adminlayout')
@section('Admin_usercreate')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin_userupdate') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                      
                        
                        <div class="row mb-3">
                            <label for="designation" class="col-md-4 col-form-label text-md-end">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control" name="designation" value="{{$user->designation}}" required autocomplete="designation">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="dept_id" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="dept_id" type="text" class="form-control" name="dept_id" value="{{$user->dept_id}}" required autocomplete="dept_id">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="pen" class="col-md-4 col-form-label text-md-end">{{ __('PEN') }}</label>

                            <div class="col-md-6">
                                <input id="pen" type="text" class="form-control" name="pen" value="{{$user->pen}}" required autocomplete="pen">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="glno" class="col-md-4 col-form-label text-md-end">{{ __('GlNo') }}</label>

                            <div class="col-md-6">
                                <input id="glno" type="text" class="form-control" name="glno" value="{{$user->glno}}" required autocomplete="glno">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Contact No.') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{$user->mobile}}" required autocomplete="mobile">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="unit" class="col-md-4 col-form-label text-md-end">{{ __('Unit') }}</label>

                            <div class="col-md-6">
                                <input id="unit" type="text" class="form-control" name="unit" value="{{$user->unit}}" required autocomplete="unit">
                            </div>
                            <input type="hidden" id="userId" name="userId" value="{{$user->id}}">
                        </div>

                        



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                             
                                <a class="btn btn-danger" href="{{ route('admin_home') }}" onclick="event.preventDefault();
                                                     document.getElementById('cancel-form').submit();">
                                        {{ __('Cancel') }}
                                       
                                </a>
                            </div>
                            
                        </div>
                    </form>
                    <form id="cancel-form" action="{{ route('admin_home') }}" method="GET">
                                        @csrf
                                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection