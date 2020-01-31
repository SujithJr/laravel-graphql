<?php

namespace App\GraphQL\Queries;

class UserQuery
{
    public function all()
    {
        return \App\User::all();
    }

    public function findSingle($root, array $args)
    {
        return \App\User::findOrFail($args['id']);
    }
}
