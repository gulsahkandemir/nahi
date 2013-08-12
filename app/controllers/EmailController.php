<?php

use \Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class EmailController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @return Email
     * @throws BadRequestHttpException
     */
    public function store()
	{
        // Prepare $data array using user input
        $data = array(
            'email' => Input::get('email'),
            'timezone_offset' => Input::get('timezoneOffset'),
            'locale' => Locale::acceptFromHttp(Request::server('HTTP_ACCEPT_LANGUAGE'))
        );

        // Set validation $rules for $data
        $rules = array(
            'email'     => 'required|between:3,64|email|unique:emails',
            'timezone_offset'  =>'required|integer|between:-720,840',
            'locale'    => 'required|min:2'
        );

        // Return 400 Bad Request if $data is not valid
        $validator = Validator::make($data, $rules);
        if($validator->fails()) {
            throw new BadRequestHttpException($validator->messages());
        }

        // Else create an $email and save it.
        $email = new Email($data);
        $email->save();

        // Return created $email object.
        return $email;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$email = Email::find($id);

        return $email;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}