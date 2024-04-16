<?php

namespace Design\Mailable;

/**
 * プロダクト （Product） は、 クリエーターと
 * そのサブクラスによって生成されるすべてのオブジェクトに共通なインターフェースを宣言します。
 */
interface Mailable
{
    public function send(): bool;
    public function setMessage(string $message): void;
}
