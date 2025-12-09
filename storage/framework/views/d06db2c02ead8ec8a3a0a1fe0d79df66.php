
<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2">
        <div class="row no-gutters mx-2 mt-2 ">
            <div class="col-lg-7 col-sm-12 py-2 px-3 empDetail border-bottom  ">
                <h3 style="font-size: 25px;" class="display-3 font-weight-bold mb-3">Employee Detail</h3>
               
                <?php
                    $emp = session('emp');
                ?>

                <div class="row no-gutters">
                    <div class="col-md-3 col-6 mb-2">
                        <p class="display-4 font-weight-bold">Employee ID:</p>
                        <p class="display-4 font-weight-bold">Employee Name:</p>
                        <p class="display-4 font-weight-bold">Contact No:</p>
                        <p class="display-4 font-weight-bold">Designation:</p>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <p class="display-4" id="empID"><?php echo e($emp->id); ?></p>
                        <p class="display-4" id="empName"><?php echo e($emp->name); ?></p>
                        <p class="display-4" id="empPh"><?php echo e($emp->ph); ?></p>
                        <p class="display-4" id="empDesignatio"><?php echo e($emp->desg_name); ?></p>
                    </div>

                    <hr class="">

                    <div class="col-md-3 col-6">
                        <p class="display-4 font-weight-bold">Date of Joining :</p>
                        <p class="display-4 font-weight-bold">Father Name :</p>
                        <p class="display-4 font-weight-bold">E-mail:</p>
                        <p class="display-4 font-weight-bold">Department :</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <p class="display-4" id="empDOJ"><?php echo e($emp->doj); ?></p>
                        <p class="display-4" id="empFatherName"><?php echo e($emp->father_name); ?></p>
                        <p class="display-4" id="empEmail"><?php echo e($emp->email); ?></p>
                        <p class="display-4" id="empDept"><?php echo e($emp->dept_name); ?></p>
                    </div>
                </div>

                <hr>
                <table class=" col-sm-9 col-md-9 table-bordered table table-dark">
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
            </div>
            <div class="col ml-2 bg-light p-3">
                <div class="mb-3">
                    <button class="form-control justify-content-between d-flex m-0 px-2 border-0 text-white bg-info "
                        data-toggle="collapse" href="#TodayInOut">Today's Check In/Check Out <span>▼</span></button>
                    <div class="collapse m-0 p-0" id="TodayInOut">
                        <div class="d-flex bg-secondary m-0 ">
                            <h5 class="text-white m-0 bg-secondary form-control " href="#">11-06-2025 09:05 AM <span
                                    class="ml-5 pl-5">Check IN</span></h5>
                        </div>
                        <h5 class="text-white m-0 bg-secondary form-control " href="#">11-06-2025 05:02 PM <span
                                class="ml-5 pl-5">Check OUT</span></h5>
                    </div>
                </div>
                <h3 class="display-5">Notifications/Updates</h3>
            </div>

            <div class="col-12 mt-2">
                <table class="weekAtt table table-light mb-2">
                    <tr>
                        <th>Date & Day</th>

                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Time In Status</th>
                        <th>Worked Hours</th>

                        <th>Status</th>
                    </tr>
                    <tr class="bgcGreen">
                        <td>11-Jun-2025,Wed</td>

                        <td>8:10 AM</td>
                        <td>3:00 PM</td>
                        <td>In Time</td>
                        <td>7:25</td>

                        <td>Present</td>
                    </tr>
                    <tr class="bgcYellow">
                        <td>10-Jun-2025,Tue</td>

                        <td>8:20 AM</td>
                        <td>3:15 PM</td>
                        <td>Late</td>
                        <td>7:25</td>

                        <td>Present</td>
                    </tr>
                    <tr class="bgcGreen">
                        <td>9-Jun-2025,Mon</td>

                        <td>7:50 AM</td>
                        <td>3:15 PM</td>
                        <td>In Time</td>
                        <td>7:25</td>

                        <td>Present</td>
                    </tr>
                    <tr class="bg-light">
                        <td>8-Jun-2025,Sun</td>

                        <td></td>
                        <td></td>
                        <td>Holiday</td>
                        <td>0:0</td>

                        <td>Holiday</td>
                    </tr>
                    <tr class="bgcRed">
                        <td>7-Jun-2025,Sat</td>

                        <td></td>
                        <td></td>
                        <td>Absent</td>
                        <td>0:0</td>

                        <td>Absent</td>
                    </tr>
                    <tr class="bgcGreen">
                        <td>6-Jun-2025,Fri
                        </td>

                        <td>7:50 AM</td>
                        <td>3:15 PM</td>
                        <td>In Time</td>
                        <td>7:25</td>

                        <td>Present</td>
                    </tr>
                    <tr class="bgcGreen">
                        <td>5-Jun-2025,Thu</td>

                        <td>8:20 AM</td>
                        <td>3:25 PM</td>
                        <td>In Time</td>
                        <td>7:25</td>

                        <td>Present</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/Main/dashboard.blade.php ENDPATH**/ ?>