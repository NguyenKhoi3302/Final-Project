@extends('client/index')
@section('content')
<style>
    .register{
        width:30%;
        margin: 10% 35%;
        border: 1px solid black;
        padding: 10px;
    }

    .register h2{
        text-align: center;
    }

    .register input[type=text], 
    input[type=password],
    input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    .register button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    .register button:hover {
    opacity: 0.8;
    }

    .register .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }


    .register .form-register {
    padding: 16px;
    }

    .register .form-register span{
    color:red;
    }

    .register .form-register h3{
    color:#04AA6D;
    }

    .register .form-register a{
        text-decoration: none; 
        color: blue;   
    }

    .register form {
    border: 3px solid #f1f1f1;
    }

    .register span.psw {
    float: right;
    padding-top: 16px;
    }
</style>
</head>
<body>
<div class="register">
    <h2>Đăng ký thành viên </h2>

    <form action="{{ route('register.action') }}" method="post">
        @csrf
        <div class="form-register">
            <label for="uname"><b>Tên  người dùng</b></label>
            <input type="text" placeholder="Nhập tên người dùng" name="name" value="{{ old('name') }}" >
            <span>@error('name') {{$message}} @enderror</span><br>

            <label for="uname"><b>Email</b></label>
            <input type="email" placeholder="Nhập email" name="email" value="{{ old('email') }}" >
            <span>@error('email') {{$message}}@enderror</span><br>
                
            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" >
            <span>@error('password') {{$message}}@enderror</span><br>

            <label for="psw"><b>Nhập lại mật khẩu</b></label>
            <input type="password" placeholder="Nhập lại mật khẩu" name="password_confrim" >
            <span>@error('password_confrim') {{$message}}@enderror</span><br>
            
            <label for="uname"><b>Số điện  thoại</b></label>
            <input type="text" placeholder="Nhập số điện  thoại" name="tel" value="{{ old('tel') }}">
            <span>@error('tel') {{$message}}@enderror</span><br>

            <button type="submit">Đăng ký</button>
            @if(Session::has('success')) <h3>{{ session::get('success') }} <a href="{{ route('login') }}">Đăng nhập</a></h3> @endif
        </div>
    </form>
</div>

</body> 
@endsection('content')