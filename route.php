<?php
require_once "vendor/autoload.php";

use App\Classes\Series;
use App\Classes\Student;

if (isset($_GET["page"])) {
    if ($_GET["page"] == "home") {

        include "pages/home.php";
    } elseif ($_GET["page"] == "simple-form") {
        include "pages/simple-form.php";
    } elseif ($_GET["page"] == "series") {
        include "pages/series.php";
    } elseif ($_GET["page"] == "get-full-name") {
        $student = new Student($_POST);
        $fullName = $student->getFullName();
        include "pages/simple-form.php";
    } elseif ($_GET["page"] == "get-result") {
        $series = new Series($_POST);
        $result = $series->getResult();
        include "pages/series.php";
    }
}
