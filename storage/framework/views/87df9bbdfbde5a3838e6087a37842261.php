

<?php $__env->startSection('content'); ?>
<div class="col-md col-12 mt-2 mx-2 empSec">
    <div class=" my-2 empHeading b5px ">
        <div class="d-flex justify-content-between">
            <p class="pl-3 pt-3 font-weight-bold display-4">Employees</p>
            <div class="mr-3 mt-2 col-6 d-flex">
                <input class="form-control mb-2 mr-4" placeholder="Search" type="search">
                <form action="<?php echo e(route('new_emp')); ?>" class="col-5" method="GET">
                    <button class="btn btn-primary form-control mb-2">Create</button>
                </form>
            </div>
        </div>

        <table class=" table bg-light table-striped b5px mb-2">

            <div class="empInfo">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </div>
            <?php $__currentLoopData = $emp_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="pt-3"><?php echo e($emp->id); ?></td>
                <td class="pt-3"><?php echo e($emp->name); ?></td>
                
                <td class="pt-3"><?php echo e($emp->dept_name); ?></td>
                <td class="pt-3"><?php echo e($emp->desg_name); ?></td>
                <td class="pt-3">
                    <?php if($emp->status == 1): ?>
                    Active
                    <?php else: ?>
                    Inactive
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('emp_view',['id' => $emp->id])); ?>" class="btn btn-primary btn-sm">View</a>
                    <a href="<?php echo e(route('emp_edit',['id' => $emp->id])); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo e(route('emp_del',['id' => $emp->id])); ?>" class="btn btn-danger btn-sm">Delete</a>
                    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="empList">
            </div>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/HMS/employees.blade.php ENDPATH**/ ?>