<?php

class LoginController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		return View::make('login');
	}

  public function doLogin() {
    $rules = array(
      'email' => 'required|email', 
      'password' => 'required|min:10'
    );

    $validator = Validator::make(Input::all(), $rules);

    if($validator->fails()) {

      return Redirect::to('login')
        ->withErrors($validator)
        ->withInput(Input::except('password'));

    } else {

      $userdata = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
      );

      if(Auth::attempt($userdata)) {
        return Redirect::intended('/');
      } else {
        return Redirect::to('login')
          ->withInput(Input::except('password'))
          ->with('message', 'Invalid email and/or password.');
      }
    }

  }

  public function logout() {
    Auth::logout();

    return Redirect::to('login')
      ->with('message', 'You have logged out.');
  }

  public function signup() {
    return View::make('signup');
  }

  public function register() {
    $rules = array(
      'email' => 'required|email', 
      'password' => 'required|confirmed|min:10'
    );

    $validator = Validator::make(Input::all(), $rules);

    if($validator->fails()) {

      return Redirect::to('signup')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
        
    } else {

      $email = Input::get('email');
      $hashedPassword = Hash::make(Input::get('password'));

      $user = new User;
      $user->email = $email;
      $user->password = $hashedPassword;
      $user->save();

      Auth::login($user);

      return Redirect::intended('/item');

    }

    
  }

}