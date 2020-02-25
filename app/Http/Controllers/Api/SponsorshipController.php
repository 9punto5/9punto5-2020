<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SponsorshipController extends ApiController
{
    /**
     * Send new email.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Mail::to('hola@9punto5.cl')->send(
            new \App\Mail\SponsorshipMail($request->get('name'), $request->get('email'))
        );

        return $this->responseOK();
    }
}
