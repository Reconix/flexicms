<?php

namespace Modules\Admin\Model;

use Flexi\Orm\Model;

/**
 * Class Language
 * @package Modules\Admin\Model
 */
class Language extends Model
{
    /**
     * @var string
     */
    protected static $table = 'language';

    /**
     * @return array
     */
    public function getLanguages()
    {
        return \Query::table(static::$table)
            ->select()
            ->all();
    }
}
