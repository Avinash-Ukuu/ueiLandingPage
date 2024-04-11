<?php

namespace App\Http\Controllers\cms;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['enquiries']                  =   Enquiry::count();

        return view('cms.dashboard',$data);
    }
}
