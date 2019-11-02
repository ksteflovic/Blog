@include('head')
@include('navigate')

<!-- code -->

<div id="parent">
    <h3><u>Cvičenie 3 preskúšanie</u></h3>
    <h4>Zadanie:</h4>
    <p>Dokončite aplikáciu z Cvičenia 3 tak, aby používateľ mohol okrem vkladania a editovania aj mazať používateľov. Zároveň je potrebné doplniť do GUI menu, aby sa používateľ dostal do každej časti aplikácie.</p>

    <h4>Popis výsledného zadania</h4>
    <p>V našej aplikácií dokážeme:</p>
    <p>
    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Pridávanie nových záznamov!" style="cursor:default;">Pridať 🤗</button>
    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Aktuálna tabuľka záznamov." style="cursor:default;">Prezerať 🥰</button>
    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editovanie už vloženého záznamu." style="cursor:default;">Upraviť 🤔</button>
    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Odstránenie existujúcich záznamov!" style="cursor:default;">Vymazať 😱</button>
    </p>
    <p>Každá možnosť má svoj vlastný layout, s tým, že obsahuje tú istú hlavičku - &#60;head&#62; a navbar pre lepšiu navigáciu - vyriešené cez &#64;include.<br> Hlavné funkcie:</p>
    <ul>
        <li>Aktívna stránka je <strong>zvýraznená</strong> v navbare.</li>
        <li>Pridaný náhodný generátor údajov</li>
        <li>Responzívny dizajn</li>
    </ul>
    <em>Dúfam, že sa vám moja výsledná práca bude páčiť.</em> 😊
    <br><br>
    <a href="https://github.com/just-pie/Blog"><img
                src="../resources/assets/svg/github-logo.svg"
                alt="Logo of Github"
                width="50px" /></a>
    <a href="https://laravel.com/"><img
                src="../resources/assets/svg/laravel.svg"
                alt="Logo of Laravel"
                width="50px" style="margin-left: 10px;"/></a>




</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#home').addClass('active');
    });
</script>
@include('foot')