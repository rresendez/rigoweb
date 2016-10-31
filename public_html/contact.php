<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim( $_POST["email"]);
    $message =  trim($_POST["message"]);
   
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

$mail  = new PHPMailer();

if (!$mail->ValidateAddress($email)){

    echo"Tha aint a valid address FOOL !";
    exit;

}

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message;



$mail->SetFrom($email,$name);



$address = "cerveza_gratis@hotmail.com";
$mail->AddAddress($address, "Rigo");

$mail->Subject    = "Rigo Contact Form Submission |" . $name;



$mail->MsgHTML($email_body);



if(!$mail->Send()) {
  echo "There was a problem sending the email " . $mail->ErrorInfo;
  exit;
} 





    header("Location:http://rigoresendez.com/thanks.php");
    exit;
}
?>

<!DOCTYPE html>



<html>
 <head>
   <meta charset="utf-8">
   <title>Rigo|Producer</title>
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
            <li><a href="about.html" >About</a></li>
            <li><a href="contact.php" class="selected">Contact </a></li> 
           </ul>
       </nav>
    </header>
      <div id="rapper">
        <section id="primary">
          <h3> General Information</h3>
          <p>Can contact me, for production, programming, web design and software development services.</p>
          <p>Please use the telephone contact only for urgent questions, other way facebook or email is preferable. </p>
          <p>Me pueden contactar , para servicios de produccion, programacion ,diseno web y desarollo de software. </p>
          <p>Porfavor , utilizar el contacto telefonico unicamente para preguntas urgentes, de otro modo facebook o email es preferible.</p>
        </section>
        </br>
           
        <div id="secondary"  >
<h3>I&rsquo;d love to hear from you! Complete the form to send me an email.</h3>

                <form method="post" action="contact.php" style="text-align: center; font-size: 1.5em;">

                    <table   align="center" style="margin: 0px auto; border:1px;" id="secondary" >
                        <tr >
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td >
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
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


      </div>
    </br>
        </br>
            </br>


        <section id="secondary" >
        <h3>Contact Details</h3>
          <ul class="contact-info" >
          <li class="phone"> <a href="tel:956-800-3094">956-800-3094</a></li>
          <li class="mail"><a href="mailto:rresendez@rigoresendez.com"> rresendez@rigoresendez.com</a></li>
          <li class="twitter"> <a href="https://twitter.com/rresendez25">@rresendez25</a> </li>
        </ul>
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
