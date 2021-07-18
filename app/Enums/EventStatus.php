<?php

namespace App\Enums;

use BenSampo\Enums\Enums;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EventStatus extends Enums
{
    const POST_PONE =0;
    const IS_HAPPENING =1;
    const UP_COMING = 2;
    const TAKE_PLACE = 3;
}
