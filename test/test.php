<?
    for($w=2;$w<=9;$w++){
        for($l=1;$l<=9;$l++){
            echo $w." X ". $l." = ".$w*$l."<br>";
            if($l == 9){
                echo "<br>";
            }
        }
    }
?>