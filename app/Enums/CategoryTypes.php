<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum CategoryTypes:string
{
    use EnumToArray;

    case VIDEO = 'video';
    case IMAGE = 'image';
    case PSD = 'psd';
    case ACCESSORIES = 'accessories';
}
