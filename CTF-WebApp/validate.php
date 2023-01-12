<?php session_start();
    if(!isset($_SESSION['score'])){$_SESSION['score'] = 0;}
    if(isset($_POST['reset'])){
        session_destroy();
        session_start();
        $_SESSION['score'] = 0;
        header("Location:index.php");
    }
    $Crypto =       array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Linux =        array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Web =          array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Misc =         array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");

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