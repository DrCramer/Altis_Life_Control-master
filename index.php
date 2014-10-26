<?php
require_once "lang/de.php";
require_once "include/function_html_basic.php";
startHTML();
?>

<div class="container" style="padding-top: 60px;">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">Главная</a></li>
        </ol>
    </div>
    <div class="jumbotron">
        <h1>Добро пожаловать жители Алтиса!</h1>
        <p>Здесь вы можете посмотреть свой игровой инвентарь, ваши дома, автомобили, вертолеты и лодки. </p>	
        <form method="post" action="player.php" role="form" >
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Введите ваш ID здесь" name="steam_id" >
                <span class="input-group-btn">
                    <button class="btn btn-success" type="submit" >Получить данные!</button>
                </span>
                
            </div>
        </form>
        <p><a class="btn btn-default" href="steam_id.php" role="button">Как узнать свой ID</a></p>
</div>
</div>

<?php
closeHTML();

       