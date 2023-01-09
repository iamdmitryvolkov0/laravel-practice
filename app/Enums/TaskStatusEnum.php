<?php

namespace App\Enums;

enum TaskStatusEnum: int
{
    case STATUS_TODO = 0;
    case STATUS_IN_PROGRESS = 1;
    case STATUS_DONE= 2;
}
