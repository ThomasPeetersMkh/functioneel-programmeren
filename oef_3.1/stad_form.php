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
    <h1>Detail Stad</h1>
</div>
<div class="city">
    <?php
    require_once "../dataRetrieval.php";
    foreach (GetData("select * from images where img_id = " . $_GET['img_id'],"steden") as $detail) {
        print '<form  id="mainform" name="mainform" method="POST" action="save.php">';
        print '<div class="form-group row">';
        print '<label for="staticId" class="col-sm-2 col-form-label">Id</label>';
        print '<div class="col-sm-10">';
        print '<input type="text" readonly class="form-control-plaintext" id="staticId" name="img_id" value="'. $detail["img_id"].'">';
        print '</div>';
        print '</div>';
        print '<div class="form-group row">';
        print '<label for="inputTitle" class="col-sm-2 col-form-label">Title</label>';
        print '<div class="col-sm-10">';
        print '<input type="text" class="form-control" id="inputTitle" name="img_title" value="'. $detail["img_title"].'">';
        print '</div>';
        print '</div>';

        print '<div class="form-group row">';
        print '<label for="inputFileName" class="col-sm-2 col-form-label">Title</label>';
        print '<div class="col-sm-10">';
        print ' <input type="text" class="form-control" id="inputFileName" name="img_filename" value="'. $detail["img_filename"].'">';
        print '</div>';
        print '</div>';

        print '<div class="form-group row">';
        print '<label for="inputWidth" class="col-sm-2 col-form-label">Width</label>';
        print '<div class="col-sm-10">';
        print ' <input type="text" class="form-control" id="inputWidth" name="img_width" value="'. $detail["img_width"].'">';
        print '</div>';
        print '</div>';

        print '<div class="form-group row">';
        print '<label for="inputHeight" class="col-sm-2 col-form-label">Height</label>';
        print '<div class="col-sm-10">';
        print ' <input type="text" class="form-control" id="inputHeight" name="img_height" value="'. $detail["img_height"].'">';
        print '</div>';
        print '</div>';
        print '<button type="submit" class="btn btn-primary mb-2">Save</button>';
        print '</form>';
        print "<img src=../images/" . $detail["img_filename"] . " width='800px' height='auto' display='block'>";
        print "<br><a href='steden2.php'>Terug naar overzicht</a>";
    }
    ?>
</div>

</body>
</html>