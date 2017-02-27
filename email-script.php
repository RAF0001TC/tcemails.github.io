<?php
    $email=$_POST['email'];
    $subject = 'BIRTHDAY TEST';
    $message = 'Hi (blank),
    I would like to wish you a very happy birthday.
    Regards,
    TC';

    mail($email, $subject, $message);
?>
