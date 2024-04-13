<?php

namespace App\Http\Controllers\cms;

use Carbon\Carbon;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EnquiryController extends Controller
{
    function index(Request $request)
    {
        if ($request->ajax()) {
            $data       =       Enquiry::select('*');

            if ($request->order == null) {
                $data->orderBy('enquiries.created_at', 'desc');
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('date', function ($data) {
                        return  Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d/M/Y');
                })
                ->filterColumn('date', function($query, $keyword) {
                    $sql = "enquiries.created_at LIKE ?";
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->rawColumns(['date'])
                ->make(true);
        }
        return view("cms.enquiries");
    }
}
