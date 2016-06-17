@extends('layouts.app')


@section('content')
<script>
    function errpic(thepic){
        thepic.src="../img/default.svg";  //pic_err.gif is the picture which you want to show onerror
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
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-3">
                        <div style="height:200px; text-align:center;">
                            <img class="img-rounded img-responsives"  onerror="javascript:errpic(this)" alt="" src="{{URL::to($teamdata['project_logo'])}}" style="max-height:200px; width:100%; height:auto; position:absolute; top:0; bottom:0; left:0; right:0; margin:auto;">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h2>{{$teamdata['project_name']}}</h2>
                        <h3>{{$teamdata['team_name']}}</h3>
                        <hr>
                        <h4>{!!$teamdata['project_descript']!!}</h4>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="score-btn" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ScoreModal0" >評分</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ScoreModal0" tabindex="-1" role="dialog" aria-labelledby="ScoreModal0Label">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="ScoreModal0Label">{{$teamdata['team_name']}} - {{$teamdata['project_name']}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div style="width:80%;margin: auto;">
                                            <h4>外觀</h4>
                                            <hr>
                                            <div id="Score-layout" class="rating-area"></div>
                                            <h5><div id="hints-layout">請評分</div></h5>
                                        </div>

                                        <br>

                                        <div style="width:80%;margin: auto;">
                                            <h4>設計</h4>
                                            <hr>
                                            <div id="Score-design" class="rating-area"></div>
                                            <h5><div id="hints-design">請評分</div></h5>
                                        </div>

                                        <br>

                                        <div style="width:80%;margin: auto;">
                                            <h4>技術</h4>
                                            <hr>
                                            <div id="Score-technology" class="rating-area"></div>
                                            <h5><div id="hints-technology">請評分</div></h5>
                                        </div>

                                        <br>

                                        <div style="width:80%;margin: auto;">
                                            <h4>創意</h4>
                                            <hr>
                                            <div id="Score-idea" class="rating-area"></div>
                                            <h5><div id="hints-idea">請評分</div></h5>
                                        </div>

                                        <br>

                                        <div style="width:80%;margin: auto;">
                                            <h4>其他</h4>
                                            <hr>
                                            <div id="Score-other" class="rating-area"></div>
                                            <h5><div id="hints-other">請評分</div></h5>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button id="Confirm-btn" type="button" class="btn btn-primary">Save changes</button>
                                    </div>

                                    <script type="text/javascript">
                                        $(function(){
                                            var isScored = {{$scoreData['isScored']}};




                                        $("#Score-layout").raty({score:{{$scoreData['score'][0]}}});
                                        $("#Score-design").raty({score:{{$scoreData['score'][1]}}});
                                        $("#Score-technology").raty({score:{{$scoreData['score'][2]}}});
                                        $("#Score-idea").raty({score:{{$scoreData['score'][3]}}});
                                        $("#Score-other").raty({score:{{$scoreData['score'][4]}}});

                                        $("#Score-layout").raty('set',{
                                            half        : false,
                                            halfShow    : false,
                                            noRatedMsg  : '尚未評分',
                                            targetKeep : true,
                                            targetText : '尚未評分',
                                            hints: ['不是很好', '一般般', '好看', '很漂亮', '太漂亮啦!'],
                                            target: "#hints-layout"
                                        });

                                        $("#Score-design").raty('set',{
                                            half        : false,
                                            halfShow    : false,
                                            noRatedMsg  : '尚未評分',
                                            targetKeep : true,
                                            targetText : '尚未評分',
                                            hints: ['不是很好', '一般般', '操作符合邏輯', '操作性設計得不錯', '介面設計之神!'],
                                            target: "#hints-design"
                                        });

                                        $("#Score-technology").raty('set',{
                                            half        : false,
                                            halfShow    : false,
                                            noRatedMsg  : '尚未評分',
                                            targetKeep : true,
                                            targetText : '尚未評分',
                                            hints: ['用到很少', '只有前端', '前端互動有做到', '前端跟後端都做到了!', '前端跟後端都做到了且完成度太高啦!'],
                                            target: "#hints-technology"
                                        });

                                        $("#Score-idea").raty('set',{
                                            half        : false,
                                            halfShow    : false,
                                            noRatedMsg  : '尚未評分',
                                            targetKeep : true,
                                            targetText : '尚未評分',
                                            hints: ['不是很好', '一般般', '還蠻有創意的', '很有創意', '太有創意啦!'],
                                            target: "#hints-idea"
                                        });

                                        $("#Score-other").raty('set',{
                                            half        : false,
                                            halfShow    : false,
                                            noRatedMsg  : '尚未評分',
                                            targetKeep : true,
                                            targetText : '尚未評分',
                                            hints: ['不是很好', '一般般', '還不錯', '很棒', '太棒啦!'],
                                            target: "#hints-other"
                                        });

                                        if(isScored == 1){
                                            $("#Confirm-btn").remove();
                                            $("#score-btn").html("查看評分").removeClass('btn-primary').addClass('btn-success');
                                        }

                                        $("#Confirm-btn").click(function(){
                                            var layout = $("#Score-layout").raty('score');
                                            if(layout == undefined){
                                                alert("尚未評分外觀的分數哦!");
                                                return;
                                            }

                                            var design = $("#Score-design").raty('score');
                                            if(design == undefined){
                                                alert("尚未評分設計的分數哦!");
                                                return;
                                            }

                                            var technology = $("#Score-technology").raty('score');
                                            if(technology == undefined){
                                                alert("尚未評分技術的分數哦!");
                                                return;
                                            }

                                            var idea = $("#Score-idea").raty('score');
                                            if(idea == undefined){
                                                alert("尚未評分創意的分數哦!");
                                                return;
                                            }

                                            var other = $("#Score-other").raty('score');
                                            if(other == undefined){
                                                alert("尚未評分其他的分數哦!");
                                                return;
                                            }



                                            $("#ScoreModal").modal('hide');
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
        @endif
    </div>

</div>
@endsection
