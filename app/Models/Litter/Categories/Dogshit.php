<?php

namespace App\Models\Litter\Categories;

use App\Models\Litter\LitterCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dogshit extends LitterCategory
{
    use HasFactory;

    protected $table = 'dogshit';

    public static function types(): array
    {
        return [
            'poo',
            'poo_in_bag',
        ];
    }
}
