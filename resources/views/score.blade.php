@extends('layouts.app')


@section('content')
<script>
    function errpic(thepic){
        thepic.src="img/default.svg";  //pic_err.gif is the picture which you want to show onerror
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img class="img-rounded img-responsive" src="/img/Title.JPG" alt="test">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        @if (isset($teamdata))
            @foreach ($teamdata as $i => $team)
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-xs-3">
                                <div style="height:200px; text-align:center;">
                                    <img class="img-rounded img-responsives"  onerror="javascript:errpic(this)" alt="" src="{{$team['project_logo']}}" style="max-height:200px; width:100%; height:auto; position:absolute; top:0; bottom:0; left:0; right:0; margin:auto;">
                                </div>
                             </div>
                            <div class="col-xs-7">
                                <h2>{{$team['project_name']}}</h2>
                                <h3>{{$team['team_name']}}</h3>
                                <hr>
                                <h4>{!!$team['project_descript']!!}</h4>
                            </div>
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-primary btn-block vertical-align" data-toggle="modal" data-target="#ScoreModal{{$i}}">評分</button>
                                <!-- Modal -->
                                <div class="modal fade" id="ScoreModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="ScoreModal{{$i}}Label">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="ScoreModal{{$i}}Label">{{$team['project_name']}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-xs-12">
                                                    
                                                    
                                                    <div class="col-xs-9">
                                                        <div id="123"></div>
                                                        <script type="text/javascript">
                                                            $(function(){
                                                                $("#123").raty();
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>
@endsection
