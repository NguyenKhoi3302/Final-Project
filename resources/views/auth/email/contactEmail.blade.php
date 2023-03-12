<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            font-family: "Roboto";
            font-size: 1rem;
        }
        .mail_container{
            background-color: #E4F1F7;
            margin: 0 auto;
            max-width: 600px;
            padding: 3.125rem 3.75rem 11rem;
        }
        h1{
            color: #04A9F4;
            text-align: center;
            letter-spacing: 0.6rem;
            font-size: 3rem;
            margin: 0 0 1.875rem;
        }
        .mail_inner{
            height: auto;
            width: 100%;
            background-color: #fff;
            padding: 1.875rem 2.5rem;
            box-shadow: 0 0 15px #9d9d9d;
            position: relative;
            z-index: 2;
        }
        .mail_inner:before{
            width: 107%;
            height: 100%;
            position: absolute;
            content: '';
            left: 50%;
            bottom: -150px;
            transform: translateX(-50%);
            background-image: url({{asset('images/envelop.png')}});
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
        }
        .item{
            margin-bottom: 0.625rem;
        }
        .item > p{
            text-align: justify;
            font-weight: 400;
            line-height: 1.56rem;
            margin: 0;
            padding-bottom: 0.125rem;
            border-bottom: 1px solid #b0b0b0;
            color: rgba(51, 51, 51, 0.95);
        }
        .item > span{
            font-size: 0.75rem;
            display: block;
            color: #04A9F4;
            font-weight: 500;
            margin-bottom: 0.18rem;
        }
        @media only screen and (max-width: 767px) {
            .mail_container{
                padding: 2rem 1rem;
            }
            h1{
                font-size: 38px;
            }
        }
    </style>
</head>
<body>
<div class="mail_container">
    <h1>MAIL LIÊN HỆ</h1>
    <div class="mail_inner">
        <div class="item">
            <span class="title">Tên người gửi:</span>
            <p>{{$data['name']}}</p>
        </div>
        @if(!empty($data['phone']))
            <div class="item">
                <span class="title">Số điện thoại:</span>
                <p><a href="tel:{{$data['phone']}}">{{$data['phone']}}</a></p>
            </div>
        @endif
        <div class="item">
            <span class="title">Email:</span>
            <p>{{$data['email']}}</p>
        </div>
        <div class="item">
            <span class="title">Nội dung:</span>
            <p>{{$data['message']}}</p>
        </div>
    </div>
</div>
</body>
</html>
