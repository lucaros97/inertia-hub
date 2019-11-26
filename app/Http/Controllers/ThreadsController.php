<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Thread;

class ThreadsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $threads = Thread::latest()->get();

        return Inertia::render('Threads/Index', compact('threads'));
    }

    public function create()
    {
        return Inertia::render('Threads/Create');
    }

    public function store(Request $request)
    {
        $thread = Thread::create([
            'user_id'   => auth()->id(),
            'title'     => request('title'),
            'body'      => request('body')
        ]);

        return Redirect::route('showthread', $thread->id);
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
