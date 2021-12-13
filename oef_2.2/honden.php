<!DOCTYPE html>
<html lang="en">
<head>
<title>Honden</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
<h1>De leukste honden van Europa</h1>
<p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
<div class="row">

<form>

<div class="form-group">
<label for="hon_id">Id</label>
<input type="number" class="form-control" id="hon_id" name="hon_id">
</div>

<div class="form-group">
<label for="hon_merk">Merk</label>
<input type="number" class="form-control" id="hon_merk" name="hon_merk">
</div>

<div class="form-group">
<label for="hon_naam">Naam</label>
<input type="number" class="form-control" id="hon_naam" name="hon_naam">
</div>

<button type="submit" class="btn btn-primary">Verzenden</button>

</form>

</div>
</div>

</body>
</html>

<?php
require_once "database.php";

print "Dit is save.php<br>";

var_dump($_POST); print "<br>";

$sql = "INSERT INTO hond SET " .
//" hon_id=" . $_POST["hon_id"] . "," .
    " hon_merk=" . "'" . $_POST["hon_merk"] . "'" . "," .
    " hon_naam=" . "'" . $_POST["hon_naam"] . "'" ;

print $sql . "<br>";

$result = ExecSQL($sql);

var_dump($result); print "<br>";

?>

<?php
require_once "config.php";

function GetData( $sql, $params )
{
// create connection
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

// check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// execute given query
    $result = $conn->prepare($sql);



// build data array
    $data = [];
    if ( $result->num_rows > 0 )
    {
        while( $row = $result->fetch_assoc() )
        {
            $data[] = $row;
        }
    }

// close connection
    $conn->close();

// return data array
    return $data;
}

function ExecSQL( $sql )
{
// create connection
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

// check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// execute given query
    $result = $conn->query($sql);

// close connection
    $conn->close();

// return data array
    return $result;
}

print "Dit is save.php<br>";

var_dump($_POST);
print "<br>";

$sql = "INSERT INTO hond SET " .
//" hon_id=" . $_POST["hon_id"] . "," .
    " hon_merk=" . "'" . $_POST["hon_merk"] . "'" . "," .
    " hon_naam=" . "'" . $_POST["hon_naam"] . "'";

print $sql . "<br>";
