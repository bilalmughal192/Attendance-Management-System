@extends('Main.master')

@section('content')
    <div class="col-md col-12 mt-2 mx-2 d-flex justify-content-center desgSec">
        <div class="col-md-8 col-sm-12  mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <form action="{{ route('emp_update',$emp->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <p class="pt-3 font-weight-bold text-center display-4">Edit Employee Info</p>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" type="text" value="{{ $emp->name }}"
                                placeholder="Employee Name" name="name">
                            <input class="form-control mb-2" type="text" value="{{ $emp->father_name }}"
                                placeholder="Father Name" name="father_name">
                        </div>

                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Birth</label>
                            <input class="form-control mb-2" value="{{ $emp->dob }}" type="date" name="dob">
                        </div>
                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Joining</label>
                            <input class="form-control mb-2" value="{{ $emp->doj }}" type="date" name="doj">
                        </div>


                        <div class="d-flex gap-2">
                            <input class="form-control mb-2" value="{{ $emp->cnic }}" type="text" placeholder="CNIC"
                                name="cnic">
                        </div>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" value="{{ $emp->ph }}" type="text"
                                placeholder="Phone No." name="ph">
                            <input class="form-control mb-2" value="{{ $emp->email }}" type="email" placeholder="Email"
                                name="email">
                        </div>
                        <div class="d-flex gap-2">
                            <select name="gender" class="form-control mr-2 mb-2" required>
                                <option value="" disabled {{ $emp->gender ? '' : 'selected' }}>Gender</option>
                                <option value="M" {{ $emp->gender == 'M' ? 'selected' : '' }}>Male</option>
                                <option value="F" {{ $emp->gender == 'F' ? 'selected' : '' }}>Female</option>
                            </select>


                            <select name="desg_name" class="form-control mr-2 mb-2" required>
                                <option value="" disabled {{ is_null($emp->desg_name) ? 'selected' : '' }}>
                                    Designation</option>
                                @foreach ($desg_list as $desg)
                                    <option value="{{ $desg->name }}"
                                        {{ $emp->desg_name == $desg->name ? 'selected' : '' }}>
                                        {{ $desg->name }}</option>
                                @endforeach
                            </select>


                            <select name="dept_name" class="form-control mb-2" required>
                                <option value="" disabled {{ is_null($emp->dept_name) ? 'selected' : '' }}>select
                                    Department</option>
                                @foreach ($dept_list as $dept)
                                    <option value="{{ $dept->DEPTNAME }}"
                                        {{ $emp->dept_name == $dept->DEPTNAME ? 'selected' : '' }}>
                                        {{ $dept->DEPTNAME }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary mr-2 form-control ">Save Changes</button>
                            <a href="{{ route('employees') }}" class="btn btn-secondary form-control">Back</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
