

<?php $__env->startSection('content'); ?>
<div class="col-md col-12 mt-2 mx-2 deptSec">
    <div class=" my-2 empHeading b5px ">
            <div class="mr-3 mt-2 d-flex justify-content-between">
                <p class="px-3 pt-3 font-weight-bold display-4">Department List</p>
                <form action="<?php echo e(route('create_dept')); ?>" method="GET">
                <button class="btn btn-primary form-control mt-2">Create New Department</button>
                </form>
            </div>
        <table class=" table bg-light table-striped b5px mb-2">
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                </tr>
                <?php $__currentLoopData = $dept_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($dept->DEPTID); ?></td>
                        <td><?php echo e($dept->DEPTNAME); ?></td>
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
              
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/HMS/department.blade.php ENDPATH**/ ?>