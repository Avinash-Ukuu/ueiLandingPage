<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
// use App\Mail\EnquiryMail;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EnquiryRequest;

class EnquiryController extends Controller
{
    function insert(EnquiryRequest $request)
    {
        $model                          =       new Enquiry();
        $inputs                         =       $request->all();
        if($inputs['honeyspot'] ==  null)
        {
            $model->name                =       $inputs['name'];
            $model->email               =       $inputs['email'];
            $model->number              =       $inputs['number'];
            $model->message             =       $inputs['message'];
            $model->contact_consent     =       ($inputs['contactConsent']=='on'? 1 :0);
            $model->save();
            // Mail::to('avinash.ukuu@gmail.com')->send(new EnquiryMail($model));
            return 'true';
        }
        return 'failed';
    }
}
