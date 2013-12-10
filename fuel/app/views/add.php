<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?=
        \Asset::css(array(
            'https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css',
            'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css',
            'xmas-pi.css'));
        ?>
        <title>X-Mas</title>
    <body>
        <!--<div class="row">-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="next-frame" class="btn btn-link">-->
        <!--Next frame</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="add-frame" class="btn btn-link">-->
        <!--Add frame</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="previous-frame" class="btn btn-link">-->
        <!--Previous frame</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="delete-frame" class="btn btn-link">-->
        <!--Delete frame</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="clear-frame" class="btn btn-link">-->
        <!--Clear frame</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="inverse-frame" class="btn btn-link">-->
        <!--Inverse frame</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="to-json" class="btn btn-link" data-toggle="modal" data-target="#myModal">-->
        <!--Tojson</button>-->
        <!--</div>-->
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <!--<button id="toggle-eraser" class="btn btn-link">-->
        <!--Toggle eraser</button>-->
        <!--</div>-->
        <!--</div>-->
        <div id="toolbar" class="container text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
                    <div class="btn-group btn-group-lg">
                        <button id="toggle-eraser" class="btn btn-default" data-toggle="button">
                            <i class="fa fa-eraser"></i>
                        </button>
                        <button id="inverse-frame" class="btn btn-default">
                            <i class="fa fa-minus-square-o"></i>
                        </button>
                        <button id="clear-frame" class="btn btn-default">
                            <i class="fa fa-times-circle"></i>
                        </button>
                        <button id="help" class="btn btn-default" data-toggle="modal" data-target="#helpModal">
                            <i class="fa fa-question-circle"></i>
                        </button>
                        <button id="frame-counter" class="btn btn-default">1</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="tree-wrapper" class="text-center">
            <!-- TREE -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="1" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="2" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>                    
                        <i class="fa fa-square-o fa-2x visible-sm"></i>                   
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="3" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="4" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>          
                        <i class="fa fa-square-o fa-2x visible-md"></i>     
                        <i class="fa fa-square-o fa-2x visible-sm"></i>     
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="5" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>          
                        <i class="fa fa-square-o fa-2x visible-md"></i>          
                        <i class="fa fa-square-o fa-2x visible-sm"></i>           
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="6" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="7" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="8" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="9" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="10" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="11" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="12" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="13" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="14" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="15" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="16" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="17" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="18" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="19" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="20" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="21" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="22" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="23" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="24" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="25" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="26" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="27" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="28" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="29" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="30" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="31" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="32" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="33" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="34" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="35" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="36" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="37" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="38" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="39" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                    <button id="40" class="btn btn-link light">
                        <i class="fa fa-square-o fa-2x visible-lg"></i>
                        <i class="fa fa-square-o fa-2x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-2x visible-xs"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="toolbar" class="container text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
                    <div class="btn-group btn-group-lg">
                        <button id="previous-frame" class="btn btn-default">
                            <i class="fa fa-arrow-left"></i>
                        </button>
                        <button id="add-frame" class="btn btn-default">
                            <i class="fa fa-plus-square"></i>
                        </button>
                        <button id="delete-frame" class="btn btn-default">
                            <i class="fa fa-trash-o"></i>
                        </button>
                        <button id="next-frame" class="btn btn-default">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                        <button id="to-json" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Json</h4>
                    </div>
                    <div id="myModalBody" class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="submit" type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal -->
        <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">
                            <h2>Xmas-pi<small> editor help</small></h2>
                        </h4>
                    </div>
                    <div id="helpBody" class="modal-body">
                        <i class="fa fa-eraser fa-2x"></i> - toggles eraser mode<br><br>
                        <i class="fa fa-minus-square-o fa-2x"></i> - inverse current frame <br><br>
                        <i class="fa fa-times-circle fa-2x"></i> - clear current frame <br><br>
                        <i class="fa fa-plus-square fa-2x"></i> - adds new frame <br><br>
                        <i class="fa fa-trash-o fa-2x"></i> - deletes frame 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </body>  
    <?=
    \Asset::js(array('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
        'https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js',
        'xmas-pi.js',));
    ?>
    <!-- LIGHT BULB TOGGLING -->
    <script>
        var options = {
            eraser: false
        }
    </script>
    <script>
        $('button.light').click(function() {
            console.log($(this));
            $(this).toggleLightBulb();
        });

        $('#tree-wrapper').on("mousedown", function() {
            $('button.light').bind('mouseover', function() {
                if ($(this).hasClass('toggled')) {
                    console.log("bulb already toggled!");
                } else {
                    if (options.eraser == true) {
                        $(this).turnLightBulbOff();
                    } else {
                        $(this).turnLightBulbOn();
                    }
                    $(this).addClass("toggled");
                }
            });
        }).on("mouseup", function() {
            $('button.light').unbind('mouseover');
            $.each($('button.light'), function() {
                $('button.light').removeClass("toggled");
            });
        });
    </script>
    <script>
        // stupid fucking firefox 
        jQuery(function($) {
            $('#next-frame').click(function() {
                $('#tree-wrapper').nextFrame();
            });
            $('#previous-frame').click(function() {
                $('#tree-wrapper').previousFrame();
            });
            $('#add-frame').click(function() {
                $('#tree-wrapper').addFrame();
            });
            $('#delete-frame').click(function() {
                $('#tree-wrapper').deleteFrame($().getFramesCount());
            });
            $('#inverse-frame').click(function() {
                $('#tree-wrapper').inverseFrame();
            });
            $('#clear-frame').click(function() {
                $('#tree-wrapper').clearFrame();
                $().resetValues();
            });
            $('#to-json').click(function() {
                $('#myModalBody')._framesToJson();
            })
            $('#submit').click(function() {
                var data = $('#tree-wrapper').getFrames();
                $().ajaxPost(data);
            });
            $('#toggle-eraser').click(function() {
                if (options.eraser == true) {
                    options.eraser = false;
                } else {
                    options.eraser = true;
                }
            })
        })
    </script>
</html>
