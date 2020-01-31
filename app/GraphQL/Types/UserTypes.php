<?php

namespace App\GraphQL\Types;

class UserTypes
{
    public function posts($root)
    {
        return $root->posts()->get();
    }
}
