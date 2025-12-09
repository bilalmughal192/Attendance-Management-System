

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 machineSec">
        <div class="mt-2 logheading b5px">
            <div class="d-flex justify-content-center align-item-end">
                <p class="pl-3 pt-3 font-weight-bold display-4" style="font-size: 28px">Machine Log</p>
            </div>

            <div class=" my-2 d-flex justify-content-center">
                <p class="mt-2 mr-1 ">Start Date</p>
                <input class="stDate form-control col-2" type="date" placeholder="Start Date">
                <p class="mt-2 ml-5 mr-1 ">End Date</p>
                <input class="edDate form-control col-2" type="date" placeholder="Start Date">
                <button class="btn ml-5 btn-primary col-lg-1 col-2 form-control">view</button>
            </div>
        </div>
       
        <table class="table table-striped bg-white text-center machineData mb-2">
            <tr>
                <th>Sr. #</th>
                <th>User ID</th>
                <th>Date & Day</th>
                <th>Check In</th>
                <th>Check Out</th>
            </tr>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/Report/machine-log.blade.php ENDPATH**/ ?>