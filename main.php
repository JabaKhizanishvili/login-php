<?php

if (strlen($_POST["user"]) >= 8 && strlen($_POST["pass"]) >= 8) {
    return header("location:https://github.com/JabaKhizanishvili");
} else if (strlen($_POST["user"] < 8)) {
    return header('Location:index.php?error= Username input must be more than 8 characters');
} else if (strlen($_POST["pass"]) < 8) {
    return header('Location:index.php?error= Password input must be more than 8 characters');
} else {
    return header('Location:index.php?error= Username & Pass input must be more than 8 characters');
}
