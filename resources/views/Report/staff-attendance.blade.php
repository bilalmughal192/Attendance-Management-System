@extends('Main.master')

@section('content')
    <div class="col-md col-12 mt-2 mx-2 machineSec">
        <div class="mt-2 logheading b5px">
            <div class="d-flex justify-content-center align-item-end">
                <p class="pl-3 pt-3 font-weight-bold display-4" style="font-size: 28px">Attendance Detail</p>
            </div>

            <div class=" my-2 d-flex justify-content-center">
                <p class="mt-2 mr-1 ">Start Date</p>
                <input class="stDate form-control col-2" type="date" placeholder="Start Date">
                <p class="mt-2 ml-5 mr-1 ">End Date</p>
                <input class="edDate form-control col-2" type="date" placeholder="Start Date">
                <button onclick="attDetail()" class="btn ml-5 btn-primary col-lg-1 col-2 form-control">view</button>
            </div>
        </div>
        <table class=" attData table table-light mb-2">
            {{-- Data showed form Java Script --}}
        </table>
        @php
            use Carbon\Carbon;

            // Group all records by date
            $grouped = $data->groupBy(function ($item) {
                return Carbon::parse($item->CHECKTIME)->format('Y-m-d');
            });
            $c = 1;
        @endphp
        <p>{{ $user->BADGENUMBER }}</p>
        <table class="table table-striped bg-white text-center machineData mb-2">
            <tr>
                <th>Sr. #</th>
                <th>Date & Day</th>
                <th>Shift</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Status</th>
            </tr>

            @foreach ($grouped as $date => $records)
                @php
                    $dateObj = Carbon::parse($date);
                    $formattedDate = $dateObj->format('d-m-Y l');

                    $checkIn = $records->where('CHECKTYPE', 'I')->sortBy('CHECKTIME')->first();
                    $checkOut = $records->where('CHECKTYPE', 'O')->sortByDesc('CHECKTIME')->first();
                    $attendanceTime = $checkIn ? Carbon::parse($checkIn->CHECKTIME) : null;
                    $cutoffTime = $dateObj->copy()->setTime(9, 16); // 09:15 AM grace
                @endphp
                <tr>
                    <td>{{ $c++ }}</td>
                    <td>{{ $formattedDate }}</td>
                    <td>Morning(09:00AM - 05:00 PM)</td>
                    <td>{{ $checkIn ? Carbon::parse($checkIn->CHECKTIME)->format('h:i A') : '-' }}</td>
                    <td>{{ $checkOut ? Carbon::parse($checkOut->CHECKTIME)->format('h:i A') : '-' }}</td>

                    @if ($attendanceTime)
                        @if ($attendanceTime->lte($cutoffTime))
                            <td>Present</td>
                        @else
                            <td>Late</td>
                        @endif
                    @else
                        <td>Absent</td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
@endsection()
@push('script')
    <script src="{{ '/js/machine.js' }}"></script>
    <script src="{{ '/js/att.js' }}"></script>
@endpush
