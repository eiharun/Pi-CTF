<?php
    ob_start();session_start();?>
<html>
    <body>
        <?php
            $point = array("0" => "Secret.html",
            "1"=>"BlueLock.html",
            "2"=>"DragonBall.html",
            "3"=>"HunterxHunter.html",
            "4"=>"JujutsuKaisen.html",
            "5"=>"OnePiece.html");
            header("Location:library/".$point[$_GET["Page_ID"]]);
            
            
        ?>
    </body>   
</html>