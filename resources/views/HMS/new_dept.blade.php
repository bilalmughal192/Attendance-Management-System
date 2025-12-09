@extends('Main.master')

@section('content')
    <div class="col-md col-12 mt-2 mx-2 d-flex justify-content-center desgSec">
        <div class="col-lg-5 col-sm-12  mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <form action="{{ route('save_dept') }}" method="POST">
                        @csrf
                        <p class="pt-3 font-weight-bold text-center display-4">Create New department</p>
                        <input class="form-control mb-2" placeholder="Enter Department Name" name="dept_name">
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary mr-2 form-control ">Save</button>
                            <a href="{{ route('dept') }}" class="btn btn-secondary form-control">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection