<?php 
    if(isset($_GET)) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        if ($a == 0) {
            if ($b == 0) {
                echo "Phuong Trinh Vo So Nghiem";
            }
            else {
                echo "Phuong Trinh Vo Nghiem";
            }
        } else {
        echo "x = " . -$b / $a;
    }
    }
    else {
        echo "Error";
    }
?>