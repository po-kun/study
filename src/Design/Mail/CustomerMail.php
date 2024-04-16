<?php

namespace Design\Mail;

class CustomerMail implements Mail
{
    private string $body;
    private string $to;

    public function __construct()
    {
        $this->to = 'customer@example.com';
    }

    public function send(): bool
    {
        print('<br/>');
        print('顧客用のメールを送信します');
        print('<br/>');
        print('宛先は' . $this->to . 'です');
        print('<br/>');
        print('body : ' . $this->body);
        print('<br/>');
        return true;
    }

    public function setMessage(string $message): void
    {
        $this->body = $message;
    }
}
