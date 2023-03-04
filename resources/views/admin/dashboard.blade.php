@extends('admin.layouts.admin')
@section('title')
    Hệ thống quản trị S - Watch
@endsection
@section('admin_content')
<?php
    $current_month = date('m');
    $count_pd = 0;
    $count_user = 0;
    $count_orders = 0;
    $money = 0;
    $money_this_month = 0;
    $sold_pd = 0;
    $sold_pd_this_month = 0;
    foreach($pd_details as $item) {
        if ($item->quantity < 5) {
            $count_pd++ ;
        }
    }
    foreach ($user_list as $item){
        if(date('m', strtotime($item->created_at)) == $current_month){
            $count_user ++;
        }
    }
    foreach ($orders as $item){
        if(date('m', strtotime($item->created_at)) == $current_month){
            $count_orders ++;
        }
    }
    foreach ($order_details as $item){
        $money += ($item->quantity * $item->price);
        $sold_pd += $item->quantity;
        if(date('m') == date('m', strtotime($item->created_at))){
            $sold_pd_this_month += $item->quantity;
        }
        if(date('m') == date('m', strtotime($item->created_at))){
            $money_this_month += ($item->quantity * $item->price);
        }
    }

?>
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">Dashboard</h4>

                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-layers float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Đơn hàng</h6>
                <h2 class="m-b-20" data-plugin="counterup"><?=number_format(count($orders), 0, ",", ".")?></h2>
                <span class="label label-success"><?=number_format($count_orders, 0, ",", ".")?> </span> <span class="text-muted">Đơn hàng trong tháng</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-wallet float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Doanh thu</h6>
                <h2 class="m-b-20"><span data-plugin=""><?=number_format($money, 0, ",", ".")?></span></h2>
                <span class="label label-danger"> <?=number_format($money_this_month, 0, ",", ".")?> </span> <span class="text-muted">Doanh thu tháng này</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Sản phẩm đã bán</h6>
                <h2 class="m-b-20" data-plugin="counterup"><?=number_format($sold_pd, 0, ",", ".")?></h2>
                <span class="label label-warning"> <?=number_format($sold_pd_this_month, 0, ",", ".")?> </span>
                <span class="text-muted">Trong tháng</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-user float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Tổng người dùng</h6>
                <h2 class="m-b-20"><span data-plugin="counterup"><?=number_format(count($user_list), 0, ",", ".")?></span></h2>
                <span class="label label-pink"> <?=number_format($count_user, 0, ",", ".")?> </span>
                <span class="text-muted">Người dùng mới tháng này</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-bubble float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Bình luận tin tức</h6>
                <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-bubble float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Bình luận sản phẩm</h6>
                <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-envelope float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Số email được gửi</h6>
                <h2 class="m-b-20"><span data-plugin="counterup">15</span></h2>
                <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase m-b-20">Sản phẩm còn ít hơn 5</h6>
                <h2 class="m-b-20" data-plugin="counterup"><?=$count_pd?></h2>
                <span class="label label-warning" style="opacity: 0"> +89% </span> <span style="opacity: 0" class="text-muted">Last year</span>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-xl-12">
        <h2 class="bg-white m-auto mb-0 text-center py-4">Doanh thu theo tháng</h2>
        <div class="chart_wrap bg-white" style="height: 700px;">
            <div class="chart_column contain_price">
                <div class="chart_row">
                    <span class="d-block bg-white">200.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">180.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">160.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">140.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">120.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">100.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">80.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">60.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">40.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">20.000.000 vnđ</span>
                </div>
                <div class="chart_row">
                    <span class="d-block bg-white">0 vnđ</span>
                </div>
            </div>
            @for($i = 1; $i <= 12; $i++)
                <?php
                    $money_per_month = 0;
                    foreach ($order_details as $item){
                        if((int)$i == (int)date('m', strtotime($item->created_at))){
                            $money_per_month += ($item->quantity * $item->price);
                        }
                    }
                ?>
                <div class="chart_column">
                    <div class="value_chart" style="height: <?php echo $money_per_month/2000000000 * 100?>%">
                        <div class="value">
                            <span><?php echo number_format($money_per_month/10, 0, ",", ".")?></span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xl-12">
            <div class="chart_wrap bg-white pb-4 mb-4 pt-3">
                <div class="month">Tháng</div>
                @for($i = 1; $i <= 12; $i++)
                    <div class="month">{{$i}}</div>
                @endfor
            </div>
        </div>
    </div>
    <style>
        .chart_row{
            position: relative;
        }
        .chart_row span{
            position: relative;
            z-index: 9;
            width: max-content;
        }
        .chart_row:before{
            z-index: 8;
            width: 100vw;
            height: 1px;
            background-color: rgba(128, 128, 128, 0.2);
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        .chart_wrap{
            display: grid;
            grid-template-columns: repeat(13, 1fr);
            padding: 20px 20px 0;
            overflow: hidden;
        }
        .chart_wrap > .month:not(:first-child){
            padding: 0 35px;
            text-align: center;
        }
        .chart_column.contain_price{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
        .chart_column:not(.contain_price){
            height: 100%;
            display: flex;
            align-items: end;
            justify-content: end;
            position: relative;
            z-index: 10;
        }
        .value_chart{
            width: 50px;
            background-color: rgb(27, 185, 154);
            margin: 0 auto 10px;
            max-height: calc(100% - 20px);
            position: relative;
        }
        .chart_wrap .value{
            position: absolute;
            top: -35px;
            width: max-content;
            left: 50%;
            transform: translateX(-50%);
            font-size: 16px;
            font-weight: 600;
            color: #FFF;
        }
        .chart_wrap .value span{
            position: relative;
            z-index: 4;
        }
        .chart_wrap .value:after,
        .chart_wrap .value:before{
            position: absolute;
            content: '';
            opacity: 0;
            pointer-events: none;
            -webkit-transition: 0.3s ease-in-out;
            -moz-transition: 0.3s ease-in-out;
            -ms-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
            background-color: rgb(147, 147, 147);
        }
        .chart_wrap .value:before{
            width: 130%;
            height: 110%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            z-index: 3;
        }
        .chart_wrap .value:after{
            left: 50%;
            bottom: -6px;
            height: 12px;
            width: 12px;
            z-index: 2;
            transform: translateX(-50%) rotate(45deg);
        }
        .chart_wrap .value_chart:hover .value:before,
        .chart_wrap .value_chart:hover .value:after{
            opacity: 1;
        }
    </style>

{{--        <div class="col-xs-12 col-lg-12 col-xl-4">--}}
{{--            <div class="card-box">--}}

{{--                <h4 class="header-title m-t-0 m-b-30">Trends Monthly</h4>--}}

{{--                <div class="text-center m-b-20">--}}
{{--                    <div class="btn-group" role="group" aria-label="Basic example">--}}
{{--                        <button type="button" class="btn btn-sm btn-secondary">Today</button>--}}
{{--                        <button type="button" class="btn btn-sm btn-secondary">This Week</button>--}}
{{--                        <button type="button" class="btn btn-sm btn-secondary">Last Week</button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div id="morris-donut-example" style="height: 265px;"></div>--}}

{{--                <div class="text-center">--}}
{{--                    <ul class="list-inline chart-detail-list mb-0 m-t-10">--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>English</h6>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Italian</h6>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>French</h6>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div><!-- end col-->--}}


{{--    </div>--}}
{{--    <!-- end row -->--}}


{{--    <div class="row">--}}
{{--        <div class="col-xs-12 col-lg-12 col-xl-7">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-md-6">--}}
{{--                    <div class="card-box">--}}
{{--                        <h4 class="header-title m-t-0 m-b-20">Inbox</h4>--}}

{{--                        <div class="inbox-widget nicescroll" style="height: 339px;">--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Chadengle</p>--}}
{{--                                    <p class="inbox-item-text">Hey! there I'm available...</p>--}}
{{--                                    <p class="inbox-item-date">13:40 PM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Tomaslau</p>--}}
{{--                                    <p class="inbox-item-text">I've finished it! See you so...</p>--}}
{{--                                    <p class="inbox-item-date">13:34 PM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Stillnotdavid</p>--}}
{{--                                    <p class="inbox-item-text">This theme is awesome!</p>--}}
{{--                                    <p class="inbox-item-date">13:17 PM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Kurafire</p>--}}
{{--                                    <p class="inbox-item-text">Nice to meet you</p>--}}
{{--                                    <p class="inbox-item-date">12:20 PM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Shahedk</p>--}}
{{--                                    <p class="inbox-item-text">Hey! there I'm available...</p>--}}
{{--                                    <p class="inbox-item-date">10:15 AM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Adhamdannaway</p>--}}
{{--                                    <p class="inbox-item-text">This theme is awesome!</p>--}}
{{--                                    <p class="inbox-item-date">9:56 AM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Arashasghari</p>--}}
{{--                                    <p class="inbox-item-text">Hey! there I'm available...</p>--}}
{{--                                    <p class="inbox-item-date">10:15 AM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#">--}}
{{--                                <div class="inbox-item">--}}
{{--                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg"--}}
{{--                                            class="rounded-circle" alt=""></div>--}}
{{--                                    <p class="inbox-item-author">Joshaustin</p>--}}
{{--                                    <p class="inbox-item-text">I've finished it! See you so...</p>--}}
{{--                                    <p class="inbox-item-date">9:56 AM</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-xs-12 col-md-6">--}}
{{--                    <div class="card-box">--}}
{{--                        <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>--}}

{{--                        <p class="font-600 m-b-5">iMacs <span class="text-danger pull-right"><b>78%</b></span></p>--}}
{{--                        <div class="progress" style="height: 10px;">--}}
{{--                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"--}}
{{--                                style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card-box">--}}
{{--                        <h4 class="header-title m-t-0 m-b-20">Monthly Sales</h4>--}}

{{--                        <p class="font-600 m-b-5">Macbooks <span class="text-success pull-right"><b>25%</b></span></p>--}}
{{--                        <div class="progress" style="height: 10px;">--}}
{{--                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"--}}
{{--                                style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card-box">--}}
{{--                        <h4 class="header-title m-t-0 m-b-20">Daily Sales</h4>--}}

{{--                        <p class="font-600 m-b-5">Mobiles <span class="text-warning pull-right"><b>75%</b></span></p>--}}
{{--                        <div class="progress" style="height: 10px;">--}}
{{--                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"--}}
{{--                                style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div><!-- end col-->--}}

{{--        <div class="col-xs-12 col-lg-12 col-xl-5">--}}
{{--            <div class="card-box">--}}

{{--                <h4 class="header-title m-t-0 m-b-30">Top Contracts</h4>--}}

{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-bordered mb-0">--}}
{{--                        <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Company</th>--}}
{{--                                <th>Start Date</th>--}}
{{--                                <th>End Date</th>--}}
{{--                                <th>Status</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            <tr>--}}
{{--                                <th class="text-muted">Apple Technology</th>--}}
{{--                                <td>20/02/2014</td>--}}
{{--                                <td>19/02/2020</td>--}}
{{--                                <td><span class="label label-success">Paid</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th class="text-muted">Envato Pty Ltd.</th>--}}
{{--                                <td>20/02/2014</td>--}}
{{--                                <td>19/02/2020</td>--}}
{{--                                <td><span class="label label-danger">Unpaid</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th class="text-muted">Dribbble LLC.</th>--}}
{{--                                <td>20/02/2014</td>--}}
{{--                                <td>19/02/2020</td>--}}
{{--                                <td><span class="label label-success">Paid</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th class="text-muted">Adobe Family</th>--}}
{{--                                <td>20/02/2014</td>--}}
{{--                                <td>19/02/2020</td>--}}
{{--                                <td><span class="label label-success">Paid</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th class="text-muted">Apple Technology</th>--}}
{{--                                <td>20/02/2014</td>--}}
{{--                                <td>19/02/2020</td>--}}
{{--                                <td><span class="label label-danger">Unpaid</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th class="text-muted">Envato Pty Ltd.</th>--}}
{{--                                <td>20/02/2014</td>--}}
{{--                                <td>19/02/2020</td>--}}
{{--                                <td><span class="label label-success">Paid</span></td>--}}
{{--                            </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div><!-- end col-->--}}

    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection
