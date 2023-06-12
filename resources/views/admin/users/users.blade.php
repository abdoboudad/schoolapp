@extends('admin.layouts.layout')
@section('content')

    @if (session('success'))    
    <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
        <span class="text-semibold">{{ session('success')  }}</span> 
        </div>
    @endif
    @if (session('supprimer'))    
    <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
        <span class="text-semibold">{{ session('supprimer')  }}</span> 
        </div>
    @endif
    <div class="row">
        @forelse ($users as $user)

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-body">
                <div class="media">
                    <div class="media-body">
                        <h6 class="media-heading"> {{ $user->name }} </h6>
                        <span class="text-muted"> {{ $user->role }} </span>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list icons-list-vertical">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href={{ route('profile',$user->name) }}><i class="icon-user pull-right"></i> Profil </a></li>
                                    <li><a href={{ route('users.edit',$user->name) }}><i class="icon-pen pull-right"></i> Modifier </a></li>
                                    <form action="{{ route('status', $user->id) }}" method="post">
                                        @csrf
                                        @if ($user->status === 'debloc')
                                        <li><button type="submit" style="border: 0;background-color:transparent;padding:10px 15px;width:100%;text-align:start;"><i class="icon-user-block pull-right" ></i> Bloc </button></li>
                                        @else
                                        <li><button type="submit" style="border: 0;background-color:transparent;padding:10px 15px;width:100%;text-align:start;"><i class="icon-user-check pull-right"></i> débloquer </button></li>
                                        @endif
                                    </form>
                                    <li class="divider"></li>
                                    <li>
                                        <form action="{{ route('users.destroy',$user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border: 0;background-color:transparent;padding:10px 15px;width:100%;text-align:start;" ><i class="icon-trash pull-right"></i>  supprimer </button>                                
                                        </form>                                    
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @empty
        
        @endforelse
    </div>
        


@endsection