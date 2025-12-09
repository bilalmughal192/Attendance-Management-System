@extends('Main.master')

@section('content')
    <div class="col-md col-8 mt-2 mx-2 usersSec d-flex justify-content-center">
        <div class="col-lg-4 col-sm-12 mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <form action="{{ route('save_user') }}" method="POST">
                        @csrf
                        <p class="pt-3 font-weight-bold display-4">Reset Password</p>

                        <!-- User Select -->
                        <select name="user_id" class="form-control mr-2 mb-2" required>
                            <option value="" disabled selected>Select User</option>
                            @foreach ($emp_list as $emp)
                                <option value="{{ $emp->user_id }}">{{'('.$emp->user_id.') '. $emp->name }}</option>
                            @endforeach
                        </select>

                        <!-- New Password Input -->
                        <input class="form-control mb-2" placeholder="New Password" type="password" name="password" required>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection()
