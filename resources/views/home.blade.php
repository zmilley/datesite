@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Online profiler</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="container">
                        @if($users)

                            @foreach($users as $user)
                                    @if($user->isOnline())
                                            {{ $user->name }} <br>
                                        @endif
                                @endforeach

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
