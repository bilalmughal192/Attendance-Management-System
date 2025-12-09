@extends('Main.master')

@section('content')
<div class="col-md col-12 mt-2 mx-2 deptSec">
    <div class=" my-2 empHeading b5px ">
            <div class="mr-3 mt-2 d-flex justify-content-between">
                <p class="px-3 pt-3 font-weight-bold display-4">Department List</p>
                <form action="{{route('create_dept') }}" method="GET">
                <button class="btn btn-primary form-control mt-2">Create New Department</button>
                </form>
            </div>
        <table class=" table bg-light table-striped b5px mb-2">
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                </tr>
                @foreach ($dept_list as $dept )
                      <tr>
                        <td>{{$dept->DEPTID}}</td>
                        <td>{{$dept->DEPTNAME}}</td>
                      </tr>
                  @endforeach
            
              
        </table>
    </div>
</div>

@endsection()