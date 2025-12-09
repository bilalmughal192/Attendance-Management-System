<?php

namespace App\Http\Controllers;

use App\Models\CheckInOut;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class Report extends Controller
{
    public function show_att(Request $request)
    {
        if (Auth::check()) {
            $usr = Auth::user();
            $id = $usr->user_id; // Use ->id if that's the correct key in your User model

            $user = UserInfo::where('BADGENUMBER', $id)->first();
            if (!$user) {
                return redirect()->back()->with('error', 'User not found in UserInfo table.');
            }

            // Get data from CheckInOut for the user
            $data = CheckInOut::where('USERID', $user->USERID)->get();

            // Get date range from request or use default: past 30 days
            $startDate = Carbon::parse($request->input('start_date', now()->subDays(30)));
            $endDate = Carbon::parse($request->input('end_date', now()));

            // Group data by date (Y-m-d)
            $grouped = $data->groupBy(function ($item) {
                return Carbon::parse($item->CHECKTIME)->format('Y-m-d');
            });
            return view('Report.view-attendance', compact('grouped', 'user', 'startDate', 'endDate'));

            
        } else {
            return redirect()->route('login');
        }
    }

    public function attpage()
    {
        if (Auth::check()) {
            return view('Report.attendance-detail');
        } else {
            return redirect()->route('login');
        }
    }

    // public function staffatt()
    // {
    //     $id = 1;
    //     $user = UserInfo::where('USERID', $id)->first();
    //     $data = CheckInOut::where('USERID', $id)->get();
    //     return view('Report.staff-attendance', compact(['data', 'user']));
    // }
}
