<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Posts\StoreRequest;
use Domain\Blogging\Factories\PostFactory;
use Domain\Blogging\Jobs\CreatePostJob;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        CreatePostJob::dispatch(
            object: PostFactory::create(
                attributes: $request->validated()
            )
        );
        return redirect()->route('home');
    }
}
