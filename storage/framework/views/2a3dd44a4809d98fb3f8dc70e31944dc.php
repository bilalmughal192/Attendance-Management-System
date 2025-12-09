

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 attSec">
        <div class=" mt-2  attheading b5px ">
            <div class="d-flex justify-content-center align-item-end">
                <p class="pl-3 pt-3 font-weight-bold display-4" style="font-size: 28px">Attendance Detail</p>
            </div>
            <div class=" my-2 d-flex justify-content-center">
                <p class="mt-2 mr-1 ">Start Date</p>
                <input class="form-control  stDate col-2" type="date" placeholder="Start Date">
                <p class="mt-2 ml-5 mr-1 ">End Date</p>
                <input class="form-control col-2 edDate" type="date" placeholder="Start Date">
                <button onclick="attDetail()" class="btn ml-5 btn-primary col-1 form-control attButton">view</button>
            </div>
        </div>
        <table class=" attData table table-light mb-2">
            
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e('/js/machine.js'); ?>"></script>
    <script src="<?php echo e('/js/att.js'); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/Report/attendance-detail.blade.php ENDPATH**/ ?>