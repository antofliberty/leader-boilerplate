<?php

namespace App\models;

use Leader\Core\Model;

class ExampleModel extends Model
{
    public function __construct(
        public ?string $email,
        public ?string $password,
    )
    {
    }

    public static function getKeys(): array
    {
        return array_keys(get_class_vars(__CLASS__));
    }
}