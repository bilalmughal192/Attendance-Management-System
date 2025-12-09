

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2">
        <div class="row no-gutters mx-2 mt-2 ">
            <div class="col-lg-7 col-sm-12 py-2 px-3 empDetail border-bottom  ">
                <h3 style="font-size: 25px;" class="display-3 font-weight-bold mb-3">Employee Detail</h3>
                <div class="row no-gutters">
                    <div class="col-md-3 col-6 mb-2">
                        <p class="display-4 font-weight-bold">Employee ID:</p>
                        <p class="display-4 font-weight-bold">Employee Name:</p>
                        <p class="display-4 font-weight-bold">Contact No:</p>
                        <p class="display-4 font-weight-bold">Designation:</p>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <p class="display-4" id="empID"><?php echo e(auth()->user()->user_id); ?></p>
                        <p class="display-4" id="empName"><?php echo e(auth()->user()->name); ?></p>
                        <p class="display-4" id="empPh"><?php echo e(auth()->user()->ph); ?></p>
                        <p class="display-4" id="empDesignatio"><?php echo e(auth()->user()->desg_name); ?></p>
                    </div>

                    <hr class="">

                    <div class="col-md-3 col-6">
                        <p class="display-4 font-weight-bold">Date of Joining :</p>
                        <p class="display-4 font-weight-bold">Father Name :</p>
                        <p class="display-4 font-weight-bold">E-mail:</p>
                        <p class="display-4 font-weight-bold">Department :</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <p class="display-4" id="empDOJ"> <?php echo e(date('d M Y', strtotime(auth()->user()->doj))); ?></p>
                        <p class="display-4" id="empFatherName"><?php echo e(auth()->user()->father_name); ?></p>
                        <p class="display-4" id="empEmail"><?php echo e(auth()->user()->email); ?></p>
                        <p class="display-4" id="empDept"><?php echo e(auth()->user()->dept_name); ?></p>
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
                    
                </div>
                <h3 class="display-5">Notifications/Updates</h3>
            </div>
            <?php
                use Carbon\Carbon;

                $today = Carbon::today(); // Current day
                $startDate = $today->copy()->subDays(6); // 6 days before today
                $c = 1;
            ?>
            <table class="weekAtt table table-light my-2">
                <thead>
                    <tr>
                        <th>Sr. #</th>
                        <th>Date & Day</th>
                        <th>Shift</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($date = $today->copy(); $date->gte($startDate); $date->subDay()): ?>
                        <?php
                            $formattedDate = $date->format('d-M-Y, D');
                            $isHoliday = $date->isSunday();

                            $recordsForDate = $grouped[$date->format('Y-m-d')] ?? collect();

                            $checkIn = $recordsForDate->where('CHECKTYPE', 'I')->sortBy('CHECKTIME')->first();
                            $checkOut = $recordsForDate->where('CHECKTYPE', 'O')->sortByDesc('CHECKTIME')->first();

                            $attendanceTime = $checkIn ? Carbon::parse($checkIn->CHECKTIME) : null;
                            $cutoffTime = $date->copy()->setTime(9, 16);

                            $checkInTime = $checkIn ? $attendanceTime->format('h:i A') : '-';
                            $checkOutTime = $checkOut ? Carbon::parse($checkOut->CHECKTIME)->format('h:i A') : '-';

                            if ($isHoliday) {
                                $status = 'Holiday';
                                $rowClass = 'bgcGray';
                                $shift = '-';
                            } elseif ($attendanceTime) {
                                if ($attendanceTime->lt($cutoffTime)) {
                                    $status = 'Present';
                                    $rowClass = 'bgcGreen';
                                } else {
                                    $status = 'Late';
                                    $rowClass = 'bgcYellow';
                                }
                                $shift = 'Morning (09:00 AM - 05:00 PM)';
                            } else {
                                $status = 'Absent';
                                $rowClass = 'bgcRed';
                                $shift = 'Morning (09:00 AM - 05:00 PM)';
                            }
                        ?>

                        <tr class="<?php echo e($rowClass); ?>">
                            <td><?php echo e($c++); ?></td>
                            <td><?php echo e($formattedDate); ?></td>
                            <td><?php echo e($shift); ?></td>
                            <td><?php echo e($checkInTime); ?></td>
                            <td><?php echo e($checkOutTime); ?></td>
                            <td><?php echo e($status); ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>

            </table>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/Main/dashboard.blade.php ENDPATH**/ ?>