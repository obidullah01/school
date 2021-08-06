<?php

function insertTeacher($name, $email, $mobile)
{
        $conn=new mysqli("localhost","root","","schooldb");
        $sql=$conn->prepare("INSERT INTO teachers(name, email, phone) VALUES (?,?,?)");


        $sql -> bind_param("sss", $name, $email, $mobile);

        $response = $sql ->execute();
        if($response == true)
        {
            return "Added user successfully!";
        }
        else
        {
            return "Teacher addition failed!";
        }
    }

function getAllTeacher() {
    $conn=new mysqli("localhost","root","","schooldb");
    $sql=$conn->prepare("SELECT * FROM teachers");

    $response = $sql ->execute();
    return $response;
}
?>