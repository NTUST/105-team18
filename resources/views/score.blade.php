@extends('layouts.app')


@section('content')
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
                                <img class="img-rounded img-responsive" src="{{$team['thumbnail']}}" alt="test">
                            </div>
                            <div class="col-xs-7">
                                <h2>{{$team['projectname']}}</h2>
                                <h3>{{$team['teamname']}}</h3>
                                <hr>
                                <h4>{{$team['info']}}</h4>
                            </div>
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-primary btn-block vertical-align" data-toggle="modal" data-target="#ScoreModal{{$i}}">評分</button>
                                <!-- Modal -->
                                <div class="modal fade" id="ScoreModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="ScoreModal{{$i}}Label">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="ScoreModal{{$i}}Label">{{$team['projectname']}}</h4>
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
