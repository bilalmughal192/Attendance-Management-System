@extends('Main.master')

@section('content')
    <div class="col-md col-12  mt-2 mx-2 usersSec d-flex justify-content-center">
        <div class="col-md-8 col-12 mt-3 ">
            <table class="table table-striped bg-white">
                <tr>
                    <td colspan="4">
                        <p class="m-0 py-1 text-center bg-white font-weight-bold display-4" style="font-size: 28px">Employee
                            Detail
                        </p>
                    </td>
                </tr>
                <tr>
                    <th>Employee ID</th>
                    <td>{{ $emp->id }}</td>
                    <th>Employee Name</th>
                    <td>{{ $emp->name }}</td>
                </tr>

                <tr>
                    <th>Father Name</th>
                    <td>{{ $emp->father_name }}</td>
                    <th>Date of Birth</th>
                    <td>{{ $emp->dob }}</td>
                </tr>

                <tr>
                    <th>Date of Joining</th>
                    <td>{{ $emp->doj }}</td>
                    <th>CINC</th>
                    <td>{{ $emp->cnic }}</td>
                </tr>

                <tr>
                    <th>Mobile No.</th>
                    <td>{{ $emp->ph }}</td>
                    <th>Email</th>
                    <td>{{ $emp->email }}</td>
                </tr>

                <tr>
                    <th>Gender</th>
                    <td>{{ $emp->gender }}</td>
                    <th>Designation</th>
                    <td>{{ $emp->desg_name }}</td>
                </tr>

                <tr>
                    <th>Department</th>
                    <td>{{ $emp->dept_name }}</td>
                    <th>Status</th>
                    @if ($emp->status == 1)
                        <td>Active</td>
                    @else
                        <td>Inactive</td>
                    @endif
                </tr>

            </table>
            <a href="{{ route('employees') }}" class="btn btn-secondary col-4 form-control">Back</a>

        </div>
    </div>
@endsection
