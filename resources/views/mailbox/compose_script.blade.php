<!-- jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Page Script -->
<script>
$(function () {
    //Add text editor
    $('#compose-textarea').summernote()
})
</script>
