@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(isset($teamdata))
                        @foreach ($teamdata as $data)
                            <a href="detail/{{$data->team_no}}">
                                <div class="team-div col-sm-4" style="border:10px">
                                    <p>第{{$data->team_no}}組 {{$data->project_name}}</p>
                                    <img class="img-rounded img-responsives" src="{{$data->project_logo}}" style="height:200px">


                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
