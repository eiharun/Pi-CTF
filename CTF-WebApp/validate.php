<?php session_start();
    if(!isset($_SESSION['score'])){$_SESSION['score'] = 0;}
    if(isset($_POST['reset'])){
        session_destroy();
        session_start();
        $_SESSION['score'] = 0;
        header("Location:index.php");
    }
    $Crypto =       array("100"=>"PING{uR_4_w1zz4rdh4rry}", "200"=>"PING{PONG}","300"=>"PING{b1twhyZe_0p3r4t0R}","400"=>"PING{3Z_R$@}","500"=>"PING{H0w_10ng?}");
    $Linux =        array("100"=>"PING{yOus1ng-_-GREP=is_super`e4\$y}", "200"=>"PING{cat_c0mmand}","300"=>"PING{yoosing_y0ur_h34d}","400"=>"PING{291403_523}","500"=>"PING{A_B1t_H4rdr}");
    $Web =          array("100"=>"PING{Y0U_F0uND_M3}", "200"=>"PING{YourenotsupposedtoseethiS}","300"=>"PING{Crypt0gr4ph1cF4ilvr3}","400"=>"PING{Br0k3n_4cceSs_Contr01}","500"=>"PING{C0mm4nd_1nj3cT10N}");
    $Misc =         array("100"=>"PING{ETERNAL_BLUE}", "200"=>"PING{EXIFT00l_notEXITtool}","300"=>"PING{LOGIC}","400"=>"PING{MOUNTAIN_VIEW}","500"=>"PING{U_SLAVIE}");

    #Below from test.php
    if(isset($_POST['Crypto-100-flag'])){
        unset($_SESSION['hideC1']);
        if($_POST['Crypto-100-flag']==$Crypto["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideC1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC1'] = False;
            header("Location:index.php");
        }
    }
    
      
    if(isset($_POST['Linux-100-flag'])){
        unset($_SESSION['hideL1']);
        if($_POST['Linux-100-flag']==$Linux["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideL1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL1'] = False;
            header("Location:index.php");
        }
    }
    
    
    if(isset($_POST['Web-100-flag'])){
        unset($_SESSION['hideW1']);
        if($_POST['Web-100-flag']==$Web["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideW1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-100-flag'])){
        unset($_SESSION['hideM1']);
        if($_POST['Misc-100-flag']==$Misc["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideM1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-200-flag'])){
        unset($_SESSION['hideC2']);
        if($_POST['Crypto-200-flag']==$Crypto["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideC2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC2'] = False;
            header("Location:index.php");
        }
    }
    
    
    if(isset($_POST['Linux-200-flag'])){
        unset($_SESSION['hideL2']);
        if($_POST['Linux-200-flag']==$Linux["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideL2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL2'] = False;
            header("Location:index.php");
        }
    }
    
    
    if(isset($_POST['Web-200-flag'])){
        unset($_SESSION['hideW2']);
        if($_POST['Web-200-flag']==$Web["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideW2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-200-flag'])){
        unset($_SESSION['hideM2']);
        if($_POST['Misc-200-flag']==$Misc["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideM2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-300-flag'])){
        unset($_SESSION['hideC3']);
        if($_POST['Crypto-300-flag']==$Crypto["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideC3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC3'] = False;
            header("Location:index.php");
        }
    }
    
   
    if(isset($_POST['Linux-300-flag'])){
        unset($_SESSION['hideL3']);
        if($_POST['Linux-300-flag']==$Linux["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideL3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL3'] = False;
            header("Location:index.php");
        }
    }
    
   
    if(isset($_POST['Web-300-flag'])){
        unset($_SESSION['hideW3']);
        if($_POST['Web-300-flag']==$Web["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideW3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-300-flag'])){
        unset($_SESSION['hideM3']);
        if($_POST['Misc-300-flag']==$Misc["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideM3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-400-flag'])){
        unset($_SESSION['hideC4']);
        if($_POST['Crypto-400-flag']==$Crypto["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideC4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC4'] = False;
            header("Location:index.php");
        }
    }
    
    
    if(isset($_POST['Linux-400-flag'])){
        unset($_SESSION['hideL4']);
        if($_POST['Linux-400-flag']==$Linux["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideL4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL4'] = False;
            header("Location:index.php");
        }
    }
    
  
    if(isset($_POST['Web-400-flag'])){
        unset($_SESSION['hideW4']);
        if($_POST['Web-400-flag']==$Web["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideW4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-400-flag'])){
        unset($_SESSION['hideM4']);
        if($_POST['Misc-400-flag']==$Misc["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideM4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-500-flag'])){
        unset($_SESSION['hideC5']);
        if($_POST['Crypto-500-flag']==$Crypto["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideC5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC5'] = False;
            header("Location:index.php");
        }
    }
    
    
    if(isset($_POST['Linux-500-flag'])){
        unset($_SESSION['hideL5']);
        if($_POST['Linux-500-flag']==$Linux["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideL5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL5'] = False;
            header("Location:index.php");
        }
    }
    
    
    if(isset($_POST['Web-500-flag'])){
        unset($_SESSION['hideW5']);
        if($_POST['Web-500-flag']==$Web["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideW5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW5'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-500-flag'])){
        unset($_SESSION['hideM5']);
        if($_POST['Misc-500-flag']==$Misc["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideM5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM5'] = False;
            header("Location:index.php");
        }
    }
    
    
    


?>