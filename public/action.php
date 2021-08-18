<?php

            include("config.php");
            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $fullname = $_POST["fullname"];
            $reminderdate = $_POST["reminderdate"];
            $remindme = $_POST["remindme"];
            $occasion = $_POST["occasion"];
            $repeatdate = $_POST["repeatdate"];
            $repeattime = $_POST["repeattime"];


            $sql = "INSERT INTO register(fullname, reminder_date, remind_me, occasion, repeat_date, repeat_time) VALUES ('".$fullname."','".$reminderdate."','".$remindme."','".$occasion."','".$repeatdate."','".$repeattime."')";

            if (mysqli_query($conn, $sql)) {
               echo ("<script LANGUAGE='JavaScript'>window.alert('Registration Successful!');window.location.href='../app/Views/matchandmanage.php';</script>");
            //    echo ("<script LANGUAGE='JavaScript'>window.alert('Registration Successful!');</script>");
            //    header( "Refresh:0.1; url=mail.php?fname=$firstname&email=$emailid");
            } else {
            //    echo ("<script LANGUAGE='JavaScript'>window.location.href='index.html';</script>");
               echo ("<script LANGUAGE='JavaScript'>window.alert('Error!!!');</script>");
            }
            $conn->close();
?>
