<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use App\Models\CheckInOut;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\warning;

class main extends Controller
{
    public function loginPage()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('Main.login');
        }
    }



    public function dashboardPage()
    {


        // return view('Main.dashboard', compact('user', 'grouped', 'startDate', 'endDate'));

        $usr = Auth::user();

        $id = $usr->user_id; // Or use fixed ID for testing

        $user = UserInfo::where('BADGENUMBER', $id)->first();

        $data = CheckInOut::where('USERID', $user->USERID)->get();

        // Group records by Y-m-d for easy lookup in view
        $grouped = $data->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->CHECKTIME)->format('Y-m-d');
        });

        $today = Carbon::today();
        $startDate = $today->copy()->subDays(30); // or however long you want
       

        return view('Main.dashboard', compact('user', 'grouped', 'startDate', 'today'));
    }



    public function username()
    {
        return 'user_id';
    }

    public function check_user(Request $request)
    {

        $user = $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('warning', 'Invalid Employee ID or Password');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
