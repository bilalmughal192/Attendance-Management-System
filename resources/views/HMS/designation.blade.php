@extends('Main.master')

@section('content')
    <div class="col-md col-12 mt-2 mx-2 desgSec">
        <div class=" my-2 empHeading b5px ">
            <div class="mr-3 mt-2 d-flex justify-content-between">
                <p class="px-3 pt-3 font-weight-bold display-4">Designation List</p>
                <form action="{{route('new_desg') }}" method="GET">
                <button class="btn btn-primary  form-control mt-2">Create New Designation</button>
                </form>
            </div>

            <table class=" table bg-light table-striped b5px mb-2">
                <div class="empInfo">
                    <tr>
                        <th>ID</th>
                        <th>Designation Name</th>
                    </tr>
                </div>
                  @foreach ($desg_list as $desg)
                      <tr>
                        <td>{{$desg->id}}</td>
                        <td>{{$desg->name}}</td>
                      </tr>
                  @endforeach
            </table>
        </div>
    </div>
@endsection()
