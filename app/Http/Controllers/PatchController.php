<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use OpenApi\Attributes as OA;

class PatchController extends Controller
{

    #[OA\Patch(
        path: "/thing/{id}",
        description: 'Update a thing',
    )]
    #[OA\Parameter(
        name: 'id',
        description: 'The ID of the thing',
        in: 'path',
        required: true
    )]
    #[OA\Response(
        response: Response::HTTP_OK,
        description: 'Details about the thing after the changes',
    )]
    #[OA\Response(
        response: Response::HTTP_NOT_FOUND,
        description: 'If the thing doesn\'t exist',
    )]
    public function patch(int $id, Request $request)
    {

    }
}
