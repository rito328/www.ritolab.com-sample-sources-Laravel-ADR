<?php
declare(strict_types=1);

namespace App\Http\Responders;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SampleJsonResponder
{
    /**
     * @param $data
     * @return JsonResponse
     */
    public function response($data): JsonResponse
    {
        if (!empty($data)) {
            $data = [
                'status'    => Response::HTTP_OK,
                'data'      => $data,
            ];
        } else {
            $data = [
                'status'    => Response::HTTP_NOT_FOUND,
                'data'      => [],
            ];
        }

        return response()->json($data);
    }
}
