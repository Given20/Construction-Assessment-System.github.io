<?php

session_start();
include "db_conn.php";
error_reporting(0);


if ($_SERVER["REQUEST_METHOD"] == "POST")

{
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "select * from office where username= '".$name."' AND
           password='".$pass."'  ";

           $result = mysqli_query($conn, $sql);

           $row=mysqli_fetch_array($result);

           if($row["usertype"]=="user")
           {

               $_SESSION['username'] = $name;

               $_SESSION['usertype']="user";
               header("location:dashboard.php");
           }
           elseif($row["usertype"]=="admin")
           {
            
            $_SESSION['username'] = $name;
            $_SESSION['usertype']="admin";
            header("location:admin_dashboard.php");
           }

           else{
            session_start();
           $message = "username or password or domain key do not match";
           $_SESSION['loginMessage']=$message;

           header("location:login.php");
           }
   
}
