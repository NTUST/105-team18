@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="img-rounded img-responsive" src="/img/Title.JPG" alt="test">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (isset($teamdata))
                @foreach ($teamdata as $team)
                <div class="col-md-4">
                    <a href="../detail/team{{$team['id']}}">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">{{ $team['teamname'] }}</div>

                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src=" {{ $team['thumbnail'] }} " alt="test">
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
        </div>
    </div>
    
</div>
@endsection
