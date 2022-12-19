<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use OpenApi\Attributes as OA;

class CombinedController extends Controller
{

//    #[OA\Get(
//        path: "/thing/{id}",
//        description: 'Get a thing',
//    )]
//    #[OA\Parameter(
//        name: 'id',
//        description: 'The ID of the thing',
//        in: 'path',
//        required: true
//    )]
//    #[OA\Response(
//        response: Response::HTTP_OK,
//        description: 'Details about the thing',
//    )]
//    #[OA\Response(
//        response: Response::HTTP_NOT_FOUND,
//        description: 'If the thing doesn\'t exist',
//    )]
    public function get(int $id)
    {

    }

//    #[OA\Post(
//        path: '/thing',
//        description: 'Create a new thing',
//    )]
//    #[OA\Response(
//        response: Response::HTTP_OK,
//        description: 'If the creation is successful',
//    )]
    public function post(Request $request)
    {

    }

//    #[OA\Patch(
//        path: "/thing/{id}",
//        description: 'Update a thing',
//    )]
//    #[OA\Parameter(
//        name: 'id',
//        description: 'The ID of the thing',
//        in: 'path',
//        required: true
//    )]
//    #[OA\Response(
//        response: Response::HTTP_OK,
//        description: 'Details about the thing after the changes',
//    )]
//    #[OA\Response(
//        response: Response::HTTP_NOT_FOUND,
//        description: 'If the thing doesn\'t exist',
//    )]
    public function patch(int $id, Request $request)
    {

    }

//    #[OA\Delete(
//        path: "/thing/{id}",
//        description: 'Delete a thing',
//    )]
//    #[OA\Response(
//        response: Response::HTTP_NO_CONTENT,
//        description: 'The thing has been deleted',
//    )]
    public function delete(int $id)
    {

    }
}
