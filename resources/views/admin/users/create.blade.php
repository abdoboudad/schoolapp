@extends('admin.layouts.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            @foreach ($errors->all() as $error)
                    <p class="text-semibold">{{ $error }} </p> 
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <span class="text-semibold">{{ session('success')  }}</span> 
        </div>
    @endif

<div class="panel registration-form">
    <div class="panel-body">
        <div class="text-center">
            <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
            <h5 class="content-group-lg">Créer compte <small class="display-block">All fields are required</small></h5>
        </div>
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Choisissez Nom d'utilisateur">
                <div class="form-control-feedback">
                    <i class="icon-user-plus text-muted"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="password" name="password" value="{{ old('password') }}"  class="form-control" placeholder="Créer un mot de passe">
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="password" value="{{ old('password') }}"  name="password_confirmation" class="form-control" placeholder="Répéter le mot de passe">
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="Votre email">
                        <div class="form-control-feedback">
                            <i class="icon-mention text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control" placeholder="téléphone">
                        <div class="form-control-feedback">
                            <i class="icon-phone text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <input type="text" name="role" value="{{ old('role') }}"  class="form-control" placeholder="rôle">
                        <div class="form-control-feedback">
                            <i class=" icon-file-eye2 text-muted"></i>
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