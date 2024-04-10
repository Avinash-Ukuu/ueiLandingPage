<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    function insert(Request $request)
    {
        $model= new Enquiry();
        $inputs=$request->all();
        if($inputs['honeyspot']==null){

        $model->name=$inputs['name'];
        $model->email=$inputs['email'];
        $model->number=$inputs['number'];
        // $model->company=$inputs['company'];
        $model->message=$inputs['message'];
        // $model->contact_consent=($inputs['contactConsent']=='on'? 1 :0);
        $model->save();
        // event(new EnquiryEvent($model));
        return 'true';
        }
        return 'failed';
    }
}
