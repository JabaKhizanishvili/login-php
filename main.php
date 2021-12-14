<?php
$errors = [];

if (strlen($_POST["user"]) < 8) {
    echo "yle";
    $errors["user"] = "username must be at least 8 characters";
}
if (strlen($_POST["pass"]) < 8) {
    $errors["pass"] = "password must be at least 8 characters";
}
$text = http_build_query(["errors" => $errors]);


return header("location:index.php?" . $text);
