<?php

declare(strict_types=1);

namespace Domain\Blogging\Jobs;

use Domain\Blogging\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeletePostJob implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;

    public function __construct(
        public Post $post
    ) {
    }

    public function handle(): void
    {
        $this->post->delete();
    }
}
