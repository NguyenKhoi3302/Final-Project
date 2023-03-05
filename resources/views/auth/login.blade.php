@extends('client/index')
@section('content')
<style>
    .login{
        width:30%;
        margin: 10% 35%;
        border: 1px solid black;
        padding: 10px;
    }

    .login h2{
        text-align: center;
    }

    .login input[type=text], 
    input[type=password],
    input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    .login button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    .login button:hover {
    opacity: 0.8;
    }

    .login .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }


    .login .form-login {
    padding: 16px;
    }
    .login .form-login a{
        text-decoration: none; 
        color: blue;   
    }

    .login .form-login h3{
        color:red;   
    }

    /* .login .form-login span{
        color:red;   
    } */

    .login .form-login .form-login-footer span{
    width: 50%;
    }

    .login .form-login .form-login-footer span .Quen{
    float:right;
    }

    .login form {border: 3px solid #f1f1f1;}

    .login span.psw {
    float: right;
    padding-top: 16px;
    }
    .login .form-login  span{
        color: red;
    }
</style>
</head>
<body>
<div class="login">
    <h2>Login Form</h2>
    

    <form action="{{ route('login.action') }}" method="post">
        @csrf
        <div class="form-login">
            <label for="uname"><b>Email</b></label>
            <input type="email" placeholder="Enter mail" name="email" value="{{ old('email') }}">
            <span>@error('email') {{$message}} @enderror</span><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" >
            <span>@error('password') {{$message}}@enderror</span><br>

            <input type="checkbox" name="remember">Nhớ  tài  khoản !!!

            @if(Session::has('fail')) <h3>{{ session::get('fail') }}</h3> @endif
                
            <button type="submit">Login</button>
            
            <div class="form-login-footer">
                <span>Bạn  chưa  có  tài  khoản <a href="{{ route('register') }}">  Đăng ký</a></span>
                <span> <a class="Quen" href="{{ route('forget.password.get') }}">Quên mật khẩu ?</a></span>
            </div>
        </div>
    </form>
</div>

</body> 
@endsection('content')