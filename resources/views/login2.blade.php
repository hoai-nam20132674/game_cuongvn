<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ĐĂNG NHẬP | GAME SHOW TRI ÂN KHÁCH HÀNG</title>
  
  
  
      <link rel="stylesheet" href="{{asset('lg/css/style.css')}}">

  
</head>

<body>

  <div class="container">
  <div class="formBox level-login">
    <div class="box boxShaddow"></div>
    <div class="box loginBox">
      <h2>LOGIN</h2>
      <form action="/postLogin" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        
        @if( count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if( Session::has('flash_message'))
            <div style="background:red; color: #fff; padding: 10px; font-size: 20px;" class="alert alert-{{ Session::get('flash_level')}}">
                {{ Session::get('flash_message')}}
            </div>
        @endif
        <div class="f_row">
          <label>Họ Tên</label>
          <input type="text" class="input-field" required>
          <u></u>
        </div>
        <div class="f_row last">
          <label>Nhập SĐT</label>
          <input type="password" name="password" class="input-field" required>
          <u></u>
        </div>
        <button type="submit" class="btn"><span>Đăng nhập</span><u></u>
          <!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415.582 415.582" xml:space="preserve">
                                <path d="M411.47,96.426l-46.319-46.32c-5.482-5.482-14.371-5.482-19.853,0L152.348,243.058l-82.066-82.064
                                      c-5.48-5.482-14.37-5.482-19.851,0l-46.319,46.32c-5.482,5.481-5.482,14.37,0,19.852l138.311,138.31
                                      c2.741,2.742,6.334,4.112,9.926,4.112c3.593,0,7.186-1.37,9.926-4.112L411.47,116.277c2.633-2.632,4.111-6.203,4.111-9.925
                                      C415.582,102.628,414.103,99.059,411.47,96.426z"/>
                                </svg> -->
        </button>
        <!-- <div class="f_link">
          <a href="" class="resetTag">Forgot your password?</a>
        </div> -->
      </form>
    </div>
    <div class="box forgetbox">
      <a href="#" class="back icon-back">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;"
	 xml:space="preserve">
	<polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
		199.404,117.876 "/>
</svg>
      </a>
      <h2>Reset Password</h2>
      <form class="form">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
        <div class="f_row last">
          <label>Email Id</label>
          <input type="text" class="input-field" required>
          <u></u>
        </div>
        <button class="btn"><span>Reset</span><u></u>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415.582 415.582" xml:space="preserve">
                                <path d="M411.47,96.426l-46.319-46.32c-5.482-5.482-14.371-5.482-19.853,0L152.348,243.058l-82.066-82.064
                                      c-5.48-5.482-14.37-5.482-19.851,0l-46.319,46.32c-5.482,5.481-5.482,14.37,0,19.852l138.311,138.31
                                      c2.741,2.742,6.334,4.112,9.926,4.112c3.593,0,7.186-1.37,9.926-4.112L411.47,116.277c2.633-2.632,4.111-6.203,4.111-9.925
                                      C415.582,102.628,414.103,99.059,411.47,96.426z"/>
                                </svg>
        </button>
      </form>
    </div>
    <!-- <div class="box registerBox">
      <span class="reg_bg"></span>
      <h2>Register</h2>
      <form class="form">
        <div class="f_row">
          <label>Username</label>
          <input type="text" class="input-field" required>
          <u></u>
        </div>
        <div class="f_row">
          <label>Password</label>
          <input type="password" class="input-field" required>
          <u></u>
        </div>
        <div class="f_row last">
          <label>Repeat Password</label>
          <input type="password" class="input-field" required>
          <u></u>
        </div>
        <button class="btn-large">NEXT</button>
      </form>
    </div> -->
    <!-- <a href="#" class="regTag icon-add">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
<path d="M357,204H204v153h-51V204H0v-51h153V0h51v153h153V204z"/>
</svg>

    </a> -->
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

  <script  src="{{asset('lg/js/index.js')}}"></script>
  <script type="text/javascript">
    $("div.alert").delay(5000).slideUp();
  </script>




</body>

</html>