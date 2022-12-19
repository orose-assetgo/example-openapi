<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use OpenApi\Attributes as OA;

class DeleteController extends Controller
{
    #[OA\Delete(
        path: "/thing/{id}",
        description: 'Delete a thing',
    )]
    #[OA\Response(
        response: Response::HTTP_NO_CONTENT,
        description: 'The thing has been deleted',
    )]
    public function __invoke(int $id)
    {
        // TODO: Implement __invoke() method.
    }
}
