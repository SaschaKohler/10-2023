<?php

namespace App\Enums;

enum InsuranceTypeEnum:int
{
    case KEINE = 1;
    case TEILKASKO = 2;
    case VOLLKASKO = 3;
}
