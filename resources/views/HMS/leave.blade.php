@extends('Main.master')
@section('content')
<div class="col-md col-12 mt-2 mx-2 leaveSec">
    <table class="h-25 col-sm-5 col-md-4 my-4 mx-2 table table-bordered table-dark">
        <tr>
            <td>Leave Type</td>
            <td>Total</td>
            <td>Balance</td>
            <td>Availed</td>
        </tr>
        <tr>
            <td id="empCasualLeave">Casual</td>
            <td id="empCasualTotal">10</td>
            <td id="empCasualBalance">10</td>
            <td id="empCasualAvailed">0</td>
        </tr>
        <tr>
            <td id="empSickLeave">Sick</td>
            <td id="empSickTotal">10</td>
            <td id="empSickBalance">10</td>
            <td id="empSickAvailed">0</td>
        </tr>
        <tr>
            <td id="empAnualLeave">Anual</td>
            <td id="empAnualTotal">15</td>
            <td id="empAnualBalance">15</td>
            <td id="empAnualAvailed">0</td>
        </tr>
    </table>

    <table class=" table bg-light b5px table-striped mb-2">

        <div class="leaveLog">
            <tr>
                <th>ID</th>
                <th>Leave Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Reason</th>
                <th>No. of Days</th>
                <th>Status</th>
                
            </tr>
        </div>
        <div class="leaveList">
            <tr class="">
                <td>201</td>
                <td>Casual</td>
                <td>15/3/2025</td>
                <td>15/3/2025</td>
                <td>urgent work</td>
                <td>1</td>
                <td class="bg-success col-1">Approved</td>
            </tr>
        </div>
    </table>
</div>
@endsection()