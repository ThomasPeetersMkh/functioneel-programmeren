<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn eerste webpagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="jumbotron text-center">
    <h1>Leuke plekken in Europa</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

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