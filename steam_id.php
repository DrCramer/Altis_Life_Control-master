<?php
session_start ();
require_once "config.php";
// DEBUG CHECK
if ($debug=="1"){
error_reporting(E_ALL); 
ini_set('display_errors', 1);
}
require_once PROJECT_PATH."/lang/de.php";
require_once PROJECT_PATH."/include/function_html_basic.php";
startHTML();



?>
<div class="container" style="padding-top: 60px;">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">Start</a></li>
            <li class="active">Как найти ваш ID</li>
        </ol>
    </div>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <h4>Шаг 1 - Запускаем Arma 3</h4>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="col-md-6">
                        <img src="img/steam_id_1.png" alt="Get Steam ID Picture 1" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <p>Запустите Arma 3. Теперь выберите пункт "Настройки".</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        <h4>Шаг 2 - Найти ваш профиль</h4>
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-6">
                        <img src="img/steam_id_2.png" alt="Get Steam ID Picture 1" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <p>Выберите пункт "Профиль", чтобы найти ваш ID.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <h4>Шаг 3 - Найти ваш ID</h4>
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-6">
                        <img src="img/steam_id_3.png" alt="Get Steam ID Picture 1" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <p>Здесь вы найдете все ваши созданные профили. С правой стороны вы найдете ваш ID. <br> Если вы нажмете "Изменить", то вы сможете скопировать\вставить ваш ID</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
    
    
<?php
closeHTML();
?>