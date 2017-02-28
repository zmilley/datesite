@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="container">
                                <div class="profileimg" style="background-image: url('uploads/profile_images/{{$user->id }}/{{ $user->profileimgurl }}');"></div>
                                <h3>{{ $user->name }}</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
