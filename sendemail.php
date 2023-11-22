<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("meleisa246@yahoo.com", "Meleisa Pinnock");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>