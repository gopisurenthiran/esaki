<?php
 

 //print_r($_POST);

 //die();
 
     // PREPARE THE BODY OF THE MESSAGE
     
	    	
			$message = '<html><body>';
			
			$message .= '<div>';
			
			$message .= '<img src="https://ayatiworks.com/images/logo-img.png" alt="Logo"  style="margin: 0 auto;display: table;" />';
		
			$message .= '</div>';
			
			$message .= '<table rules="all" style="border-color: #666;width: 500px;margin: 0 auto;border: 1px solid #eee;" cellpadding="20"" cellpadding="20">';
	
			$message .= "<tr><td><strong>Name :</strong> </td><td>" . strip_tags($_POST['first_name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email_address']) . "</td></tr>";
			$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_POST['phoneno']) . "</td></tr>";
			$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['enquirytype']) . "</td></tr>";

			$message .= "<tr style='background: #eee;'><td><strong>Powered By </strong> </td><td>Ayatiworks </td></tr>";
            
            
            
	    	
	    	
	    
	       
			
			//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
			
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['email_address'])))) { 
                $cleanedFrom = trim(strip_tags($_POST['email_address'])); 
            } else { 
                return "The email address you entered was invalid. Please try again!"; 
            } 
			
			
            
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'lovetohear@ayatiworks.com';
		
			
			$subject = 'Enquiry Email';
			
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email_address']) . "\r\n";
			$headers .= 'Cc: ijaz@ayatiworks.com\r\n';
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
                
              
           echo "<script type='text/javascript'>alert('Your Details Submitted Successfully. Our team will you contact shortly ');</script>";
           echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://ayatiworks.com/">';


            } else {
                
               
                
              echo 'There was a problem sending the email.';
              echo '<META HTTP-EQUIV="Refresh" Content="0; URL=enquiry">';

            }
            
            
 
 
?>
