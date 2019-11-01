@include('head');
@include('navigate');

<!-- code -->

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#create').addClass('active');
    });
</script>
@include('foot');