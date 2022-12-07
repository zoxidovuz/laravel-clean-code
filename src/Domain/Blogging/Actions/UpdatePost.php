<?php

declare(strict_types=1);

namespace Domain\Blogging\Actions;

use Domain\Blogging\Models\Post;
use Domain\Blogging\ValueObjects\PostValueObject;

class UpdatePost
{
    public static function handle(PostValueObject $object, Post $post): bool
    {
        return $post->update($object->toArray());
    }

}
