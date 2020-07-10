<?php

    if (isset($_POST['submit'])) 
    {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        //$subject = $_POST['subject'];

        $mailTo = "davidnguyen4898@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;

        mail($mailTo, $name, $txt, $headers);
    }

?> 