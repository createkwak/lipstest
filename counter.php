<?php
/**
 */ 
    if ( !file_exists ( "count.txt") )
    {
        $fp = fopen("count.txt", "w+") ;
        fclose($fp) ;
    }

    $count = file("count.txt") ;
    
    $count = chop($count[0]) ;
    
    if ( !$_COOKIE["ip"] )
    {
        $count++ ;
        
        $fp = fopen("count.txt", "w") ;
        fwrite($fp, "$count") ;
        fclose($fp) ;
        
        SetCookie("ip", $REMOTE_ADDR) ;
    }

 
    echo $_SERVER['REMOTE_ADDR'] ;
    echo "<br>" ;
    echo $count ;
?>
