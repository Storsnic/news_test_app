<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Utils;

/**
 * This class is used to convert PHP date format to moment.js format.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class MomentFormatConverter
{
    /**
     *
     * @var array
     */
    private static $formatConvertRules = [
        // year
        'yyyy' => 'YYYY', 'yy' => 'YY', 'y' => 'YYYY',
        // day
        'dd' => 'DD', 'd' => 'D',
        // day of week
        'EE' => 'ddd', 'EEEEEE' => 'dd',
        // timezone
        'ZZZZZ' => 'Z', 'ZZZ' => 'ZZ',
        // letter 'T'
        '\'T\'' => 'T',
    ];

    /**
     *
     * @param string $format PHP Date format
     *
     * @return string
     */
    public function convert($format)
    {
        return strtr($format, self::$formatConvertRules);
    }
}
