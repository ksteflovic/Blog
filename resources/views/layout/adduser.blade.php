@include('head');
@include('navigate');

<!-- code -->

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#home').addClass('active');
    });
</script>
@include('foot');