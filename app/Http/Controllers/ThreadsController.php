<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;
use App\Thread;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = Thread::latest()->get();

        return Inertia::render('Threads/Index', compact('threads'));
    }

    public function show(Thread $thread)
    {
        $replies = $thread->replies;
        $creator = $thread->creator;

        foreach ($replies as $key => $reply) {
            $reply->owner = $reply->owner;
        }

        return Inertia::render('Threads/Show', [
            'thread'    => $thread,
            'creator'   => $creator,
            'replies'   => $replies
        ]);
    }
}
