

<?php $__env->startSection('content'); ?>
    <div class="col-md col-8 mt-2 mx-2 usersSec d-flex justify-content-center">
        <div class="col-lg-4 col-sm-12 mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <form action="<?php echo e(url('/HMS/save_user')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <p class="pt-3 font-weight-bold display-4">Reset Password</p>

                        <!-- User Select -->
                        <select name="user_id" class="form-control mr-2 mb-2" required>
                            <option value="" disabled selected>Select User</option>
                            <?php $__currentLoopData = $emp_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <!-- New Password Input -->
                        <input class="form-control mb-2" placeholder="New Password" type="password" name="pass" required>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/HMS/reset_password.blade.php ENDPATH**/ ?>