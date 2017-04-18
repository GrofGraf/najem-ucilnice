<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function enquire(Request $request){
      $valid=Validator::make($request->all(), [
        'name'    => 'required',
        'email'   => 'required|email',
        'type'    => 'required',
        'message' => 'required'
      ]);
      if(!$valid->passes()){
        return $valid->errors()->all();
      }
      Mail::send('emails.enquire', ['content'=>$request->message], function($m) use ($request){
        $m->to(env('ADMIN_EMAIL'), env('ADMIN_NAME'))
          ->replyTo($request->email, $request->name)
          ->subject($request->type);
      });
      return;
    }
}
