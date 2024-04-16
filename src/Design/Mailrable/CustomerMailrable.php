<?php

namespace Design\Mailrable;

use Design\Mail\Mail;
use Design\Mail\CustomerMail;

/**
 * Factory
 * 具象クリエーター （Concrete Creator） は、 異なる型のプロダクトを返すように、 基底クラスのファクトリー・メソッドを上書きします。
 * FactoryMethodをOverrideしてProductを返す
 */
class CustomerMailrable extends Mailrable
{
    /**
     * FactoryMethod
     * Productを返す
     * @return Mail
     */
    public function createMail(): Mail
    {
        return new CustomerMail();
    }
}