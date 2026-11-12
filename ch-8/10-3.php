<?php
session_start();  // 啟用交談期

if (isset($_POST["Item"])) {
    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["Item"];

    switch (strtoupper($id)) {
        case "S001":
            $_SESSION["Name"] = "10吋平板電腦";
            $_SESSION["Price"] = 12000;
            break;
        case "S002":
            $_SESSION["Name"] = "15.6吋筆記型電腦";
            $_SESSION["Price"] = 27000;
            break;
        case "S003":
            $_SESSION["Name"] = "iPhone智慧型手機";
            $_SESSION["Price"] = 21000;
            break;
    }
    header("Location: savecart.php");  // 轉址
}

$id = $_SESSION["ID"]; // 取得Session變數
    $name = $_SESSION["Name"];
    $price = $_SESSION["Price"];
    $quantity = $_SESSION["Quantity"];

    setcookie($id . "[ID]", $id, time() + 3600);
    setcookie($id . "[Name]", $name, time() + 3600);
    setcookie($id . "[Price]", $price, time() + 3600);
    setcookie($id . "[Quantity]", $quantity, time() + 3600);
