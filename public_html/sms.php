<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim( $_POST["email"]);
    $message =  trim($_POST["message"]);
    $carrier = trim($_POST["Carrier"]);
   
 if ($name == "" OR $email == "" OR $message == ""){
    echo "You must specify a value for name, email and message.";
    exit;
 }

foreach( $_POST as $value ){
    if ( stripos($value, 'Content-Type:') !== FALSE )
    {
        
        echo "How stupid you think I am ?.";
        exit;
       } 
}

if ($_POST["address"] != "")
{
    echo " F U ";
    exit;
}
require_once("inc/phpmailer/class.phpmailer.php");


//PHPMailer Object
$mail = new PHPMailer();

//From email address and name
$mail->From = $name;
$mail->FromName = "";

$address = $email.$carrier ;
//To address and name
$mail->addAddress($address);


//Address to which recipient will reply
$mail->addReplyTo("$name , sender");



//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "From rigoresendez.com/sms.php ";
$mail->Body = $message;
$mail->AltBody = $message;

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 


/*$mail  = new PHPMailer();



    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Number: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message;



$mail->SetFrom($email,$name);



$address = $email.$carrier ;
$mail->AddAddress($address, "Rigo");

$mail->Subject    = "2 send an sms visit www.rigoresendez.com";



$mail->MsgHTML($email_body);



if(!$mail->Send()) {
  echo "There was a problem sending the email " . $mail->ErrorInfo;
  exit;
} */





    header("Location:http://rigoresendez.com/smst.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
   <title>Rigo|Producer </title>
<link rel="stylesheet" href="css/normalize.css">  
<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/responsive.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
     <header>
       <a href="index.html" id="logo">
       <h1>Rigo Resendez </h1>
        <h2>Developer Producer</h2> 
         </a>
         <nav>
          <ul>
            <li><a href="index.html" >Portfolio </a></li>
            <li><a href="about.html" class="selected">About</a></li>
            <li><a href="contact.php"> Contact</a></li>
           </ul>
       </nav>
    </header>
      <div id="rapper">
        <section style="text-align:center;">



<h3 style="margin: -10px; font-size: 3em; " align="center">  Send a free sms </h3>

 <form method="post" action="sms.php" style="text-align: center; font-size: 1.5em;">


                    <table   align="center" style=" border:1px;" id="secondary" >

                        <tr >
                            <th>
                                <label for="name">Your email </label>
                            </th>
                            <td >
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Number</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
 <br/>
<br/>
                       
                        <tr align="left">
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr> 
                         <tr>
                            <th>
                                <label for="Carrier">Carrier</label>
                            </th>
                            <td align="left">
                                <select name="Carrier" id="Carrier">
                                   <option value="@message.alltel.com">Alltel </option>
                                   <option value="@txt.att.net">AT&amp;T </option>
                                   <option value="@tmomail.net">T-mobile </option>
                                   <option value="@myboostmobile.com">Boost Mobile </option>
                                   <option value="@email.uscc.net">US Cellular </option>
                                   <option value="@itelcel.com">Telcel </option>
                                  <option value="@messaging.sprintpcs.com">Sprint </option>
                                   <option value="@vtext.com">Verizon </option>
                                   <option value="@vmobl.com">Virgin Mobile </option>                                   

                                </select>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th>
                                    <label for="address">Address</label>
                                </th>
                                <td>
                                    <input type="text" name="address" id="address">
                                    <p> Humans don't fill this part </p>
                                </td>   
                         </tr>                       
                    </table>
                  </br>

                    <input type="submit" value="Send">

                </form>



                 </section>
      </div>
        <footer>
      <p>&copy; 2014 Rigoberto Resendez</p>
      <a href="https://www.facebook.com/rigoberto.resesndez">
          <img src="Img/facebook-wrap.png"alt"" 
            class= "social-icon">
          </a>
          <a href="https://twitter.com/rresendez25">
          <img src="Img/twitter-wrap.png"alt""
            class= "social-icon">
          </a>
    </footer>   
  </body>
 </html>
