@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($teamdata))
    <div class="row">
        <div class="col-md-9">
            <img class="img-rounded img-responsive" src="{{$teamdata[$teamNumber]['thumbnail']}}" alt="test">
        </div>

        <div class="col-md-3">
            <h2>{{$teamdata[$teamNumber]['projectname']}}</h2>
            <h3>{{$teamdata[$teamNumber]['teamname']}}</h3>
            <hr>
            <h4>{{$teamdata[$teamNumber]['info']}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <hr>
        </div>
    </div>
    <div class="row">
       
        @foreach($teamdata[$teamNumber]['teammembers'] as $userId)
            @if (isset($userdata[$userId]))
                <div class="col-xs-12">
                    <div class="col-xs-3">
                        <img class="img-rounded img-responsive" src="{{$userdata[$userId]['userImage']}}" alt="test">
                    </div>
                    <div class="col-xs-9">
                        <h3>{{$userdata[$userId]['username']}}</h3>
                        <h3>{{$userdata[$userId]['usergit']}}</h3>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-xs-12">
                        <hr>
                    </div>
                </div>
            @endif
        @endforeach
        
    </div>
    @endif
</div>
@endsection
