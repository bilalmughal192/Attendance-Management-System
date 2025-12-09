<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Emp;
use App\Models\Department;
use App\Models\User;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HMS extends Controller
{
    //Employees Controller 
    public function showEmp()
    {
        if (Auth::check()) {
            $emp_list = Emp::all();
            return view('HMS.employees', compact('emp_list'));
        } else {
            return redirect()->route('login');
        }
    }
    public function new_emp()
    {
        if (Auth::check()) {
        $desg_list = Designation::all();
        $dept_list = Department::all();
        return view('HMS.new_emp', compact(['desg_list', 'dept_list']));
        } else {
            return redirect()->route('login');
        }
    }
    public function save_emp(Request $emp)
    {
        $validated = $emp->validate([
            'name' => 'required|string',
            'father_name' => 'required|string',
            'dob' => 'required',
            'doj' => 'required',
            'cnic' => 'required',
            'ph' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'desg_name' => 'required',
            'dept_name' => 'required',
        ]);

        $emp_model = new Emp();

        $emp_model->name = $emp['name'];
        $emp_model->father_name = $emp['father_name'];
        $emp_model->dob = $emp['dob'];
        $emp_model->doj = $emp['doj'];
        $emp_model->cnic = $emp['cnic'];
        $emp_model->ph = $emp['ph'];
        $emp_model->email = $emp['email'];
        $emp_model->gender = $emp['gender'];
        $emp_model->desg_name = $emp['desg_name'];
        $emp_model->dept_name = $emp['dept_name'];
        $emp_model->status = $emp['status'] ?? 1;
        $emp_model->save();

        $user_model = new User();
        $user_model->user_id = $emp_model->id;
        $user_model->name = $emp['name'];
        $user_model->father_name = $emp['father_name'];
        $user_model->ph = $emp['ph'];
        $user_model->doj = $emp['doj'];
        $user_model->email = $emp['email'];
        $user_model->desg_name = $emp['desg_name'];
        $user_model->dept_name = $emp['dept_name'];
        $user_model->password = Hash::make($emp_model->id);
        if ($emp['dept_name'] == 'IT') {
            $user_model->rights = 'A';
        } elseif ($emp['dept_name'] == 'HR') {
            $user_model->rights = 'H';
        } else {
            $user_model->rights = 'S';
        }
        $user_model->save();

        return redirect()->route('employees');
    }
    public function view_emp(Request $request, $id)
    {
        if (Auth::check()) {
            $emp = Emp::where('id', $request->id)->first();
            return view('HMS.view_emp', compact('emp'));
        } else {
            return redirect()->route('login');
        }
    }
    public function edit_emp(Request $request, $id)
    {
        if (Auth::check()) {
            $emp = Emp::where('id', $request->id)->first();
            $desg_list = Designation::all();
            $dept_list = Department::all();
            return view('HMS.edit_emp', compact(['emp', 'desg_list', 'dept_list']));
        } else {
            return redirect()->route('login');
        }
    }
    public function update_emp(Request $emp, $id)
    {

        $emp_model = Emp::where('id', $id)->first();
        $emp_model->name = $emp['name'];
        $emp_model->father_name = $emp['father_name'];
        $emp_model->dob = $emp['dob'];
        $emp_model->doj = $emp['doj'];
        $emp_model->cnic = $emp['cnic'];
        $emp_model->ph = $emp['ph'];
        $emp_model->email = $emp['email'];
        $emp_model->gender = $emp['gender'];
        $emp_model->desg_name = $emp['desg_name'];
        $emp_model->dept_name = $emp['dept_name'];
        $emp_model->save();

        $user_model = User::where('user_id', $id)->first();
        $user_model->name = $emp['name'];
        $user_model->father_name = $emp['father_name'];
        $user_model->ph = $emp['ph'];
        $user_model->doj = $emp['doj'];
        $user_model->email = $emp['email'];
        $user_model->desg_name = $emp['desg_name'];
        $user_model->dept_name = $emp['dept_name'];
        $user_model->save();
        return redirect()->route('employees');
    }
    public function del_emp($id)
    {

        User::where('user_id', $id)->delete();
        Emp::where('id', $id)->delete();
        return redirect()->route('employees');
    }


    //Leave Controllers
    public function showLeave()
    {
        if (Auth::check()) {
            return view('HMS.leave');
        } else {
            return redirect()->route('login');
        }
    }


    //User and password reset controllers
    public function showUser()
    {
        if (Auth::check()) {
            $emp_list = User::all();
            return view('HMS.reset_password', compact('emp_list'));
        } else {
            return redirect()->route('login');
        }
    }


    public function save_new_user_password(Request $req)
    {
        $req->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('user_id', $req['user_id'])->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        $user->password = Hash::make($req['password']);
        $user->save();

        return redirect()->route('reset_password');
    }


    //designation controller
    public function showDesg()
    {
        if (Auth::check()) {
            $desg_list = Designation::all();
            return view('HMS.designation', compact('desg_list'));
        } else {
            return redirect()->route('login');
        }
    }
    public function new_Desg()
    {
        if (Auth::check()) {
            return view('HMS.new_desg');
        } else {
            return redirect()->route('login');
        }
    }
    public function save_Desg(Request $desg)
    {
        $desg_model = new Designation();
        $desg_model->name = $desg['desg_name'];
        $desg_model->save();
        return redirect()->route('desg');
    }

    //Department Controller
    public function showDept()
    {
        if (Auth::check()) {
            $dept_list = Department::all();
            return view('HMS.department', compact('dept_list'));
        } else {
            return redirect()->route('login');
        }
    }

    public function new_Dept()
    {
        if (Auth::check()) {
            return view('HMS.new_dept');
        } else {
            return redirect()->route('login');
        }
    }

    public function save_dept(Request $dept)
    {
        $dept_model = new Department();
        $dept_model->DEPTNAME = $dept['dept_name'];
        $dept_model->SUPDEPTID = 0;
        $dept_model->save();
        return redirect()->route('dept');
    }
}
