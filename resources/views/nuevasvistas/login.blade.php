<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Fira+Sans");
      html, body {
        position: relative;
        min-height: 100vh;
        background-color: #e1e8ee;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Fira Sans", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .form-structor {
        background-color: #222;
        border-radius: 15px;
        height: 550px;
        width: 350px;
        position: relative;
        overflow: hidden;
      }
      .form-structor::after {
        content: "";
        opacity: 0.8;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: left bottom;
        background-size: 500px;
        background-image: url("https://farm6.staticflickr.com/5810/30244589200_0e8e69bcb4_o.jpg");
      }
      .form-structor .signup {
        position: absolute;
        top: 40%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        width: 65%;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .signup.slide-up {
        top: 5%;
        -webkit-transform: translate(-50%, 0%);
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
        opacity: 0;
        visibility: hidden;
      }
      .form-structor .signup.slide-up .form-title {
        font-size: 1em;
        cursor: pointer;
      }
      .form-structor .signup.slide-up .form-title span {
        margin-right: 5px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .signup .form-title {
        color: #fff;
        font-size: 1.7em;
        text-align: center;
      }
      .form-structor .signup .form-title span {
        color: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .signup .form-holder {
        border-radius: 15px;
        background-color: #fff;
        overflow: hidden;
        margin-top: 30px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .signup .form-holder .input {
        border: 0;
        outline: none;
        box-shadow: none;
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 8px 15px;
        border-bottom: 1px solid #eee;
        width: 100%;
        font-size: 12px;
      }
      .form-structor .signup .form-holder .input:last-child {
        border-bottom: 0;
      }
      .form-structor .signup .form-holder .input::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
      }
      .form-structor .signup .submit-btn {
        background-color: rgba(0, 0, 0, 0.4);
        color: rgba(256, 256, 256, 0.7);
        border: 0;
        border-radius: 15px;
        display: block;
        margin: 15px auto;
        padding: 15px 45px;
        width: 100%;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .signup .submit-btn:hover {
        transition: all 0.3s ease;
        background-color: rgba(0, 0, 0, 0.8);
      }
      .form-structor .login {
        position: absolute;
        top: 20%;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login::before {
        content: "";
        position: absolute;
        left: 50%;
        top: -20px;
        -webkit-transform: translate(-50%, 0);
        background-color: #fff;
        width: 200%;
        height: 250px;
        border-radius: 50%;
        z-index: 4;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login .center {
        position: absolute;
        top: calc(50% - 10%);
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        width: 65%;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login .center .form-title {
        color: #000;
        font-size: 1.7em;
        text-align: center;
      }
      .form-structor .login .center .form-title span {
        color: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login .center .form-holder {
        border-radius: 15px;
        background-color: #fff;
        border: 1px solid #eee;
        overflow: hidden;
        margin-top: 50px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login .center .form-holder .input {
        border: 0;
        outline: none;
        box-shadow: none;
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 8px 15px;
        border-bottom: 1px solid #eee;
        width: 100%;
        font-size: 12px;
      }
      .form-structor .login .center .form-holder .input:last-child {
        border-bottom: 0;
      }
      .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
      }
      .form-structor .login .center .submit-btn {
        background-color: #6b92a4;
        color: rgba(256, 256, 256, 0.7);
        border: 0;
        border-radius: 15px;
        display: block;
        margin: 15px auto;
        padding: 15px 45px;
        width: 100%;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login .center .submit-btn:hover {
        transition: all 0.3s ease;
        background-color: rgba(0, 0, 0, 0.8);
      }
      .form-structor .login.slide-up {
        top: 90%;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login.slide-up .center {
        top: 10%;
        -webkit-transform: translate(-50%, 0%);
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login.slide-up .form-title {
        font-size: 1em;
        margin: 0;
        padding: 0;
        cursor: pointer;
        -webkit-transition: all 0.3s ease;
      }
      .form-structor .login.slide-up .form-title span {
        margin-right: 5px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
      }
    </style>
  </head>
  <body>

      <div class="form-structor">
        <form action="{{ url('/register') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <div class="form-holder">
              <input type="text" class="input" placeholder="Name" name="name"/>
              <input type="email" class="input" placeholder="Email" name="email"/>
              <input type="password" class="input" placeholder="Password"  name="password"/>
              <input type="password" class="input" placeholder="RepetPassword"  name="password_confirmation"/>
              <select class="input" name="tipo">
              </select>
              <select class="input" name="idarea">
              </select>
              <input type="checkbox" class="input" name="terms">
              <button type="button" class="input" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">TERMINOS</button>
            </div>
            <button class="submit-btn">REGISTAR</button>
          </div>
        </form>
        <form action="{{ url('/login') }}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="login slide-up">
            <div class="center">
              <h2 class="form-title" id="login"><span>or</span>Log in</h2>
              <div class="form-holder">
                <input type="email" class="input" placeholder="Email" name="email" />
                <input type="password" class="input" placeholder="Password" name="password"/>
              </div>
              <button type="submit" class="submit-btn">INGRESAR</button>
            </div>
          </div>
        </form>
      </div>

      <script src="{{asset('js/sistemlogin.js')}}"></script>
  </body>
</html>
