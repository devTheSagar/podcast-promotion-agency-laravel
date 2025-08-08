<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectLine;
    public $messageContent;
    public $attachments;

    public function __construct($subjectLine, $messageContent, $attachments = [])
    {
        $this->subjectLine = $subjectLine;
        $this->messageContent = $messageContent;

        $this->attachments = [];
        foreach ($attachments as $file) {
            $this->attachments[] = [
                'file' => $file->getRealPath(),
                'options' => [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ],
            ];
        }
    }

    public function build()
    {
        $email = $this->subject($this->subjectLine)
                    ->view('emails.custom')
                    ->with(['messageContent' => $this->messageContent]);

        // Attach files if any
        foreach ($this->attachments as $attachment) {
            $email->attach($attachment['file'], $attachment['options']);
        }

        return $email;
    }
}
