<?php

namespace App\Enums;

enum PostState: string{
    case Draft = 'draft';
    case Published = 'published';
    case Archived = 'archived';

}
