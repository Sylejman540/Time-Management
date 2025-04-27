<?php
// only start session if none active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// connect
$mysqli = new mysqli('localhost','root','','myfirstdatabase');
if ($mysqli->connect_errno) {
    die("Connect error: " . $mysqli->connect_error);
}

$id     = 0;
$update = false;
$name   = '';
        
// CREATE
if (isset($_POST['save'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
    $mysqli->query("INSERT INTO data (name) VALUES ('$name')")
        or die($mysqli->error);
    $_SESSION['message'] = "Record has been saved!";
    header('Location: manage.php');
    exit;
}

// DELETE
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id")
        or die($mysqli->error);
    $_SESSION['message'] = "Record has been deleted!";
    header('Location: manage.php');
    exit;
}

// PREPARE EDIT
if (isset($_GET['edit'])) {
    $id     = (int)$_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id")
        or die($mysqli->error);
    if ($row = $result->fetch_assoc()) {
        $name = $row['name'];
    }
}

// UPDATE
if (isset($_POST['update'])) {
    $id   = (int)$_POST['id'];
    $name = $mysqli->real_escape_string($_POST['name']);
    $mysqli->query("UPDATE data SET name='$name' WHERE id=$id")
        or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated!";
    header('Location: manage.php');
    exit;
}
