<?php
namespace Facade;

class Mail {

    private $to;
    private $subject;
    private $headers;
    
    public function __construct($to, $subject, $headers)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->headers = $headers;
    }
	
    public function sendMessage($message)
    {
        mail($this->to, $this->subject, $message, $this->headers);
    }
}