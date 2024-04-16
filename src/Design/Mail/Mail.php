<?php

namespace Design\Mail;

interface Mail
{
    public function send(): bool;
    public function setMessage(string $message): void;
}
