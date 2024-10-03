<?php
session_start();

// RESET SESSION
if (isset($_GET["reset"])) {
    session_destroy();
    session_start();
}

if (isset($_GET["first_name"])) {
    $first_name = $_GET["first_name"];
    $_SESSION["first_name"] = $first_name;
} elseif (isset($_POST["first_name"]) && !empty($_POST["first_name"])) {
    $first_name = $_POST["first_name"];
    $_SESSION["first_name"] = $first_name;
} elseif (isset($_SESSION["first_name"])) {
    $first_name = $_SESSION["first_name"];
} else {
    $first_name = "Anonyme";
};

/* ------ debug ------ */

// echo '<pre>';
// echo "GET";
// print_r($_GET);
// echo "POST";
// print_r($_POST);
// echo "SESSION";
// print_r($_SESSION);
// echo '</pre>';

/* ------ debug ------ */
?>

<h1>Bonjour , <?php echo $first_name; ?></h1>
<form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
    <br>
    <a href="exercice.php?reset=true">Reset la SESSION</a>
</form>