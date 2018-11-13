<?php
if((isset($_POST['name']))&&(isset($_POST['email'])&&$_POST['email']!="")){ 
  $to = 'mohsinrazzaq35@gmail.com';
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = "
                <html>                
                <body>
                  <h2> Subject: <u>'.$_POST['subject'].'</u></h2>
                  <p> from </p>
                  <h2> <u>'.$_POST['name'].'</u></h2>
                  <h1>Message:</h1>
                  <p>'.$_POST['message'].'</p>
                </body>
                </html>";
  // $message = '
  //       <html>            
  //           <body>
  //               <p><b>Name:</b> '.$_POST['name'].'</p>
  //               <p><b>Message:</b> '.$_POST['message'].'</p>                        
  //           </body>
  //       </html>'; 
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: "; 
mail($to, $subject, $message, $headers);

  echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}

