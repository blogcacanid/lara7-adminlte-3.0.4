<!-- jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ url('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Ekko Lightbox -->
<script src="{{ url('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js') }}"></script>
<!-- Filterizr-->
<script src="{{ url('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- Page specific script -->
<script>
$(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function () {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
    });
})
</script>
