@extends('Main.master')

@section('content')
<div class="col-md col-12 mt-2 mx-2 empSec">
    <div class=" my-2 empHeading b5px ">
        <div class="d-flex justify-content-between">
            <p class="pl-3 pt-3 font-weight-bold display-4">Employees</p>
            <div class="mr-3 mt-2 col-6 d-flex">
                <input class="form-control mb-2 mr-4" placeholder="Search" type="search">
                <form action="{{ route('new_emp') }}" class="col-5" method="GET">
                    <button class="btn btn-primary form-control mb-2">Create</button>
                </form>
            </div>
        </div>

        <table class=" table bg-light table-striped b5px mb-2">

            <div class="empInfo">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    {{-- <th>Joining Date</th> --}}
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </div>
            @foreach ($emp_list as $emp)
            <tr>
                <td class="pt-3">{{ $emp->id }}</td>
                <td class="pt-3">{{ $emp->name }}</td>
                {{-- <td class="pt-3">{{ \Carbon\Carbon::parse($emp->doj)->format('d-m-Y') }}</td> --}}
                <td class="pt-3">{{ $emp->dept_name}}</td>
                <td class="pt-3">{{ $emp->desg_name}}</td>
                <td class="pt-3">
                    @if ($emp->status == 1)
                    Active
                    @else
                    Inactive
                    @endif
                </td>
                <td>
                    <a href="{{ route('emp_view',['id' => $emp->id]) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('emp_edit',['id' => $emp->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('emp_del',['id' => $emp->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                    
                </td>
            </tr>
            @endforeach
            <div class="empList">
            </div>
        </table>
    </div>
</div>
@endsection()