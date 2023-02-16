<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body class="fixed-left">
    <div class="wrapper">
        @include('admin.layouts.topbar')
        @include('admin.layouts.leftsidebar')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                @yield('admin_content')
                @if(isset($slog)){{$slog}}@endif
            </div> <!-- content -->

        </div>
        <!-- End content-page -->

    </div>
    <?php require 'includes/footer_start.php' ?>

    <?php require 'includes/footer_end.php' ?>
</body>

</html>