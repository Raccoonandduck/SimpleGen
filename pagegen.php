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
var leftJS = document.getElementById('leftPageGen');
var rightJS = document.getElementById('rightPageGen');
mainJS.style.height = window.innerHeight+'px';
leftJS.style.height = window.innerHeight+'px';
rightJS.style.height = window.innerHeight+'px';
</script>

<script>
alert("Сервис временно не работает");
</script>

<?php
footer();
?>
