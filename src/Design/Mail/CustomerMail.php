<?php

namespace Design\Mail;

use Design\Mailable\Mailable;
use Design\Mailable\CustomerMailable;

/**
 * Factory
 * 具象クリエーター （Concrete Creator） は、 異なる型のプロダクトを返すように、 基底クラスのファクトリー・メソッドを上書きします。
 * FactoryMethodをOverrideしてProductを返す
 */
class CustomerMail extends Mail
{
    /**
     * FactoryMethod
     * Productを返す
     * @return Mailable
     */
    public function createMailable(): Mailable
    {
        return new CustomerMailable();
    }
}
