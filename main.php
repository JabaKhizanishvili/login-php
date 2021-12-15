<?php
$errors = [];



if (strlen($_POST["user"]) > 8 && strlen($_POST["pass"]) > 8 && $_POST["pass"] == $_POST["rpass"]) {
    return header("location:https://github.com/JabaKhizanishvili?");
} else {
    if (strlen($_POST["user"]) < 8) {
        $errors["user"] = "username must be at least 8 characters";
    }
    if (strlen($_POST["pass"]) < 8) {
        $errors["pass"] = "password must be at least 8 characters";
    }
    if ($_POST["pass"] != $_POST["rpass"]) {
        $errors["match"] = "Passwords do not match";
    }
    $text = http_build_query(["errors" => $errors]);


    return header("location:index.php?" . $text);
}
