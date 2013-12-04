<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
       
        <?= \Asset::css('xmas-pi.css') ?>
        <title>X-Mas</title>
    <body>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="frame-counter" class="btn">1</button>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="next-frame" class="btn btn-link">
                    Next frame</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="add-frame" class="btn btn-link">
                    Add frame</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="previous-frame" class="btn btn-link">
                    Previous frame</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="delete-frame" class="btn btn-link">
                    Delete frame</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="clear-frame" class="btn btn-link">
                    Clear frame</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="inverse-frame" class="btn btn-link">
                    Inverse frame</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button id="to-json" class="btn btn-link" data-toggle="modal" data-target="#myModal">
                    Tojson</button>
            </div>
        </div>
        <div id="tree-wrapper" class="text-center">
            <!-- TREE -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="1" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="2" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>                    
                        <i class="fa fa-square-o fa-2x visible-sm"></i>                   
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="3" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="4" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>          
                        <i class="fa fa-square-o fa-3x visible-md"></i>     
                        <i class="fa fa-square-o fa-2x visible-sm"></i>     
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="5" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>          
                        <i class="fa fa-square-o fa-3x visible-md"></i>          
                        <i class="fa fa-square-o fa-2x visible-sm"></i>           
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="6" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="7" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="8" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="9" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="10" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="11" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="12" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="13" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="14" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="15" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="16" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="17" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="18" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="19" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="20" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="21" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="22" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="23" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="24" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="25" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="26" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="27" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="28" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="29" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="30" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="31" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="32" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="33" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="34" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="35" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="36" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="37" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button id="38" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="39" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
                    <button id="40" class="btn btn-link light">
                        <i class="fa fa-square-o fa-3x visible-lg"></i>
                        <i class="fa fa-square-o fa-3x visible-md"></i>
                        <i class="fa fa-square-o fa-2x visible-sm"></i>
                        <i class="fa fa-square-o fa-lg visible-xs"></i>
                    </button>
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
    </body>  
    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" ></script>
    <?=
\Asset::js('xmas-pi.js')?>
    <!-- LIGHT BULB TOGGLING -->
    <script>
        var toggleLightBulb = function($this) {
            var id = $this.id - 1;
            console.log(id);

            if ($this.value === '1') {
                $($this).find('i').each(function(index, value) {
                    $(value).removeClass('fa-square').addClass('fa-square-o');
                });
                $this.value = '0';
                console.log('Light ' + $this.id + ' :' + $this.name + ' turned off');
                $('tree-wrapper').assignValue(id, $this.value);
            } else {
                $($this).find('i').each(function(index, value) {
                    $(value).removeClass('fa-square-o').addClass('fa-square');
                });
                $this.value = '1';
                $('tree-wrapper').assignValue(id, $this.value);
                console.log('Light ' + $this.id + ' :' + $this.name + ' turned on');
            }
        }

        $('button.light').click(function() {
            toggleLightBulb(this)
        });
    </script>
    <script>
        // stupid fucking firefox 
        jQuery(function($) {
            $('#next-frame').click(function() {
                $('#tree-wrapper').nextFrame();
                $('#frame-counter').html($().getFramesCount() + 1);
            });
            $('#previous-frame').click(function() {
                $('#tree-wrapper').previousFrame();
                $('#frame-counter').html($().getFramesCount() + 1);
            });
            $('#add-frame').click(function() {
                $('#tree-wrapper').addFrame();
                $('#frame-counter').html($().getFramesCount() + 1);
            });
            $('#delete-frame').click(function() {
                $('#tree-wrapper').deleteFrame($().getFramesCount());
                $('#frame-counter').html($().getFramesCount() + 1);
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
            });
            $('#submit').click(function() {
                var data = $('#tree-wrapper').framesToJson();
                //$.ajax({
                //    url: "127.0.0.1/~plysiu/XmasPi-REST/index.php/animation/test",
                //    //data: $('#tree-wrapper').framesToJson()
                //    success: function(data) {
                //	console.log(data);
                //    }
                //})
                //.done(function( msg ) {
                //    console.log("Returned: " + msg);
                //});
                //console.log($.post("128.0.0.1/~plysiu/XmasPi-REST/index.php/animation/test", data));
                console.log(data);
//		var ajax = $.ajax('http://127.0.0.1/~plysiu/XmasPi/index.php/animation/test');	
                // $.get('Access-Control-Allow-Origin: http://127.0.0.1/~plysiu/XmasPi/index.php/animation/test');
                //$.get("127.0.0.1/~plysiu/XmasPi-REST/index.php/animation/test", data);
                $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1/~plysiu/XmasPi-REST/index.php/animation/test',
                    success: function(response) {
                        console.log(response);
                    }
                });
            });
        })
    </script>
</html>
