<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Outl1ne\NovaPageManager\Template;

class :className extends Template
{
    public static $type = ':type';
    public static $name = ':name';

    public function fields(Request $request): array
    {
        return [];
    }
}
