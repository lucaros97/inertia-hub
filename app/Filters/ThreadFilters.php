<?php

namespace App\Filters;

use App\User;
use Illuminate\Http\Request;

class ThreadFilters extends Filters
{

    protected $filters = ['by', 'popular'];

    // Filter the query by a username
    public function by($username)
    {
        $user = User::where('name', $username)->firstOrFail();

        return $this->builder->where('user_id', $user->id);
    }

    // Filter the query by the popularity
    protected function popular()
    {
        // Clear the order query
        $this->builder->getQuery()->orders = [];
        
        return $this->builder->orderBy('replies_count', 'desc');
    }
}