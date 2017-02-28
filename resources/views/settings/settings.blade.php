@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.settingsmenu')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Rediger profil</div>

                    <div class="panel-body">

                        {!! Form::open(array('url' => 'foo/bar')) !!}
                            <div class="form-group">
                                {{ Form::label('name', 'Navn:') }}
                                {{ Form::text('name',null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('username', 'Brugernavn:') }}
                                {{ Form::text('username',null, array('class' => 'form-control')) }}
                            </div>
                            <hr>
                            <div class="form-group">
                                {{ Form::label('email', 'E-mail:') }}
                                {{ Form::email('email',null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'Adgangskode:') }}
                                {{ Form::password('password', array('class' => 'form-control')) }}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
