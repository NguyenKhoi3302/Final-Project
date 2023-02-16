<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.head')
</head>
<body>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        @yield('admin_content')
        @if(isset($slog)){{$slog}}@endif
    </div> <!-- content -->


</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<?php require 'includes/footer_start.php' ?>

<?php require 'includes/footer_end.php' ?>
</body>
</html>