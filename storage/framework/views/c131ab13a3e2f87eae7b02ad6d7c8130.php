

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12  mt-2 mx-2 usersSec d-flex justify-content-center">
        <div class="col-md-8 col-12 mt-3 ">
            <table class="table table-striped bg-white">
                <tr>
                    <td colspan="4">
                        <p class="m-0 py-1 text-center bg-white font-weight-bold display-4" style="font-size: 28px">Employee
                            Detail
                        </p>
                    </td>
                </tr>
                <tr>
                    <th>Employee ID</th>
                    <td><?php echo e($emp->id); ?></td>
                    <th>Employee Name</th>
                    <td><?php echo e($emp->name); ?></td>
                </tr>

                <tr>
                    <th>Father Name</th>
                    <td><?php echo e($emp->father_name); ?></td>
                    <th>Date of Birth</th>
                    <td><?php echo e($emp->dob); ?></td>
                </tr>

                <tr>
                    <th>Date of Joining</th>
                    <td><?php echo e($emp->doj); ?></td>
                    <th>CINC</th>
                    <td><?php echo e($emp->cnic); ?></td>
                </tr>

                <tr>
                    <th>Mobile No.</th>
                    <td><?php echo e($emp->ph); ?></td>
                    <th>Email</th>
                    <td><?php echo e($emp->email); ?></td>
                </tr>

                <tr>
                    <th>Gender</th>
                    <td><?php echo e($emp->gender); ?></td>
                    <th>Designation</th>
                    <td><?php echo e($emp->desg_name); ?></td>
                </tr>

                <tr>
                    <th>Department</th>
                    <td><?php echo e($emp->dept_name); ?></td>
                    <th>Status</th>
                    <?php if($emp->status == 1): ?>
                        <td>Active</td>
                    <?php else: ?>
                        <td>Inactive</td>
                    <?php endif; ?>
                </tr>

            </table>
            <a href="<?php echo e(route('employees')); ?>" class="btn btn-secondary col-4 form-control">Back</a>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/HMS/view_emp.blade.php ENDPATH**/ ?>