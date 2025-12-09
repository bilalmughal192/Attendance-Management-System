@extends('Main.master')

@section('content')
    <div class=" col-md col-12 my-2  mx-2 machineSec">
        <div class="mt-2 pb-2  logheading b5px">
            <div class="d-flex justify-content-center align-item-end">
                <p class="pl-3 pt-3 font-weight-bold display-4" style="font-size: 28px">Attendance Detail</p>
            </div>

            
            <form  method="GET" action="{{ route('show_attendance') }}" class=" my-2 d-flex justify-content-center">
                <label class="mt-2 mr-1" for="start_date">Start Date:</label>
                <input class="form-control col-2 mr-5" type="date" name="start_date" value="{{ request('start_date') }}" required>

                <label class="mt-2 mr-1 ml-2" for="end_date">End Date:</label>
                <input class="form-control col-2 " type="date" name="end_date" value="{{ request('end_date') }}" required>
                <button class="btn ml-5 btn-primary col-lg-1 col-2 form-control" type="submit">View</button>
            </form>

        </div>
    </div>
@endsection()
@push('script')
    <script src="{{ '/js/machine.js' }}"></script>
    <script src="{{ '/js/att.js' }}"></script>
@endpush
