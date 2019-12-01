<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

use App\Filters\ThreadFilters;
use App\Channel;
use App\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Channel $channel, ThreadFilters $filters)
    {
        $threads = $this->getThreads($channel, $filters);

        if(request()->wantsJson()) {
            return $threads;
        }

        return Inertia::render('Threads/Index', [
            'threads' => $threads,
            'channels' => Channel::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Threads/Create', [
            'channels' => Channel::all()
        ]);
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

        $channel = Channel::find(request('channel_id'));

        // dd($channel->slug);
        return Redirect::route('showthread', [$channel->slug, $thread->id]);
    }

    public function show($channelId, Thread $thread)
    {
        $thread = $thread->withCount('replies')
            ->find($thread->id)
            ->load('replies')
            ->load('creator')
            ->load('channel');

        foreach ($thread->replies as $key => $reply) {
            $reply->owner = $reply->owner;
        }

        return Inertia::render('Threads/Show', [
            'thread'    => $thread
        ]);
    }

    protected function getThreads(Channel $channel, ThreadFilters $filters)
    {
        $threads = Thread::latest()->filter($filters);

        if ($channel->exists) {
            $threads->where('channel_id', $channel->id);
        }

        return $threads->withCount('replies')
            ->get()
            ->load('replies')
            ->load('creator')
            ->load('channel');
    }
}
