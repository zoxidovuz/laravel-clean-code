<?php

namespace Domain\Shared\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait  HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(
            static fn(Model $model) => $model->slug = Str::slug($model->title)
        );
    }

}
