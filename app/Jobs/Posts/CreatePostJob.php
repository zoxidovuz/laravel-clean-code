<?php

declare(strict_types=1);

namespace App\Jobs\Posts;

use Domain\Blogging\Actions\CreatePost;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreatePostJob implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;

    public function __construct(public PostValueObject $object)
    {
    }

    public function handle(): void
    {
        CreatePost::handle(object: $this->object);
    }
}
