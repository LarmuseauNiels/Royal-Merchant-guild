<?php
 class output
 {

    public static function header($page){ 
        ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Royal Merchant Guild - <?php echo $page ?> </title>
  <link rel="stylesheet" href="scss/style.css">
  <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
</head>
<body>
    <header>
    <nav class="navigation">
        <ul class="left">
        <li <?php if($page == "home"){echo "class='active'";}?>><a href="/">HOME</a></li>
        <li <?php if($page == "information"){echo "class='active'";}?>><a href="information">INFORMATION</a></li>
        <li <?php if($page == "about"){echo "class='active'";}?>><a href="about">ABOUT US</a></li>
        </ul>
        <ul class="right">
        <li <?php if($page == "discord"){echo "class='active'";}?>><a href="discord">DISCORD</a></li>
        <li <?php if($page == "encyclopedia"){echo "class='active'";}?>><a href="encyclopedia">ENCYCLOPEDIA</a></li>
        <li <?php if($page == "membership"){echo "class='active'";}?>><a href="membership">MEMBERSHIP</a></li>
        </ul>
    </nav>
    </header>
    <?php
    }
    
    public static function footer(){ 
        ?>
<script  src="js/index.js"></script>
</body>
</html>
    <?php
    }
}
