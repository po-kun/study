<?php

namespace Design\Mail;

use Design\Mailable\Mailable;

/**
 * Factory
 * 抽象クラス
 * クリエーター （Creator） クラスは、 新しいプロダクトのオブジェクトを返すファクトリー・メソッドを宣言します。 
 */
abstract class Mail
{
    /**
     * + anOperation に相当する
     * プロダクトに関連するビジネス・ロジック 今回でいえばメールを送信すること
     * @param string $message
     * @return boolean
     */
    public function send(string $message): bool
    {
        $mail = $this->createMailable();
        $mail->setMessage($message);
        $mail->send();
        return true;
    }

    /**
     * メールインスタンスを返すだけでもいい
     * 使いようによって変える
     */
    public function create(): Mailable
    {
        return $this->createMailable();
    }

    /**
     * Facotry Method
     * このメソッドの戻り値の型がプロダクトのインターフェースと一致していることが要点
     * 今回は Mailable インターフェース (Product) を返すように実装する
     * @return Mailable
     */
    abstract public function createMailable(): Mailable;
}
