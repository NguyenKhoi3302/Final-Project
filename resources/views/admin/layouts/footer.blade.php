<!-- following js will activate the menu in left side bar based on url -->
<script type="text/javascript">
  // === following js will activate the menu in left side bar based on url ====
  $(document).ready(function() {
      $("#sidebar-menu a").each(function() {
      var pageUrl = window.location.href.split(/[?#]/)[0];
      if (this.href == pageUrl) {
              $(this).addClass("active");
              $(this).parent().addClass("active"); // add active to li of the current link
              $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
              $(this).parent().parent().prev().click(); // click the item to make it drop
          }
      });
  });
</script>

<script>
  var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('/assets-admin/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/popper.min.js')}}"></script><!-- Tether for Bootstrap -->
<script src="{{asset('/assets-admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/detect.js')}}"></script>
<script src="{{asset('/assets-admin/js/fastclick.js')}}"></script>
<script src="{{asset('/assets-admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('/assets-admin/js/waves.js')}}"></script>
<script src="{{asset('/assets-admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('/assets-admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('/assets-admin/plugins/switchery/switchery.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('/assets-admin/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('/assets-admin/plugins/raphael/raphael-min.js')}}"></script>

<!-- Counter Up  -->
<script src="{{asset('/assets-admin/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/assets-admin/plugins/counterup/jquery.counterup.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('/assets-admin/js/jquery.core.js')}}"></script>
<script src="{{asset('/assets-admin/js/jquery.app.js')}}"></script>

<!-- Page specific js -->
<script src="{{asset('/assets-admin/pages/jquery.dashboard.js')}}"></script>

<!-- Modal-Effect -->
<script src="{{asset('/assets-admin/plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{asset('assets-admin/plugins/custombox/js/legacy.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets-admin/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('assets-admin/plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('assets-admin/plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-admin/plugins/fileuploads/js/dropify.min.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@livewireScripts