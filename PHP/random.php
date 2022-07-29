<?php
session_start();
if (empty($_SESSION)){
    $rand_num = rand(1, 99);
    $_SESSION["num"][] = $rand_num;
    echo $rand_num;
}else{

    while (true) {
        $rand_num = rand(1, 99);
        $count = 0;
        foreach ($_SESSION["num"] as $num) {
            if ($num == $rand_num) {

                break;
            } else {
                $count++;
            }
        }
        if($count == count($_SESSION["num"])){
            $_SESSION["num"][] = $rand_num;
            echo $rand_num;
            break;
        }

    }
}
?>