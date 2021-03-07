<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @group  Client
 *
 * APIs for managing clients
 */
class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Customer Experience OpenApi",
     *      description="Api for customer experience evaluation.",
     *      @OA\Contact(
     *          email="william.melise@gmail.com"
     *      ),
     *      @OA\License(
     *          name="MIT License",
     *          url="https://github.com/williamCarvalho/lumen-customer-experience/blob/main/LICENSE"
     *      )
     * )
     *
     * @OA\Server(
     *      url=SWAGGER_LUME_CONST_HOST,
     *      description="Customer Experience API"
     * )

     *
     * @OA\Tag(
     *     name="Customer Experience",
     *     description="API Endpoints of Customer Experience"
     * )
     */
}
