

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 machineSec">
        <div class="mt-2 text-center logheading b5px">
            
                <p class="pl-3 pt-3 font-weight-bold display-4" style="font-size: 28px">Attendance Detail</p>
                <p class="font-weight-bold display-4 pb-2" style="font-size: 24px">Date Range: <?php echo e($startDate->format('M d, Y')); ?> to <?php echo e($endDate->format('M d, Y')); ?></p>
           
        </div>
        


        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
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
                    <?php $i = 1; ?>
                    <?php for($date = $startDate->copy(); $date->lte($endDate); $date->addDay()): ?>
                        <?php
                            $formattedDate = $date->format('d-M-Y, D');
                            $isHoliday = $date->isSunday();

                            $recordsForDate = $grouped[$date->format('Y-m-d')] ?? collect();

                            $checkIn = $recordsForDate->where('CHECKTYPE', 'I')->sortBy('CHECKTIME')->first();
                            $checkOut = $recordsForDate->where('CHECKTYPE', 'O')->sortByDesc('CHECKTIME')->first();

                            $attendanceTime = $checkIn ? Carbon\Carbon::parse($checkIn->CHECKTIME) : null;
                            $cutoffTime = $date->copy()->setTime(9, 16); // 9:16 AM cutoff

                            $checkInTime = $checkIn ? $attendanceTime->format('h:i A') : '-';
                            $checkOutTime = $checkOut
                                ? Carbon\Carbon::parse($checkOut->CHECKTIME)->format('h:i A')
                                : '-';

                            if ($isHoliday) {
                                $status = 'Holiday';
                                $rowClass = '';
                                $shift = 'Holiday';
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
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($formattedDate); ?></td>
                            <td><?php echo e($shift); ?></td>
                            <td><?php echo e($checkInTime); ?></td>
                            <td><?php echo e($checkOutTime); ?></td>
                            <td><strong><?php echo e($status); ?></strong></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <a href="<?php echo e(route('attendance')); ?>" class="btn btn-secondary mb-3 col-3 form-control">Back</a>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e('/js/machine.js'); ?>"></script>
    <script src="<?php echo e('/js/att.js'); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/Report/view-attendance.blade.php ENDPATH**/ ?>