<?php
function startHTML(){
echo "<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <meta http-equiv='content-language' content='en' />
        <meta name='copyright' content='Copyright (c) 2014 Altis Life Control by Pictureclass - Revoplay.de' />
        <link href='css/bootstrap.css' rel='stylesheet' media='screen'>
        <title>Altis Life Control</title>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
        <script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src='//code.jquery.com/jquery.js'></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src='js/bootstrap.js'></script>     
    </head>
<body style='background: url(img/altis_background_2.jpg); background-size: cover;'>
<div id='wrap'>
    <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
      <span class='sr-only'>Toggle navigation</span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
    </button>
        <a class='navbar-brand' href='index.php' style='padding-top:0 !important;padding-bottom:0 !important;'><img src='img/logo_small.png'></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class='collapse navbar-collapse navbar-ex1-collapse'>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='index.php'>Главная Страница</a></li>
      <li><a href='admin/login.php'>Админка</a></li>
    </ul>
    
  </div><!-- /.navbar-collapse -->
  </nav>";
};
function closeHTML(){
echo"
</div><!-- Close Wrapper -->
<div id='footer' style='margin-top:30px;'>
    <div class='container' color: #999999;'>
        <p class='text-center' style='margin-top: 20px; margin-bottom: 0px !important; color: #999999;'>Copyright © 2014 Altis Life Control Version 0.2 </a>. All Rights Reserved.<br></a></p>
    </div>
</div>
</body>
</html>
";    
};

function headerbox(){
echo"
<div class='header_all'>
</div>

";}

function endbody(){
    echo"
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
        <script src='//code.jquery.com/jquery.js'></script>-->
        <!-- Include all compiled plugins (below), or include individual files as needed 
        <script src='js/bootstrap.js'></script>     -->   
    </body>
</html>
            
";
}
//NUMBER FORMATS
function money($input)
    {
        global $settings_money_format;
        if ($settings_money_format == "US"){ 
            $output = '$'.number_format($input, 0, ".",",");
            return $output;
        }
        if ($settings_money_format == "EUR") {
            $output = number_format($input, 0, ",",".").'€';
            return $output;
        }
        else {
            $output = $input;
            return $output;
        }
    }


?>

