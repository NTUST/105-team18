@extends('layouts.app')

@section('content')
<script>
    function errpic(thepic){
        thepic.src="{{ url('img/default.svg')}}";  //pic_err.gif is the picture which you want to show onerror
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(isset($teamdata))
                        @foreach ($teamdata as $data)
                        <a href="detail/{{$data->team_no}}">
                            <div class="team-div col-sm-4">
                                <div class="panel panel-default" >
                                    <div class="panel-heading">
                                        第{{$data->team_no}}組 {{$data->project_name}}
                                    </div>

                                    <div class="panel-body">
                                        <div class="col-xs-12">
                                            <div style="height:200px; text-align:center;">
                                                <img class="img-rounded img-responsives"  onerror="javascript:errpic(this)" alt="" src="{{$data->project_logo}}" style="max-height:200px; width:100%; height:auto; position:absolute; top:0; bottom:0; left:0; right:0; margin:auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
