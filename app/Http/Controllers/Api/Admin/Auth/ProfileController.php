<?php

namespace App\Http\Controllers\Api\Admin\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/profile",
     *      operationId="getUserl",
     *      tags={"Admin"},
     *      summary="Get list of projects",
     *      security={{"bearer":{}}},
     *      description="Returns list of projects",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     * 
     */
    public function show()
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'User profile data !',
                'data' => Auth::guard()->user()
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => false,
                'message' => $exception->getMessage(),
                'data' => []
            ], 200);
        }
    }
}
