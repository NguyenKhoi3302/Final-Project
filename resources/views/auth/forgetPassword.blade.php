
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
    .Con .link span{
        color:#04AA6D;
    }
    .Con .form-forget  span{
        color: red;
    }
</style>
</head>
<body>
<div class="Con">
    <h2>Login Form</h2>
    @if (Session::has('message'))
        <div class="link" role="alert">
            <span>{{ Session::get('message') }}</span>
        </div>
    @endif

    <form action="{{ route('forget.password.post') }}" method="POST">
        @csrf
        <div class="form-forget">
            <label for="uname"><b>Email</b></label>
            <input type="text" id="email_address" class="form-control" name="email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <button type="submit">Gửi link tới email của  bạnn!</button>
        </div>
    </form>
</div>

</body>
@endsection('content')