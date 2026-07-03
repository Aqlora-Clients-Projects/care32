<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class contact extends BaseController
{


    public function contact(): string
    {
        return view('contact');
    }
    public function submit()
    {
        helper('form');


        $name             = $this->request->getPost('name');
        $email            = $this->request->getPost('email');
        $mobile           = $this->request->getPost('mobile');
        $altMobile        = $this->request->getPost('alternatemobile');
        $userMessage      = $this->request->getPost('message');
        $captchaOriginal  = $this->request->getPost('ocaptcha');
        $captchaEntered   = $this->request->getPost('ecaptcha');
        // if (!$name || !$email || !$mobile || !$userMessage || !$captchaEntered) {
        //     return $this->response->setJSON([
        //         'status' => 'error',
        //         'message' => 'All fields are required.'
        //     ]);
        // }

        // 📌 Validate Captcha
        // if ($captchaOriginal !== $captchaEntered) {
        //     return $this->response->setJSON([
        //         'status' => 'error',
        //         'message' => 'Invalid captcha'
        //     ]);
        // }

        // 📌 Email Message Body
        $message = "
<div style='font-family: Arial; padding:15px; background:#f4f4f4;'>
    <div style='max-width:600px; background:white; padding:20px; margin:auto; border-radius:6px;'>
        
        <h2 style='color:#333; text-align:center;'>New Contact Form Submission</h2>

        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mobile:</strong> $mobile</p>
        <p><strong>Alternate Mobile:</strong> $altMobile</p>
        <p><strong>Message:</strong><br>$userMessage</p>

        <p style='margin-top:20px; font-size:12px; color:#666;'>
            This message was sent from the NSR Contact Page.
        </p>

    </div>
</div>";

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = getenv('SMTP_USERNAME') ?: '';
            $mail->Password   = getenv('SMTP_PASSWORD') ?: '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom($email, 'Contact Form - Care32 Dental Clinic');
            // $mail->addAddress('nsrschools@gmail.com');
            $mail->addAddress(getenv('CONTACT_RECIPIENT') ?: 'info@care32.com');

            // CC
            // $mail->addCC('kakatiyasolutions@gmail.com');
            // $mail->addCC('kas202111d@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Message from Care32 Website';
            $mail->Body    = $message;

            $mail->send();
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Thank you! Your message has been sent successfully.'
            ]);
        } catch (Exception $e) {

            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Mailer Error: ' . $mail->ErrorInfo
            ]);
        }
    }
}
