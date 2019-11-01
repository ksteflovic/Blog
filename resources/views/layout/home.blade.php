@include('head')
@include('navigate')

<!-- code -->

<div>
    <h3>Cvičenie 3 preskúšanie</h3>
    <p>Dokončite aplikáciu z Cvičenia 3 tak, aby používateľ mohol okrem vkladania a editovania aj mazať používateľov.
    </p>
    <p>Zároveň je potrebné doplniť do GUI menu, aby sa používateľ dostal do každej časti aplikácie.</p>
    <p>Tip: Nabudúce poprosíme, aby ste si po sebe kontrolovali gramatiku. Ďakujeme :man_technologist: :woman_technologist:</p>
</div>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#home').addClass('active');
    });
</script>
@include('foot')