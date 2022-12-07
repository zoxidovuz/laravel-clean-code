<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\PostResource;
use Domain\Blogging\Models\Post;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;
use Spatie\QueryBuilder\QueryBuilder;

class IndexController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $posts = QueryBuilder::for(subject: Post::class)
            ->allowedIncludes(includes: [
                'user',
            ])->paginate(3);

        return response()->json(
            data: PostResource::collection(
                resource: $posts,
            ),
            status: Http::OK
        );
    }
}
