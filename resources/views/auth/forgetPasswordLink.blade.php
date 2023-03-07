@extends('layouts.guest')
@section('content')
<style>
    .Con{
        width:30%;
        margin: 10% 35%;
        border: 1px solid black;
        padding: 10px;
    }

    .Con h2{
        text-align: center;
    }

    .Con input[type=text],
    input[type=password],
    input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    .Con button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    .Con button:hover {
    opacity: 0.8;
    }

    .Con .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }


    .Con .form-forget {
    padding: 16px;
    }
    .Con .form-forget .form-forget-footer span{
    width: 50%;
    }

    .Con .form-forget .form-forget-footer span .Quen{
    float:right;
    }

    .Con form {border: 3px solid #f1f1f1;}

    .Con span.psw {
    float: right;
    padding-top: 16px;
    }
</style>
</head>
<body>
<div class="Con">
    <h2>Đặt lại  mật  khẩu</h2>


    <form action="{{ route('reset.password.post') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-forget">
            <label for="uname"><b>Nhập email của bạn</b></label>
            <input type="text" id="email_address" class="form-control" name="email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <label for="psw"><b>Mật  khẩu  mới</b></label>
            <input type="password" id="password" class="form-control" name="password" required autofocus>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <label for="psw"><b>Nhập  lại  mật  khẩu</b></label>
            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif

            <button type="submit">Đặt lại  mật  khẩu</button>
        </div>
    </form>
</div>

</body>
@endsection('content')