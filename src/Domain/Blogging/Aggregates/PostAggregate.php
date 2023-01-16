<?php

declare(strict_types=1);

namespace Domain\Blogging\Aggregates;

use Domain\Blogging\ValueObjects\PostValueObject;
use Domain\Blogging\Events\PostWasCreated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class PostAggregate extends AggregateRoot
{

    public function createPost(PostValueObject $object, int $userID): self
    {
        $this->recordThat(
            domainEvent: new PostWasCreated(
                object: $object,
                userID: $userID
            )
        );
        return $this;
    }

}
