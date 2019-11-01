@include('head')
@include('navigate')

<!-- code -->

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#edit').addClass('active');
    });
</script>
@include('foot')