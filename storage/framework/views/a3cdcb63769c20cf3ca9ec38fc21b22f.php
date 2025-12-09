

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 d-flex justify-content-center desgSec">
        <div class="col-md-8 col-sm-12  mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <form action="<?php echo e(route('emp_update',$emp->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <p class="pt-3 font-weight-bold text-center display-4">Edit Employee Info</p>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" type="text" value="<?php echo e($emp->name); ?>"
                                placeholder="Employee Name" name="name">
                            <input class="form-control mb-2" type="text" value="<?php echo e($emp->father_name); ?>"
                                placeholder="Father Name" name="father_name">
                        </div>

                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Birth</label>
                            <input class="form-control mb-2" value="<?php echo e($emp->dob); ?>" type="date" name="dob">
                        </div>
                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Joining</label>
                            <input class="form-control mb-2" value="<?php echo e($emp->doj); ?>" type="date" name="doj">
                        </div>


                        <div class="d-flex gap-2">
                            <input class="form-control mb-2" value="<?php echo e($emp->cnic); ?>" type="text" placeholder="CNIC"
                                name="cnic">
                        </div>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" value="<?php echo e($emp->ph); ?>" type="text"
                                placeholder="Phone No." name="ph">
                            <input class="form-control mb-2" value="<?php echo e($emp->email); ?>" type="email" placeholder="Email"
                                name="email">
                        </div>
                        <div class="d-flex gap-2">
                            <select name="gender" class="form-control mr-2 mb-2" required>
                                <option value="" disabled <?php echo e($emp->gender ? '' : 'selected'); ?>>Gender</option>
                                <option value="M" <?php echo e($emp->gender == 'M' ? 'selected' : ''); ?>>Male</option>
                                <option value="F" <?php echo e($emp->gender == 'F' ? 'selected' : ''); ?>>Female</option>
                            </select>


                            <select name="desg_name" class="form-control mr-2 mb-2" required>
                                <option value="" disabled <?php echo e(is_null($emp->desg_name) ? 'selected' : ''); ?>>
                                    Designation</option>
                                <?php $__currentLoopData = $desg_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($desg->name); ?>"
                                        <?php echo e($emp->desg_name == $desg->name ? 'selected' : ''); ?>>
                                        <?php echo e($desg->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>


                            <select name="dept_name" class="form-control mb-2" required>
                                <option value="" disabled <?php echo e(is_null($emp->dept_name) ? 'selected' : ''); ?>>select
                                    Department</option>
                                <?php $__currentLoopData = $dept_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($dept->DEPTNAME); ?>"
                                        <?php echo e($emp->dept_name == $dept->DEPTNAME ? 'selected' : ''); ?>>
                                        <?php echo e($dept->DEPTNAME); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary mr-2 form-control ">Save Changes</button>
                            <a href="<?php echo e(route('employees')); ?>" class="btn btn-secondary form-control">Back</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/HMS/edit_emp.blade.php ENDPATH**/ ?>