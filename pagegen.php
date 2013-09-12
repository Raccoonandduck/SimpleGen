<?php
include 'function.php';
head();
?>

<h2>Конструктор страниц</h2>

<div id="mainPageGen" width=100%>
    <div id="leftPageGen"></div>
    <div id="rightPageGen"></div>
</div>


<script>
var mainJS = document.getElementById('mainPageGen');
mainJS.style.height = window.innerHeight+'px';
</script>

<script>
$("#leftPageGen").draggable();
$("#leftPageGen").resizable();
$("#rightPageGen").draggable();
$("#rightPageGen").resizable();
</script>

<script>
alert("Сервис временно не работает");
</script>

<?php
footer();
?>
