@extends('client/index')
@section('content')

<style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    </style>
    <body>

    <section class="section account_profile">
        <form action="{{ url('profileUpdate/'.$user->id) }}" method="POST" enctype="multipart/form-data">
            <div class="grid-container">
                @csrf
                @method('PUT')
                <div class="left_account">
                    <div class="avt_wrap">
                        <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
                        <canvas  id="cvas1" style="width:250px; height:250px;"></canvas>
                        <input name="avatar" type="file" id="image" multiple="false" accept="image/*" onchange="uploadIm()"/><br>
            
                    </div>
                </div>
                <div class="right_account">
                    <div class="info_wrap active">
                            <label for="fname">Tên người  dùng</label>
                            <input type="text" id="fname" name="name" value="{{$user->name}}">
                            <span>@error('name') {{$message}} @enderror</span><br>

                            <label for="lname">Số  điện  thoại</label>
                            <input type="text" id="lname" name="tel" value="{{$user->tel}}">
                            <span>@error('tel') {{$message}} @enderror</span><br>
                            
                            <label for="lname">Địa  chỉ</label>
                            <input type="text" id="lname" name="address" value="{{$user->address}}">
                            <span>@error('address') {{$message}} @enderror</span><br>
                        
                            <input type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script>
        window.CP.PenTimer.MAX_TIME_IN_LOOP_WO_EXIT = 6000;
        var drawGray = null;
        function uploadIm(){
        var canvas = document.getElementById("cvas1");
        var image = document.getElementById("image");
        var draw = new SimpleImage(image);
        drawGray = new SimpleImage(image);
        draw.drawTo(canvas);
        }
        </script>
@endsection
