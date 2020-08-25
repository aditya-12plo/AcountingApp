<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Validation\ValidationException;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use Notification;
use App\Models\Company;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function sendResetLinkEmail(Request $request){
        $this->validateLogin($request);
        $companyCheck   = Company::find($request->company_id);
        if($companyCheck){
            if($companyCheck->status == 'activated'){
                $broker = $this->getBroker();
                $broker = \Password::broker($broker);

                $user = $broker->getUser($this->getSendResetLinkEmailCredentials($request));
                if ($user) {
                    $token = $broker->createToken(
                        $user
                    );
                    $resetLink = route('password.reset', ['token' => $token]) . '?email=' . $request->get('email'). '&company_id=' . $request->get('company_id');
                    
                //    $response =  Notification::send($user, new ResetPasswordNotification($resetLink));
                    // if ($response->http_status_code !== 202) {
                    //     return $this->getSendResetLinkEmailFailureResponse(\Password::INVALID_USER);
                    // } else {
                    //     return $this->getSendResetLinkEmailSuccessResponse(\Password::RESET_LINK_SENT);
                    // }

                    
                   Notification::send($user, new ResetPasswordNotification($resetLink));
                   return $this->getSendResetLinkEmailSuccessResponse(\Password::RESET_LINK_SENT);
                   
                }else{
                    return $this->getSendResetLinkEmailFailureResponse(\Password::INVALID_USER);
                }
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
   
    protected function getSendResetLinkEmailSuccessResponse($response){
        return redirect()->back()->withSuccess(trans($response));
    }
   
    protected function getSendResetLinkEmailFailureResponse($response){
        return redirect()->back()->withErrors(['email' => trans($response)]);
    }

    protected function getBroker(){
        return property_exists($this, 'broker') ? $this->broker : null;
    }

    protected function validateLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|string',
            'company_id' => 'required|string',
        ]);
    }

    
    protected function getSendResetLinkEmailCredentials(Request $request){        
        return ['email' => $request->email, 'company_id' => $request->company_id, 'status' => 'activated'];
    }

}
