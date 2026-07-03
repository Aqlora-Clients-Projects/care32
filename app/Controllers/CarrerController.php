<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CarrerController extends BaseController
{
    public function carrer(): string
    {
        return view('carrer');
    }

    public function submitJobForm()
    {
        helper('form');

        $name            = $this->request->getPost('fullname');
        $email           = $this->request->getPost('email');
        $mobile          = $this->request->getPost('phone');
        $dob             = $this->request->getPost('dob');
        $gender          = $this->request->getPost('gender');
        $location        = $this->request->getPost('location');
        $qualification   = $this->request->getPost('qualification');
        $skills          = $this->request->getPost('skills');
        $current_job     = $this->request->getPost('current_job');
        $experience      = $this->request->getPost('experience');
        $expected_salary = $this->request->getPost('expected_salary');
        $job_type        = $this->request->getPost('job_type');
        $linkedin        = $this->request->getPost('linkedin');
        $altMobile       = $this->request->getPost('alternatemobile');
        $userMessage     = $this->request->getPost('message');

        $captchaOriginal = $this->request->getPost('ocaptcha');
        $captchaEntered  = $this->request->getPost('ecaptcha');

        // if (!$name || !$email || !$mobile || !$userMessage || !$captchaEntered) {
        //     return $this->response->setJSON([
        //         'status'  => 'error',
        //         'message' => 'All fields are required.'
        //     ]);
        // }

        $resumeFile = $this->request->getFile('resume');
        $resumePath = '';

        if ($resumeFile && $resumeFile->isValid() && !$resumeFile->hasMoved()) {
            $allowedExtensions = ['pdf', 'doc', 'docx'];

            if (!in_array($resumeFile->getExtension(), $allowedExtensions)) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Invalid resume format. Only PDF, DOC, DOCX allowed.'
                ]);
            }
            $uploadDir = FCPATH . 'uploads/resumes/';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
                $newName = time() . '_' . $resumeFile->getRandomName();
                $resumeFile->move($uploadDir, $newName);
                $resumePath = base_url('uploads/resumes/' . $newName);
            }


            $message = "
    <div style='font-family: Arial; padding:15px; background:#f4f4f4;'>
        <div style='max-width:600px; background:white; padding:20px; margin:auto; border-radius:6px;'>
            <h2 style='color:#333; text-align:center;'>Job Application Form Submission</h2>

            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mobile:</strong> $mobile</p>
            <p><strong>Alternate Mobile:</strong> $altMobile</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Location:</strong> $location</p>
            <p><strong>Qualification:</strong> $qualification</p>
            <p><strong>Skills:</strong> $skills</p>
            <p><strong>Current Job:</strong> $current_job</p>
            <p><strong>Experience:</strong> $experience</p>
            <p><strong>Expected Salary:</strong> $expected_salary</p>
            <p><strong>Job Type:</strong> $job_type</p>
            <p><strong>LinkedIn:</strong> $linkedin</p>
            <p><strong>Message:</strong><br>$userMessage</p>
            <p><strong>Resume File:</strong> <a href='$resumePath'>Download Resume</a></p>
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

                $mail->setFrom($email, 'Job Application - NSR School');
                $mail->addAddress(getenv('CONTACT_RECIPIENT') ?: 'info@care32.com');

                $mail->isHTML(true);
                $mail->Subject = 'New Job Application from Care32 Website';
                $mail->Body    = $message;

                if ($resumePath !== '') {
                    $mail->addAttachment(FCPATH . 'uploads/resumes/' . $newName);
                }

                $mail->send();

                return $this->response->setJSON([
                    'status'  => 'success',
                    'message' => 'Thank you! Your job application has been sent successfully.'
                ]);
            } catch (Exception $e) {

                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Mailer Error: ' . $mail->ErrorInfo
                ]);
            }
        }
    }
}
