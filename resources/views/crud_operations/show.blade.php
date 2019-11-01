@include('head')
@include('navigate')

<!-- code -->

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#show').addClass('active');
    });
</script>
@include('foot')