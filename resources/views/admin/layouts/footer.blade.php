<div id="media_wrap" class="popup_full">
    <div class="bg_dark"></div>
    <div class="list_img">
        <div class="title">
            <h4>Chi tiết hình ảnh</h4>
            <div class="close_btn">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 9L9 15" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 15L9 9" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
        <div class="media_gallery" id="popup_gallery">

        </div>
        <div class="img_info">
            <img src="" class="thumbnail">
            <div id="img_info">

            </div>
            <button class="btn btn-primary choose_btn" data-src="" data-alt="">Chọn</button>
        </div>
    </div>
</div>
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
{{--<script src="{{asset('/assets-admin/js/popper.min.js')}}"></script><!-- Tether for Bootstrap -->--}}
<script src="{{asset('/assets-admin/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('/assets-admin/js/detect.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/js/fastclick.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/js/jquery.blockUI.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/js/waves.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/js/jquery.nicescroll.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/js/jquery.scrollTo.min.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/js/jquery.slimscroll.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/plugins/switchery/switchery.min.js')}}"></script>--}}

<!--Morris Chart-->
{{--<script src="{{asset('/assets-admin/plugins/morris/morris.min.js')}}"></script>--}}
{{--<script src="{{asset('/assets-admin/plugins/raphael/raphael-min.js')}}"></script>--}}

<!-- Counter Up  -->
<script src="{{asset('/assets-admin/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/assets-admin/plugins/counterup/jquery.counterup.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('/assets-admin/js/jquery.core.js')}}"></script>
<script src="{{asset('/assets-admin/js/jquery.app.js')}}"></script>

<!-- Page specific js -->
<script src="{{asset('/assets-admin/pages/jquery.dashboard.js')}}"></script>
{{--<script src="{{asset('/assets-admin/pages/jquery.dashboard.js')}}"></script>--}}
{{--Custom JS--}}
<script src="{{asset('assets-admin/js/custom.js')}}"></script>
<script>
    if($("textarea#content").length){
        ClassicEditor
            .create( document.querySelector( 'textarea#content' ) )
            .catch( error => {
                console.error( error );
            } );
    }

</script>

<!-- Modal-Effect -->
<script src="{{asset('/assets-admin/plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{asset('assets-admin/plugins/custombox/js/legacy.min.js')}}"></script>
{{----}}
<script type="text/javascript" src="{{asset('assets-admin/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('assets-admin/plugins/toastr/toastr.min.js')}}"></script>
{{----}}
<script src="{{asset('assets-admin/plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-admin/plugins/fileuploads/js/dropify.min.js')}}"></script>
{{----}}
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script src="{{asset('assets-admin/plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets-admin/pages/jquery.ui-sliders.js')}}"></script>
<script src="{{asset('assets-admin/plugins/switchery/switchery.min.js')}}"></script>
@livewireScripts
