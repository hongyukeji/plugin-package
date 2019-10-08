<?php

namespace Hongyukeji\Package;

/**
 * Class to pass instead of primitive types
 *
 * @author Hongyukeji <support@hongyuvip.com>
 * @package Hongyukeji\Package
 * @license http://www.apache.org/licenses/LICENSE-2.0.html Apache License 2.0
 */
class Void
{

    /**
     * Use to set default parameters to void
     *
     * @return  \Hongyukeji\Plugin\Void
     */
    public static function forge()
    {
        return new static();
    }
}
