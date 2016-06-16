@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($teamdata))
    <div class="row">
        <div class="col-md-9">
            <img class="img-rounded img-responsive" src="../{{$teamdata['project_logo']}}" alt="test">
        </div>

        <div class="col-md-3">
            <h2>{{$teamdata['project_name']}}</h2>
            <h3>{{$teamdata['team_name']}}</h3>
            <hr>
            <h4>{!! $teamdata['project_descript'] !!}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <hr>
        </div>
    </div>
    <div class="row">

        @foreach($memberdata as $row)
                <div class="col-xs-12">
                    <div class="col-xs-3">
                        <img class="img-rounded img-responsive" src="http://github.com/{{$row['name']}}.png?size=200" alt="test">
                    </div>
                    <div class="col-xs-9">
                        <h3>{{$row['stuid']}}</h3>
                        <h3>{{$row['name']}}</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <hr>
                    </div>
                </div>
        @endforeach

    </div>
    @endif
</div>
@endsection
