<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use OpenApi\Attributes as OA;

class PostController extends Controller
{
    #[OA\Post(
        path: '/thing',
        description: 'Create a new thing',
    )]
    #[OA\Response(
        response: Response::HTTP_OK,
        description: 'If the creation is successful',
    )]
    public function __invoke(Request $request)
    {

    }
}
