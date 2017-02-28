@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.settingsmenu')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Tilføj Profilbillede</div>
                    <div class="container">
                        <br>
                        <form action="" enctype="multipart/form-data" method="post">
                            <label for="">Tilføj billede</label>
                            <input type="file" name="profileimage">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit">
                        </form>
                        <br>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Tidligere profilbilleder</div>
                    <div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection