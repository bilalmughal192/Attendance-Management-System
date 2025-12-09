

<?php $__env->startSection('content'); ?>
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
            
        </table>
        <?php
            use Carbon\Carbon;

            // Group all records by date
            $grouped = $data->groupBy(function ($item) {
                return Carbon::parse($item->CHECKTIME)->format('Y-m-d');
            });
            $c = 1;
        ?>
        <p><?php echo e($user->BADGENUMBER); ?></p>
        <table class="table table-striped bg-white text-center machineData mb-2">
            <tr>
                <th>Sr. #</th>
                <th>Date & Day</th>
                <th>Shift</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Status</th>
            </tr>

            <?php $__currentLoopData = $grouped; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $records): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $dateObj = Carbon::parse($date);
                    $formattedDate = $dateObj->format('d-m-Y l');

                    $checkIn = $records->where('CHECKTYPE', 'I')->sortBy('CHECKTIME')->first();
                    $checkOut = $records->where('CHECKTYPE', 'O')->sortByDesc('CHECKTIME')->first();
                    $attendanceTime = $checkIn ? Carbon::parse($checkIn->CHECKTIME) : null;
                    $cutoffTime = $dateObj->copy()->setTime(9, 16); // 09:15 AM grace
                ?>
                <tr>
                    <td><?php echo e($c++); ?></td>
                    <td><?php echo e($formattedDate); ?></td>
                    <td>Morning(09:00AM - 05:00 PM)</td>
                    <td><?php echo e($checkIn ? Carbon::parse($checkIn->CHECKTIME)->format('h:i A') : '-'); ?></td>
                    <td><?php echo e($checkOut ? Carbon::parse($checkOut->CHECKTIME)->format('h:i A') : '-'); ?></td>

                    <?php if($attendanceTime): ?>
                        <?php if($attendanceTime->lte($cutoffTime)): ?>
                            <td>Present</td>
                        <?php else: ?>
                            <td>Late</td>
                        <?php endif; ?>
                    <?php else: ?>
                        <td>Absent</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e('/js/machine.js'); ?>"></script>
    <script src="<?php echo e('/js/att.js'); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/Report/staff-attendance.blade.php ENDPATH**/ ?>