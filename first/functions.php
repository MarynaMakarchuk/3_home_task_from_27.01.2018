<?php
function getVisitedPages(){
    if (isset($_GET['page'])) {
        if(isset($_SESSION['page'])){
            $_SESSION['page'] .= "," . $_GET['page'];
            $sessionArr = explode(',', $_SESSION['page']);
            $uniqueSessionArr = array_unique($sessionArr);
            $uniqueSessionString = implode(',', $uniqueSessionArr);
            $_SESSION['page'] = $uniqueSessionString;
        }else{
            $_SESSION['page'] = $_GET['page'];
        }
    }
    return $_SESSION['page'];
}