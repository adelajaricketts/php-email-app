<?php
/* send the submitted data */

    $name="ModavCress Projects";
    $email=$_REQUEST['email'];
          
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Contact Us Form OR Get Early Notification Form!";
        $message="Message sent from ModavCress Projects Coming soon or Update Status using contact us form or get early notification form!";
        mail("support@modavcress.com", $subject, $message, $from);
        echo "<h3>" . "Your request as been sent. Thank you!" . "</h3>";
?>