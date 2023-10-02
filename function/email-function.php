<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function sendEmail($recipientEmail) {
    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $email_subject = $_POST['email_subject'];
        $message = $_POST['message'];

        $mail = new PHPMailer();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'dyrroth69@gmail.com'; // Replace with your SMTP username
        $mail->Password = 'zmtawyrfmnwzvcfn'; // Replace with your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom($email, $full_name);
        $mail->addAddress($recipientEmail);

        // Email content
        $mail->isHTML(false);
        $mail->Subject = $email_subject;
        $mail->Body = "Full Name: $full_name\n" .
                      "Email: $email\n" .
                      "Contact Number: $contact_number\n\n" .
                      "Message:\n$message";

        if ($mail->send()) {
            // Success message using SweetAlert
            echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Success",
                      text: "Your message has been sent successfully.",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "index.php"; // Redirect to the default page
                        }
                    });
                  </script>';
        } else {
            // Error message using SweetAlert
            echo '<script>
                    Swal.fire({
                      icon: "error",
                      title: "Error",
                      text: "Sorry, there was an error sending your message: ' . $mail->ErrorInfo . '",
                    });
                  </script>';
        }
    }
}
?>
