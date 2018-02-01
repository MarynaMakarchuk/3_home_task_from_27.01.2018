<b>Your visited pages:</b><br>
<?php
if (isset($_SESSION['page'])) {
    $arr = explode(',', getVisitedPages());
    foreach ($arr as $visitedPagesList) {
       echo '<a href="index.php?page=' . $visitedPagesList . '">' . $visitedPagesList . '</a><br>';
    }
}else{
        echo "You have not visited pages yet";
    }
?>


