<!DOCTYPE html>
<html lang="en">
<?php

 include "../dataRetrieval.php";
printHead();

?>
<body>
<?php
printJumbo("Europa","Wow so cool");
?>

<div class="container">
    <div class="row">
        <?php
        require_once "../dataRetrieval.php";
        foreach (GetData("select * from images","steden") as $row){
            print "<div class='col-sm-4'>";
            print "<h3>".$row["img_title"]."</h3>";
            print "<p>".$row["img_width"]. " x " . $row["img_height"];
            print "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
            print "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
            print "<img src=../images/".$row["img_filename"]." width='300' height='300'>";
            print "<br><a href='stad.php?img_id=" . $row["img_id"] ."'>meer info </a>";
            print "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>