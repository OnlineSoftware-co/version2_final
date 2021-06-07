<?php
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $name=$_POST['name'];
    $message=$_POST['message'];

    $subject = "Message sent to ABC info media pvt ltd";
    $body="Your message is successfully sent and Our Team will respond shortly...";


    $enquiry_mail = "abcteam62021@gmail.com";
    $enquiry_subject = "Enquiry";
    $enquiry_body = " Name :". $name ."\n Email : ".$email." \n Message :". $message;

    /*storing data to DB

    $connection=mysqli_connect('localhost','root','','contact1');

    $query = "INSERT INTO enquiry(email,name,message) VALUES('$email','$name','$body')";

    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die("submit failed").mysqli_error();
    }

    */

    mail($email, $subject, $body);

    if (mail($enquiry_mail , $enquiry_subject , $enquiry_body)){
        $rs = true;
    } else {
        $rs = false;

    }

    echo json_encode($rs);
}
?>
