<?php

namespace App\Http\Controllers\cms;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnquiryController extends Controller
{
    function index()
    {
        $enquiries   =  Enquiry::orderBy("created_at",'desc')->get();
        return view('cms.enquiries',compact('enquiries'));
    }
}
