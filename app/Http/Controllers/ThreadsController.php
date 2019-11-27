<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Channel;
use App\Thread;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ThreadsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Channel $channel)
    {
        if($channel->exists) {
            $threads = $channel->threads()->latest()->get(); 
        } else {
            $threads = Thread::latest()->get();
        }
        
        foreach ($threads as $thread) {
            $thread->channel = $thread->channel;
        }

        return Inertia::render('Threads/Index', [
            'threads' => $threads,
            'channels' => Channel::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Threads/Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required',
            'channel_id' => 'required|exists:channels,id'
        ]);

        $thread = Thread::create([
            'user_id'       => auth()->id(),
            'channel_id'    => request('channel_id'),
            'title'         => request('title'),
            'body'          => request('body')
        ]);

        return Redirect::route('showthread', $thread->id);
    }

    public function show($channelId, Thread $thread)
    {
        $replies = $thread->replies;
        $creator = $thread->creator;

        foreach ($replies as $key => $reply) {
            $reply->owner = $reply->owner;
        }

        $thread->channel = $thread->channel;

        return Inertia::render('Threads/Show', [
            'thread'    => $thread,
            'creator'   => $creator,
            'replies'   => $replies
        ]);
    }
}
