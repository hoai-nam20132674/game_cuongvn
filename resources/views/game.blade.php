<!DOCTYPE html>
    <head>
        <title>Game show chi ân khách hàng</title>
        <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/countdown.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Winwheel.js')}}"></script>
        <script src="{{asset('js/TweenMax.min.js')}}"></script>
    </head>
    <body>
        <img width="100%" height="auto" src="{{asset('banner.png')}}">
        <div class="container">
          <!-- <h2>Modal Example</h2> -->
          <!-- Trigger the modal with a button -->

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align: center; color: #f5b904; font-weight: 700; font-size: 30px;">CHÚC MỪNG</h4>
                  <h4 class="phanthuong" style="text-align: center; "></h4>
                </div>
                <div class="modal-body">
                  <!-- <p class="phanthuong" style="text-align: center; text-transform: uppercase;"></p> -->
                  <img width="100%" height="auto" id="image" src="">
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
              </div>
              
            </div>
          </div>
          
        </div>
        <div class="container">
            <div class="game-content">
                <div align="center" style="">

                    <!-- <h1>Tuần lễ vàng - Ngàn ưu đãi</h1> -->
                    <!-- <p> -->
                        <!-- Tri ân khách hàng, tham gia ngay để có cơ hội sở hữu một trong những phần quà giá trị từ chúng tôi. -->
                        <!-- <br />Also this wheel plays a tick sound when one of the pins passes the pointer. -->
                    <!-- </p> -->
                    <br />
                    <!-- <p>Choose a power setting then press the Spin button. Tick sound will play when a pin passes the pointer.</p> -->
                    
                    <br />
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                                <div class="power_controls">
                                    <br />
                                    <br />
                                    <!-- <table class="power" cellpadding="10" cellspacing="0">
                                        <tr>
                                            <th align="center">Power</th>
                                        </tr>
                                        <tr>
                                            <td width="78" align="center" id="pw3" onClick="powerSelected(3);">High</td>
                                        </tr>
                                        <tr>
                                            <td align="center" id="pw2" onClick="powerSelected(2);">Med</td>
                                        </tr>
                                        <tr>
                                            <td align="center" id="pw1" onClick="powerSelected(1);">Low</td>
                                        </tr>
                                    </table> -->
                                    <br />
                                    <img class="finish" id="spin_button" src="{{asset('play.gif')}}" alt="{{Auth::user()->id}}" onClick="startSpin();" />
                                    <div class="g500k" phanthuong="{{Auth::user()->g500k}}"></div>
                                    <div class="g200k" phanthuong="{{Auth::user()->g200k}}"></div>
                                    <div class="baoda" phanthuong="{{Auth::user()->baoda}}"></div>
                                    <div class="cocsac" phanthuong="{{Auth::user()->cocsac}}"></div>
                                    <div class="mockhoa" phanthuong="{{Auth::user()->mockhoa}}"></div>
                                    <div class="tainghe" phanthuong="{{Auth::user()->tainghe}}"></div>
                                    <div class="freeship" phanthuong="{{Auth::user()->freeship}}"></div>
                                    <div class="goodluck" phanthuong="{{Auth::user()->goodluck}}"></div>
                                    <br /><br />
                                    <!-- &nbsp;&nbsp;<a href="#" onClick="resetWheel(); return false;">Play Again</a><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(reset) -->
                                </div>
                            </td>
                            <td width="438" height="582" class="the_wheel" align="center" valign="center">
                                <canvas id="canvas" width="434" height="434">
                                    <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                                </canvas>
                            </td>
                        </tr>
                    </table>
                    <!-- <div>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div> -->
                </div>
            </div>
            
        </div>
        <div class="rules">
            <img width="100%" height="auto" src="{{asset('rules.png')}}">
        </div>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/countdown.js')}}"></script>
        <!-- <script type="text/javascript">
            $(window).on('load',function(){
                $('#myModal').modal('show');
            });
        </script> -->
    </body>
</html>