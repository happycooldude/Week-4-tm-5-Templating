<?
$id = $_GET["id"];
$page = "pages/" . $id . ".php";
?>

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <? include('includes/header.php') ?>

  <? include($page) ?>

  <? include('includes/footer.php') ?>


</body>

</html>