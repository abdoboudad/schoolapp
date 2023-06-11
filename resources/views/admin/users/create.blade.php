@extends('admin.layouts.layout')
@section('content')

<div class="panel registration-form">
    <div class="panel-body">
        <div class="text-center">
            <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
            <h5 class="content-group-lg">Créer compte <small class="display-block">All fields are required</small></h5>
        </div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Choose username">
                <div class="form-control-feedback">
                    <i class="icon-user-plus text-muted"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="password" name="password" value="{{ old('password') }}"  class="form-control" placeholder="Create password">
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="password" value="{{ old('password') }}"  name="password_confirmation" class="form-control" placeholder="Repeat password">
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="Your email">
                        <div class="form-control-feedback">
                            <i class="icon-mention text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control" placeholder="phone">
                        <div class="form-control-feedback">
                            <i class="icon-phone text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="text" name="role" value="{{ old('role') }}"  class="form-control" placeholder="role">
                        <div class="form-control-feedback">
                            <i class="icon-phone text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            
            

            <div class="text-right">
                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
            </div>
    </form>
    </div>
</div>

@endsection