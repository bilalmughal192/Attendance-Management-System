@extends('Main.master')

@section('content')
    <div class="col-md col-12 mt-2 mx-2 d-flex justify-content-center desgSec">
        <div class="col-md-8 col-sm-12  mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('save_emp') }}" method="POST">
                        @csrf
                        <p class="pt-3 font-weight-bold text-center display-4">Add New Employee</p>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" type="text" placeholder="Employee Name" name="name">
                            <input class="form-control mb-2" type="text" placeholder="Father Name" name="father_name">
                        </div>
                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Birth</label>
                            <input class="form-control mb-2" type="date" name="dob">
                        </div>
                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Joining</label>
                            <input class="form-control mb-2" type="date" name="doj">
                        </div>


                        <div class="d-flex gap-2">
                            <input class="form-control mb-2" type="text" placeholder="CNIC" name="cnic">
                        </div>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" type="text" placeholder="Phone No." name="ph">
                            <input class="form-control mb-2" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="d-flex gap-2">
                            <select name="gender" class="form-control mr-2 mb-2" required>
                                <option value="" disabled selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>

                            <select name="desg_name" class="form-control mr-2 mb-2" required>
                                <option value="" disabled selected>Designation</option>
                                @foreach ($desg_list as $desg)
                                    <option value="{{ $desg->name }}">{{ $desg->name }}</option>
                                @endforeach
                            </select>

                            <select name="dept_name" class="form-control mb-2" required>
                                <option value="" disabled selected>Department</option>
                                @foreach ($dept_list as $dept)
                                    <option value="{{ $dept->DEPTNAME }}">{{ $dept->DEPTNAME }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary mr-2 form-control ">Save</button>
                            <a href="{{ route('employees') }}" class="btn btn-secondary form-control">Back</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
