

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 desgSec">
        <div class=" my-2 empHeading b5px ">
            <div class="mr-3 mt-2 d-flex justify-content-between">
                <p class="px-3 pt-3 font-weight-bold display-4">Designation List</p>
                <form action="<?php echo e(route('new_desg')); ?>" method="GET">
                <button class="btn btn-primary  form-control mt-2">Create New Designation</button>
                </form>
            </div>

            <table class=" table bg-light table-striped b5px mb-2">
                <div class="empInfo">
                    <tr>
                        <th>ID</th>
                        <th>Designation Name</th>
                    </tr>
                </div>
                  <?php $__currentLoopData = $desg_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($desg->id); ?></td>
                        <td><?php echo e($desg->name); ?></td>
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/HMS/designation.blade.php ENDPATH**/ ?>