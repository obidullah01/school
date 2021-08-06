<?php
    include('../model/teacherModel.php');
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        echo getAllTeacher();
    }
?>