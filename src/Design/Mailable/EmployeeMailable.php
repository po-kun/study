<?php

namespace Design\Mailable;

/**
 * 具象プロダクト （Concrete Product） は、 プロダクトのインターフェースの種々の異なる実装です。
 */
class EmployeeMailable implements Mailable
{
    private string $body;
    private string $to;

    public function __construct()
    {
        $this->to = 'employee@example.com';
    }

    public function send(): bool
    {
        print('<br/>');
        print('従業員用のメールを送信します');
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
