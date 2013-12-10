(  function ( $ ) {
    var NUM_OF_LIGHT_BULBS = 40;

    /* Frames collection
       ===================================================*/
    var Frames = function() {};
    
    /* Initialises frames.list with empty array filled with
     * 40 'undefined'
     */
    Frames.prototype.list = [new Array(NUM_OF_LIGHT_BULBS)];

    Frames.prototype.returnList = function() {
        return this.list; 
    }

    Frames.prototype.push = function(array) {
        console.log("Pushing new array");
        this.list.push(array);
    }

    Frames.prototype.pop = function() {
        this.list.pop();
    }

    Frames.prototype.assignArray = function(array, index) {
        this.list[index] = array; 
    }

    /* assigns value to the array[id] in list[index]
     */
    Frames.prototype.assignValue = function(index, id, value) {
        this.list[index][id] = value; 
    }

    /* jquery function which assigns value to the frames.list of given id
     */
    $.fn.assignValue = function(id, value) {
        frames.assignValue(frameCounter, id, value);
    }

    Frames.prototype._empty = function() {
        this.list = [];
    }

    Frames.prototype.indexOf = function(index) {
        return this.list[index];
    }

    Frames.prototype.last = function() {
        return this.list[this.list.length - 1];
    }

    Frames.prototype.lengthOf = function() {
        return this.list.length; 
    }

    Frames.prototype.fill = function(array, index) {
        for ( var i = 0; i < array.length; i++ ) {
            this.list[index][i] = array[i];
        } 
    }

    Frames.prototype.delete = function(index) {
        if ( index > -1 ) {
            this.list.splice(index, 1); 
        }
    }

    Frames.prototype.normalizeValues = function() {
        for ( var i = 0; i < this.lengthOf(); i++ ) {
            for ( var k = 0; k < NUM_OF_LIGHT_BULBS; k++ ) {
                // this function is used to get rid of null values in 
                // frames.list
                //
                // for every element of frames.list
                // assign value according to it's initial value
                // 0 and 1 won't change, while 0 will be assigned to null elements
                this.assignValue(i, k,
                        this.indexOf(i)[k] == 0 || 
                        this.indexOf(i)[k] == null ?
                                0 : 1 ); 
            } 
        }
    }

    /* method returns json in string form containing:
     *
     * frames - two dimensional array of frames
     */
    Frames.prototype.returnJson = function() {
        var _this = this;

        this.normalizeValues();
        var ob = {
            frames: _this.returnList()
        };

        // JSON.stringify(object, spaces)
        // param spaces is used to set identation
        return JSON.stringify(ob, 0);
    }

    /* ==== PROPERTIES ==== 
     * ====================
     *
     * variables are 'static' - it works for now, probably should be fixed
     */
    var frames = new Frames();
    var frameCounter = 0;

    /* ==== JQUERY FUNCTIONS ====
     * ==========================
     */ 

    $.fn.ajaxPost = function(frames) {
        var URL = "http://dev.uek.krakow.pl/~xmaspi/" + 
                "index.php/animation/add";
        $.ajax({
            type: 'POST',
            url: URL,
            data: {framesArray: frames.list},
            success: function(response) {
                console.log(response); 
            }
        });
    }

    $.fn.getFramesCount = function() {
        return frameCounter; 
    }

    $.fn.getFrames = function() {
        return frames; 
    }

    $.fn.animateFrame = function(value, duration, callback) { 
        $(this).animate({
            marginLeft: value + "px",
            easing: "swing",
            opacity: 0 
        }, duration, function() {
            callback();
            value = -value;
            $(this).css("margin-left", value); 
            $(this).animate({
                marginLeft: "0px",
                easing: "swing",
                opacity: 1 
            }, duration);
        }); 
    }

    /* appends empty array to frames collection, and fills it with content from
     * previous frame
     */
    $.fn.addFrame = function() {
        $(this).animateFrame(-200, 100, function() {
            frames.push(new Array(NUM_OF_LIGHT_BULBS));
            frames.fill(frames.indexOf(frames.lengthOf()-2),
                    frames.lengthOf()-1);
            $(this).moveToFrame(frames.lengthOf()-1);
            $('#frame-counter').html($().getFramesCount()+1);
        })
    }

    $.fn.deleteFrame = function(index) {
        // prevents deleting if there is only one frame left
        if ( frames.lengthOf() > 1 ) {
            // regular $(this) doesn't work in .animation callback function
            _this = $(this);
            if ( index == frames.lengthOf()-1 ) {
                $(this).animateFrame(200, 100, function() {
                    frames.delete(index);
                    frameCounter--;
                    _this.clearFrame();
                    _this.toggleBulbs(frames);
                $('#frame-counter').html($().getFramesCount()+1);
                });
            } else {
                $(this).animateFrame(-200, 100, function() {
                    frames.delete(index);
                    _this.clearFrame(); 
                    _this.toggleBulbs(frames);
                $('#frame-counter').html($().getFramesCount()+1);
                });
            }
        } else {
            console.log("No more frames, preventing deletion");
        }
    }

    /* Next frame method updates current frame accordingly
     * (whether the frames collection is emtpy or not, it's gonna
     * push a new array, or assign current one).
     * It clears the current bulb buttons, and increments frameCounter
     * Then it toggles bulbs according to their button value
     */
    $.fn.nextFrame = function() {
        console.log(frames.lengthOf());
        if ( frameCounter >= frames.lengthOf()-1 ) {
            console.log("This is the last frame, you can't move forward");
            console.log("Frame: " + frameCounter); 
        } else {
            // regular $(this) doesn't work in .animation callback function
            _this = $(this);
            $(this).animateFrame(-200, 100, function() {
                _this.clearFrame();
                console.log(frames);
                console.log(frames.list);
                frameCounter++;
                _this.toggleBulbs(frames);
                console.log("Frame: " + frameCounter);
                $('#frame-counter').html($().getFramesCount()+1);
            })
        }
    }

    /* Same as before with pre update check of frame bounds
     */
    $.fn.previousFrame = function() {
        if ( frameCounter-1 < 0 ) {
            console.log("This is the first frame, you can't go back.");
            console.log("Frame: " + frameCounter);
        } else {
            // regular $(this) doesn't work in .animation callback function
            _this = $(this);
            $(this).animateFrame(200, 100, function() {
                _this.clearFrame();
                console.log(frames);
                console.log(frames.list);
                frameCounter--;
                _this.toggleBulbs(frames);
                console.log("Frame: " + frameCounter);
                $('#frame-counter').html($().getFramesCount()+1);
            })
        } 
    }

    $.fn.moveToFrame = function(frame) {
        $(this).clearFrame();
        frames.fill(frames.indexOf(frame), frame);
        frameCounter = frame;
        $(this).toggleBulbs(frames);
    }

    $.fn.clearFrame = function() {
        $(this).find('button').each(function() {
            $(this).attr("value", 0);
        });
        $(this).find('i').each(function() {
            $(this).removeClass('fa-square').addClass('fa-square-o');
        });
    }

    $.fn.resetValues = function() {
        for ( var i = 0; i < NUM_OF_LIGHT_BULBS; i++ ) {
            frames.indexOf(frameCounter)[i] = 0; 
        } 
    }
    /* Toggles button value using previously saved frames collection,
     * and changes it's class using toggleLightBulb function
     */

    $.fn.inverseFrame = function() {
        for ( var i = 0; i < NUM_OF_LIGHT_BULBS; i++ ) {
            if ( frames.indexOf(frameCounter)[i] == 0 || 
                    frames.indexOf(frameCounter)[i] == undefined ) {
                frames.list[frameCounter][i] = 1;
            } else {
                frames.list[frameCounter][i] = 0;
            }
        }
        $(this).toggleBulbs(frames);
    }

    /* function used to assign json to html of jquery object
     */
    $.fn._framesToJson = function() {
        frames.normalizeValues();

        var objectToJson = {
            // author
            frames: frames.returnList()
        };

        this.html(JSON.stringify(objectToJson, 2));
    }

    /* function used to assign json to html of jquery object
     */
    $.fn.framesToJson = function() {
        var json = frames.returnJson();

        return json;
    }

    $.fn.toggleBulbs = function(frames) {
        $(this).find('button').each(function(i) {
            console.log("TOGGLING BIOTCH");
            //console.log(frameCounter);
            //console.log(frames.indexOf(frameCounter)[i]); 
            
            // checks if frame at frameCounter exists, if not
            // do nothing
            if ( frames.indexOf(frameCounter) ) {
                if( frames.indexOf(frameCounter)[i] == undefined ) {
                    $(this).attr("value", 0);
                } else {
                    $(this).attr("value", frames.indexOf(frameCounter)[i]);
                }
                $(this).toggleLightBulbClass();
            }
        });
    }

    /* Checks if bulb is in it's on or off state, and changes the class
    * accordingly
    */
    $.fn.toggleLightBulbClass = function(s) {
        if ( $(this).attr("value") == 0 || $(this).attr("value") == undefined ) {
            $(this).find('i').removeClass('fa-square').addClass('fa-square-o');
        } else {
            $(this).find('i').removeClass('fa-square-o').addClass('fa-square');
        } 
    }

    $.fn.toggleLightBulb = function() {
        var id = $(this).attr("id")-1;

        if ($(this).attr("value") == '1') {
            $(this).find('i').each(function() {
                $(this).removeClass('fa-square').addClass('fa-square-o');
            });
            $(this).attr("value", 0); 
            $('#tree-wrapper').assignValue(id, $(this).attr("value"));
        } else {
            $(this).find('i').each(function() {
                $(this).removeClass('fa-square-o').addClass('fa-square');
            });
            $(this).attr("value", 1);
            $('#tree-wrapper').assignValue(id, $(this).attr("value"));
        }
    }

    $.fn.turnLightBulbOn = function() {
        var id = $(this).attr("id")-1;

        $(this).find('i').each(function() {
            $(this).removeClass('fa-square-o').addClass('fa-square');
        });
        $(this).attr("value", 1);
        $('#tree-wrapper').assignValue(id, $(this).attr("value"));
    }

    $.fn.turnLightBulbOff = function() {
        var id = $(this).attr("id")-1;

        $(this).find('i').each(function() {
            $(this).removeClass('fa-square').addClass('fa-square-o');
        });
        $(this).attr("value", 0); 
        $('#tree-wrapper').assignValue(id, $(this).attr("value"));
    }
}( jQuery ));
