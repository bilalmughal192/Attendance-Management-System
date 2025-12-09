

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 d-flex justify-content-center desgSec">
        <div class="col-lg-5 col-sm-12  mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <form action="<?php echo e(route('save_desg')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <p class="pt-3 font-weight-bold text-center display-4">Create New designation</p>
                        <input class="form-control mb-2" placeholder="Enter Designation Name" name="desg_name">
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary mr-2 form-control ">Save</button>
                            <a href="<?php echo e(route('desg')); ?>" class="btn btn-secondary form-control">Back</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/HMS/new_desg.blade.php ENDPATH**/ ?>