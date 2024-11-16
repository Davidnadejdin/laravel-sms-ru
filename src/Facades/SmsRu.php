<?php

namespace DavidNadejdin\SmsRu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin  \DavidNadejdin\SmsRu\SmsRu
 */
class SmsRu extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'SmsRu';
    }

}
