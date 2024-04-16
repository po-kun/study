<?php

namespace Design\Mailrable;

use Design\Mail\Mail;

/**
 * Factory
 * 抽象クラス
 * クリエーター （Creator） クラスは、 新しいプロダクトのオブジェクトを返すファクトリー・メソッドを宣言します。 
 */
abstract class Mailrable
{
    /**
     * + anOperation に相当する
     * プロダクトに関連するビジネス・ロジック 今回でいえばメールを送信すること
     * @param string $message
     * @return boolean
     */
    public function send(string $message): bool
    {
        $mail = $this->createMail();
        $mail->setMessage($message);
        $mail->send();
        return true;
    }

    /**
     * メールインスタンスを返すだけでもいい
     * 使いようによって変える
     */
    public function create(): Mail
    {
        return $this->createMail();
    }

    /**
     * Facotry Method
     * このメソッドの戻り値の型がプロダクトのインターフェースと一致していることが要点
     * 今回は Mail インターフェースを返すように実装する
     * @return Mail
     */
    abstract public function createMail(): Mail;
}
