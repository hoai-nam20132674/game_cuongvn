// Create new wheel object specifying the parameters at creation time.
            var theWheel = new Winwheel({
                'numSegments'  : 7,     // Specify number of segments.
                'outerRadius'  : 212,   // Set outer radius so wheel fits inside the background.
                'textFontSize' : 20,    // Set font size as desired.
                'segments'     :        // Define segments including colour and text.
                [
                   {'fillStyle' : '#fabc04', 'text' : 'Voucher Vertu 2tr'},
                   // {'fillStyle' : '#fabc04', 'text' : 'Chúc may mắn'},
                   {'fillStyle' : '#fabc04', 'text' : 'Bao da'},
                   {'fillStyle' : '#fabc04', 'text' : 'Cốc sạc'},
                   {'fillStyle' : '#fabc04', 'text' : 'Sạc oto'},
                   {'fillStyle' : '#fabc04', 'text' : 'Tai nghe Bluetooth'},
                   {'fillStyle' : '#fabc04', 'text' : 'Voucher 200k'},
                   {'fillStyle' : '#fabc04', 'text' : 'Móc khóa rồng'}
                ],
                'animation' :           // Specify the animation to use.
                {
                    'type'     : 'spinToStop',
                    'duration' : 15,
                    'spins'    : 7,
                    'callbackFinished' : alertPrize,
                    'callbackSound'    : playSound,   // Function to call when the tick sound is to be triggered.
                    'soundTrigger'     : 'pin'        // Specify pins are to trigger the sound, the other option is 'segment'.
                },
                'pins' :
                {
                    'number' : 7   // Number of pins. They space evenly around the wheel.
                }
            });

            // -----------------------------------------------------------------
            // This function is called when the segment under the prize pointer changes
            // we can play a small tick sound here like you would expect on real prizewheels.
            // -----------------------------------------------------------------
            var audio = new Audio("../tick.mp3");  // Create audio object and load tick.mp3 file.

            function playSound()
            {
                // Stop and rewind the sound if it already happens to be playing.
                audio.pause();
                audio.currentTime = 0;

                // Play the sound.
                audio.play();
            }

            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters
            // note the indicated segment is passed in as a parmeter as 99% of the time you will want to know this to inform the user of their prize.
            // -------------------------------------------------------
            function alertPrize(indicatedSegment)
            {
                // Do basic alert of the segment text.
                // You would probably want to do something more interesting with this information.
                if(indicatedSegment.text == "Chúc may mắn"){
                    // alert("Chúc quý khách may mắn lần sau");
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là "+pt);
                      document.getElementById("image").src = "http://cuong.vn/uploads/images/slide/mua-1-duoc-3(1).png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".goodluck").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Voucher Vertu 2tr"){
                    // alert("Chúc mừng phần thưởng của quý khách là 1 phiếu " + indicatedSegment.text);
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 voucher mua Vertu trị giá 2.000.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/vertu_2tr.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".g500k").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Voucher 200k"){
                    // alert("Chúc mừng phần thưởng của quý khách là 1 phiếu " + indicatedSegment.text);
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 Voucher mua Nokia 8800 trị giá 200.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/g200k.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".g200k").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Bao da"){
                    // alert("Chúc mừng phần thưởng của quý khách là một " + indicatedSegment.text + " handmade");
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 bao da Nokia 8800 Handmade trị giá 800.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/baoda.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".baoda").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Cốc sạc"){
                    // alert("Chúc mừng phần thưởng của quý khách là một " + indicatedSegment.text + " Nokia 8800");
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 cốc sạc Nokia 8800 trị giá 800.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/cocsac.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".cocsac").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Móc khóa rồng"){
                    // alert("Chúc mừng phần thưởng của quý khách là một " + indicatedSegment.text);
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 móc khóa rồng trị giá 500.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/mockhoa.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".mockhoa").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');                 
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Tai nghe Bluetooth"){
                    // alert("Chúc mừng phần thưởng của quý khách là một " + indicatedSegment.text);
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 tai nghe bluetooth trị giá 800.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/tainghe.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".tainghe").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');           
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
                if(indicatedSegment.text == "Sạc oto"){
                    // alert("Chúc mừng phần thưởng của quý khách là được " + indicatedSegment.text + " tận nhà");
                    $(document).ready(function(){
                      var pt = indicatedSegment.text;
                      $(".phanthuong").append("Phần thưởng của quý khách là 1 sạc oto trị giá 300.000đ");
                      document.getElementById("image").src = "http://docnhat.com.vn/image/sacoto.png";
                      $('#myModal').modal('show');
                    });
                    var phanthuong = $(".freeship").attr('phanthuong');
                    var id = $("#spin_button").attr('alt');
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/phanthuong/'+phanthuong,
                      cache:true,
                      data:{"id":id},
                    });
                    $.ajax({
                      type:'GET',
                      url:'http://docnhat.com.vn/game/finish/'+id,
                      cache:true,
                      data:{"id":id},
                    });
                    console.log(phanthuong);
                }
            }

            // =======================================================================================================================
            // Code below for the power controls etc which is entirely optional. You can spin the wheel simply by
            // calling theWheel.startAnimation();
            // =======================================================================================================================
            var wheelPower    = 0;
            var wheelSpinning = false;

            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
            function powerSelected(powerLevel)
            {
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false)
                {
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    document.getElementById('pw1').className = "";
                    document.getElementById('pw2').className = "";
                    document.getElementById('pw3').className = "";

                    // Now light up all cells below-and-including the one selected by changing the class.
                    if (powerLevel >= 1)
                    {
                        document.getElementById('pw1').className = "pw1";
                    }

                    if (powerLevel >= 2)
                    {
                        document.getElementById('pw2').className = "pw2";
                    }

                    if (powerLevel >= 3)
                    {
                        document.getElementById('pw3').className = "pw3";
                    }

                    // Set wheelPower var used when spin button is clicked.
                    wheelPower = powerLevel;

                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                    document.getElementById('spin_button').src = "../play.gif";
                    document.getElementById('spin_button').className = "clickable";
                }
            }

            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin()
            {
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false)
                {
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    if (wheelPower == 1)
                    {
                        theWheel.animation.spins = 3;
                    }
                    else if (wheelPower == 2)
                    {
                        theWheel.animation.spins = 8;
                    }
                    else if (wheelPower == 3)
                    {
                        theWheel.animation.spins = 15;
                    }

                    // Disable the spin button so can't click again while wheel is spinning.
                    document.getElementById('spin_button').src       = "../play_off.gif";
                    document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();

                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }

            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel()
            {
                theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
                theWheel.draw();                // Call draw to render changes to the wheel.

                document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";

                wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
            }