<?php

declare(strict_types=1);

namespace Domain\Blogging\Jobs;

use Domain\Blogging\Actions\CreatePost;
use Domain\Blogging\Aggregates\PostAggregate;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

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
        PostAggregate::retrieve(uuid: Str::uuid()->toString())
            ->createPost(
                object: $this->object,
                userID: 1,
            )->persist();
    }
}
