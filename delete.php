<?php
session_start();
require 'init.php';
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute(array($id));
$count = $stmt->rowCount();
if($count == 1)
{
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute(array($id));
    echo $stmt->rowCount().' user deleted';
}
else
{
    echo 'invalid ID';
}