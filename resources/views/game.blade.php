<!DOCTYPE html>
    <head>
        <title>Game show chi ân khách hàng</title>
        <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/countdown.css')}}">
        <script type="text/javascript" src="{{asset('js/Winwheel.js')}}"></script>
        <script src="{{asset('js/TweenMax.min.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div align="center">
                <!-- <h1>Game show tri ân khách hàng đã tin tưởng sử dụng dịch vụ và sản phẩm của CUONG.VN</h1> -->
                <!-- <p>
                    Here is an example of a wheel that contains pins around the outside (these represent the metal rods real prizewheels normally have).
                    <br />Also this wheel plays a tick sound when one of the pins passes the pointer.
                </p> -->
                <br />
                <!-- <p>Choose a power setting then press the Spin button. Tick sound will play when a pin passes the pointer.</p> -->
                <div>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
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
                                <img class="finish" id="spin_button" src="{{asset('spin_on.png')}}" alt="{{Auth::user()->id}}" onClick="startSpin();" />
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
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/countdown.js')}}"></script>
    </body>
</html>