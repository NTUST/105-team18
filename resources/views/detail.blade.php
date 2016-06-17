@extends('layouts.app')

@section('content')
<script>
    function errpic(thepic){
        thepic.src="{{ url('img/default.svg')}}";  //pic_err.gif is the picture which you want to show onerror
    }
</script>
<div class="container">
    @if (isset($teamdata))
    <div class="row">
        <div class="col-md-8">
            <img class="img-rounded img-responsive" src="../{{$teamdata['project_logo']}}" onerror="javascript:errpic(this)" alt="test">
        </div>

        <div class="col-md-4">
            <h3>{{$teamdata['team_name']}}<a href="https://github.com/ntust/105-team{{$teamdata['team_no']}}" target="_blank">
                <img src="../img/GitHub_Logo.png" style="height:20px">
            </a></h3>
            <hr>
            <h2>{{$teamdata['project_name']}}</h2>

            <h4>{!! $teamdata['project_descript'] !!}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <hr>
            <h2 style="padding:20px">
                Team Members
            </h2>
        </div>
    </div>
    <div class="row">

        @foreach($memberdata as $row)
                <div class="col-md-6" style="padding:20px">
                    <div class="col-md-3">
                        <img class="img-rounded img-responsive" src="https://github.com/{{$row['name']}}.png?size=150"  onerror="javascript:errpic(this)" style="height:150px" alt="test">
                    </div>
                    <div class="col-md-3">
                        <h3>{{$row['stuid']}}</h3>
                        <h3>{{$row['name']}}</h3>
                    </div>
                </div>

        @endforeach

    </div>
    @endif
</div>
@endsection
