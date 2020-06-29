<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">
            &copy; @lang('site.all_rights')</span>
        <span class="float-md-right d-none d-md-block"> <a href="https://github.com/mostfaswaisi93">mostfaswaisi93</a>
            <i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->

<!-- BEGIN: Vendor JS-->
<script src="{{ url('admin_files/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ url('admin_files/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('admin_files/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ url('admin_files/app-assets/js/core/app.js') }}"></script>
<script src="{{ url('admin_files/app-assets/js/scripts/components.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('admin_files/app-assets/js/scripts/datatables/datatable.js') }}"></script>
<!-- END: Page JS-->

@stack('scripts')

</body>
<!-- END: Body-->

</html>