<?php
    if(isset($_POST['Start'])){
        $cmd = "docker run -p 2200:22 -d --rm ubuntu-ctf";
        shell_exec();
    }
    # unfinished 
?>