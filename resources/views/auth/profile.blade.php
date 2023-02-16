@extends('client/index')
@section('content')
<style>
    .profile{
        width:30%;
        margin: 10% 35%;
        border: 1px solid black;
        padding: 10px;
    }

    .profile h2{
        text-align: center;
    }

    .profile input[type=text], 
    input[type=password],
    input[type=name],
    input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    .profile button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    .profile button:hover {
    opacity: 0.8;
    }

    .profile .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }


    .profile .form-profile {
    padding: 16px;
    }

    .profile .form-profile a{
        text-decoration: none; 
        color: blue;   
    }

    .profile .form-profile h3{
        color:red;   
    }

    /* .profile .form-profile span{
        color:red;   
    } */

    .profile .form-profile .form-profile-footer span{
    width: 50%;
    }

    .profile .form-profile .form-profile-footer span .Quen{
    float:right;
    }

    .profile form {border: 3px solid #f1f1f1;}

    .profile span.psw {
    float: right;
    padding-top: 16px;
    }
</style>
</head>
<body>
<div class="profile">
    <h2>profile Form</h2>
    

    <form action="{{ route('profile.action') }}" method="post">
        @csrf
        @method('put') 
        <div class="form-profile">
            <label for="uname"><b>Tên người dùng</b></label>
            <input type="name" placeholder="Enter name" name="name" value="{{ $user->name }}">
            <!-- <span>@error('name') {{$message}} @enderror</span><br> -->
            
            <label for="psw"><b>Số điện thoại</b></label>
            <input type="text" placeholder="Enter tel" name="tel" value="{{ $user->tel }}">
            <!-- <span>@error('password') {{$message}}@enderror</span><br> -->

            <label for="psw"><b>Đại chỉ</b></label>
            <input type="text" placeholder="Enter address" name="address" value="{{ $user->address }}">
            <!-- <span>@error('password') {{$message}}@enderror</span><br> -->

            <button type="submit">Cập nhập</button>
            @if(Session::has('success')) <h3>{{ session::get('success') }}</h3> @endif
            
        </div>>
    </form>
</div>

</body> 
@endsection('content')