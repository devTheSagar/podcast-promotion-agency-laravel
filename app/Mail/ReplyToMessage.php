<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyToMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $bodyContent;
    public $subjectLine;
    protected $files;

    public function __construct($to, $subject, $bodyContent, $files = [])
    {
        $this->to($to);
        $this->subjectLine = $subject;
        $this->bodyContent = $bodyContent;
        $this->files = $files; // Store UploadedFile objects here
    }

    public function build()
    {
        $email = $this->subject($this->subjectLine)
                      ->view('emails.message-reply')
                      ->with('bodyContent', $this->bodyContent);

        // Attach each file manually with proper method
        foreach ($this->files as $file) {
            $email->attach(
                $file->getRealPath(),
                [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]
            );
        }

        return $email;
    }
}
