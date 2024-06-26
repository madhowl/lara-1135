<?php

namespace App\Listeners;

use App\Events\PostShow;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncrementVisitCountInPost
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostShow $event): void
    {
        $event->post->increment('view_count');
    }
}
