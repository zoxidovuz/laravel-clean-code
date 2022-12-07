<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Posts\UpdateRequest;
use Domain\Blogging\Factories\PostFactory;
use Domain\Blogging\Jobs\UpdatePostJob;
use Domain\Blogging\Models\Post;
use Illuminate\Http\Response;
use JustSteveKing\StatusCode\Http;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post): Response
    {
        UpdatePostJob::dispatch(
            object: PostFactory::create(
                attributes: $request->validated()
            ),
            post: $post
        );

        return response(
            content: null,
            status: Http::ACCEPTED
        );
    }
}
