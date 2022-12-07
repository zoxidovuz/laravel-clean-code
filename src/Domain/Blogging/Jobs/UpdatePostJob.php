<?php

declare(strict_types=1);

namespace Domain\Blogging\Jobs;

use Domain\Blogging\Actions\UpdatePost;
use Domain\Blogging\Models\Post;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdatePostJob implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;

    public function __construct(
        public PostValueObject $object,
        public Post $post
    ) {
    }

    public function handle(): void
    {
        UpdatePost::handle(object: $this->object, post: $this->post);
    }
}
