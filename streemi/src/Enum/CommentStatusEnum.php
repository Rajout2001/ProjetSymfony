<?php

declare(strict_types=1);    

namespace App\Enum;

enum CommentStatusEnum: string {
    case PENDING = 'pending';
    case REJECTED = 'rejected';
    case VALID = 'valid';
}