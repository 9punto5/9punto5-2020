<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

/**
 * @OAS\Info(
 *     description="Documentation for Logikoss API",
 *     version="1.0.0",
 *     title="Logikoss API",
 *     termsOfService="http://www.google.cl",
 *     @OAS\Contact(
 *         email="felipe.pena@twotalltotems.com"
 *     ),
 *     @OAS\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */

/**
 * Class ApiController.
 */
class ApiController extends Controller
{
    /* Error codes */
    const RESERVATION_CARGO_VARIATION_EXCEEDED = 200001;
    const RESERVATION_CARGO_WONT_FIT = 200002;

    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * @var int
     */
    protected $errorCode = 0;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondNotFound($message = 'Not Found!')
    {
        return $this->setStatusCode(Response::HTTP_NOT_FOUND)
            ->respondWithError($message);
    }

    /**
     * @param string $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondInternalError($message = 'Internal Error!')
    {
        return $this->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)
            ->respondWithError($message);
    }

    /**
     * @param $data
     * @param array $headers
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respond($data, $headers = [])
    {
        return response($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message'     => $message,
                'code'        => $this->errorCode,
                'status_code' => $this->getStatusCode(),
            ],
        ]);
    }

    /**
     * @param $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function responseCreated($message)
    {
        return $this->setStatusCode(Response::HTTP_CREATED)
            ->respond([
                'message' => $message,
                'code'    => $this->errorCode,
            ]);
    }

    /**
     * @param string $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function respondFailedParametersValidation($message = 'Paramaters failed validation for a user.')
    {
        return $this->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->respondWithError($message);
    }

    /**
     * @param string $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function respondNotAcceptable($message = 'Resource not acceptable.')
    {
        return $this->setStatusCode(Response::HTTP_NOT_ACCEPTABLE)
            ->respondWithError($message);
    }

    /**
     * @param string $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function responseOK($message = 'success')
    {
        return $this->setStatusCode(Response::HTTP_OK)
            ->respond([
                'message' => $message,
                'code'    => $this->errorCode,
            ]);
    }

    /**
     * @param string $message
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondBadRequest($message = 'The request cannot be fulfilled due to bad syntax')
    {
        return $this->setStatusCode(Response::HTTP_BAD_REQUEST)
            ->respondWithError($message);
    }

    /**
     * @param $wines
     * @param $data
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    protected function respondWithPagination($wines, $data)
    {
        $data = array_merge($data, [
            'paginator' => [
                'total_count'  => $wines->total(),
                'total_pages'  => ceil($wines->total() / $wines->perPage()),
                'current_page' => $wines->currentPage(),
                'limit'        => $wines->perPage(),
            ],
        ]);

        return $this->respond($data);
    }

    protected function handleException($statusCode, $message = 'Internal Error!')
    {
        if ($statusCode == Response::HTTP_BAD_REQUEST) {
            return $this->respondBadRequest($message);
        }

        return $this->respondInternalError($message);
    }
}
