<?php

include_once "course\ICourse.php";
include_once "course\BankGovUaCourse.php";
include_once "course\CourseStatic.php";
include_once "course\PrivatClassCourse.php";

$course = CourseStatic::getCourse();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select name="course">
        <option value="none">Не конвертировать</option>
        <option value="usd"><?= "USD: " . $course->getUSD()?></option>
        <option value="eur"><?= "EUR: " . $course->getEUR()?></option>
        <option value="rub"><?= "RUB: " . $course->getRUB()?></option>
    </select>


    <?php include "views\products.php "?>

</body>
</html>
