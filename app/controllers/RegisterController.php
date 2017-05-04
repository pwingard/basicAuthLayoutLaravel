<?php

class RegisterController extends BaseController {

	public function showRegister()
	{
		return View::make('pages.register');
	}

        public function doRegister()
        {
            // create the validation rules ------------------------
            $rules = array(
                'username'         => 'required|unique:users',                        // just a normal required validation
                'email'            => 'required|email|unique:users',     // required and must be unique in the ducks table
                'password'         => 'required',
                //'password_confirm' => 'required|same:password'           // required and has to match the password field
            );

            // do the validation ----------------------------------
            // validate against the inputs from our form
            $validator = Validator::make(Input::all(), $rules);

            // check if the validator failed -----------------------
            if ($validator->fails()) {

                // get the error messages from the validator
                $messages = $validator->messages();

                // redirect our user back to the form with the errors from the validator
                return Redirect::to('/register')
                    ->withErrors($validator);
            }
            
            $user = new User;
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            $theEmail = Input::get('email');
            return View::make('pages.thanks')->with('theEmail', $theEmail);
        }


}
