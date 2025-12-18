<?php
session_start();
if (($_SESSION['role'] == 'mhs')) {
    header("Location: ../MenuKampus.php");
    exit();
}
