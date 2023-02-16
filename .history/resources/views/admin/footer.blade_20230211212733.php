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

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>