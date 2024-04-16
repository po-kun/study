<?php

namespace Design\Mail;

use Design\Mailable\Mailable;
use Design\Mailable\EmployeeMailable;

/**
 * Factory
 * 具象クリエーター （Concrete Creator） は、 異なる型のプロダクトを返すように、 基底クラスのファクトリー・メソッドを上書きします。
 * FactoryMethodをOverrideしてProductを返す
 */
class EmployeeMail extends Mail
{
    /**
     * FactoryMethod
     * Productを返す
     * @return Mailable
     */
    public function createMailable(): Mailable
    {
        return new EmployeeMailable();
    }
}
