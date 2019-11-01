@include('head')
@include('navigate')

<!-- code -->

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#delete').addClass('active');
    });
</script>
@include('foot');