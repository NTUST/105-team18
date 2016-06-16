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
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ScoreModal{{$i}}" >評分</button>
                            <!-- Modal -->
                            <div class="modal fade" id="ScoreModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="ScoreModal{{$i}}Label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="ScoreModal{{$i}}Label">{{$team['project_name']}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div style="width:80%;margin: auto;">
                                                <h4>外觀</h4> 
                                                <hr>
                                                <div id="Score-layout-{{$i}}" class="rating-area"></div>
                                                <h5><div id="hints-layout-{{$i}}">請評分</div></h5>
                                            </div>

                                            <br>

                                            <div style="width:80%;margin: auto;">
                                                <h4>設計</h4> 
                                                <hr>
                                                <div id="Score-design-{{$i}}" class="rating-area"></div>
                                                <h5><div id="hints-design-{{$i}}">請評分</div></h5>
                                            </div>

                                            <br>

                                            <div style="width:80%;margin: auto;">
                                                <h4>技術</h4> 
                                                <hr>
                                                <div id="Score-technology-{{$i}}" class="rating-area"></div>
                                                <h5><div id="hints-technology-{{$i}}">請評分</div></h5>
                                            </div>

                                            <br>

                                            <div style="width:80%;margin: auto;">
                                                <h4>創意</h4> 
                                                <hr>
                                                <div id="Score-idea-{{$i}}" class="rating-area"></div>
                                                <h5><div id="hints-idea-{{$i}}">請評分</div></h5>
                                            </div>

                                            <br>

                                            <div style="width:80%;margin: auto;">
                                                <h4>其他</h4> 
                                                <hr>
                                                <div id="Score-other-{{$i}}" class="rating-area"></div>
                                                <h5><div id="hints-other-{{$i}}">請評分</div></h5>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button id="Confirm-btn-{{$i}}" type="button" class="btn btn-primary">Save changes</button>
                                        </div>

                                        <script type="text/javascript">
                                            $(function(){
                                                //$(".rating-area").raty({ score: 2 });


                                                $("#Score-layout-"+{{$i}}).raty('set',{
                                                    half        : false,
                                                    halfShow    : false,
                                                    noRatedMsg  : '尚未評分',
                                                    targetKeep : true,
                                                    targetText : '尚未評分',
                                                    hints: ['不是很好', '一般般', '好看', '很漂亮', '太漂亮啦!'],
                                                    target: "#hints-layout-{{$i}}"
                                                });

                                                $("#Score-design-"+{{$i}}).raty('set',{
                                                    half        : false,
                                                    halfShow    : false,
                                                    noRatedMsg  : '尚未評分',
                                                    targetKeep : true,
                                                    targetText : '尚未評分',
                                                    hints: ['不是很好', '一般般', '操作符合邏輯', '操作性設計得不錯', '介面設計之神!'],
                                                    target: "#hints-design-{{$i}}"
                                                });

                                                $("#Score-technology-"+{{$i}}).raty('set',{
                                                    half        : false,
                                                    halfShow    : false,
                                                    noRatedMsg  : '尚未評分',
                                                    targetKeep : true,
                                                    targetText : '尚未評分',
                                                    hints: ['用到很少', '只有前端', '前端互動有做到', '前端跟後端都做到了!', '前端跟後端都做到了且完成度太高啦!'],
                                                    target: "#hints-technology-{{$i}}"
                                                });

                                                $("#Score-idea-"+{{$i}}).raty('set',{
                                                    half        : false,
                                                    halfShow    : false,
                                                    noRatedMsg  : '尚未評分',
                                                    targetKeep : true,
                                                    targetText : '尚未評分',
                                                    hints: ['不是很好', '一般般', '還蠻有創意的', '很有創意', '太有創意啦!'],
                                                    target: "#hints-idea-{{$i}}"
                                                });

                                                $("#Score-other-"+{{$i}}).raty('set',{
                                                    half        : false,
                                                    halfShow    : false,
                                                    noRatedMsg  : '尚未評分',
                                                    targetKeep : true,
                                                    targetText : '尚未評分',
                                                    hints: ['不是很好', '一般般', '還不錯', '很棒', '太棒啦!'],
                                                    target: "#hints-other-{{$i}}"
                                                });
                                                
                                                $("#Confirm-btn-"+{{$i}}).click(function(){
                                                    var layout = $("#Score-layout-"+{{$i}}).raty('score'); 
                                                    if(layout == undefined){
                                                        alert("尚未評分外觀的分數哦!");
                                                        return;
                                                    }
                                                    
                                                    var design = $("#Score-design-"+{{$i}}).raty('score'); 
                                                    if(design == undefined){
                                                        alert("尚未評分設計的分數哦!");
                                                        return;
                                                    }
                                                    
                                                    var technology = $("#Score-technology-"+{{$i}}).raty('score');
                                                    if(technology == undefined){
                                                        alert("尚未評分技術的分數哦!");
                                                        return;
                                                    }
                                                    
                                                    var idea = $("#Score-idea-"+{{$i}}).raty('score'); 
                                                    if(idea == undefined){
                                                        alert("尚未評分創意的分數哦!");
                                                        return;
                                                    }
                                                    
                                                    var other = $("#Score-other-"+{{$i}}).raty('score'); 
                                                    if(other == undefined){
                                                        alert("尚未評分其他的分數哦!");
                                                        return;
                                                    }
                                                    
                                                    $("#ScoreModal"+{{$i}}).modal('hide');
                                                });
                                            });
                                        </script>
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
