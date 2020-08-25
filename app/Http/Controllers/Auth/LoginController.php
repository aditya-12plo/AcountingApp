<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

use App\Models\Company;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return redirect()->route('loginFirst');
    }

    protected function validateLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
            'company_id' => 'required|string',
        ]);
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $companyCheck   = Company::find($request->company_id);
        if($companyCheck){
            if($companyCheck->status == 'activated'){
                if ($this->attemptLogin($request)) {
                    return $this->sendLoginResponse($request);
                }

                                
                $this->incrementLoginAttempts($request);

                return $this->sendFailedLoginResponse($request);
            }else{
                throw ValidationException::withMessages([
                    'company_id' => [trans('addtional.companyDeactivated')],
                ]);
            }
        }else{
            throw ValidationException::withMessages([
                'company_id' => [trans('addtional.companyFailed')],
            ]);
        }
    } 

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request)
        );
    }

    protected function credentials(Request $request){        
        return ['email' => $request->email, 'password' => $request->password, 'company_id' => $request->company_id, 'status' => 'activated'];
    }

}
