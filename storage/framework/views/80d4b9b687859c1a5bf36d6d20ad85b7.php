

<?php $__env->startSection('content'); ?>
    <div class="col-md col-12 mt-2 mx-2 d-flex justify-content-center desgSec">
        <div class="col-md-8 col-sm-12  mt-3 ">
            <div class=" p-3 empHeading b5px">
                <div class="mb-2">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('save_emp')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <p class="pt-3 font-weight-bold text-center display-4">Add New Employee</p>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" type="text" placeholder="Employee Name" name="name">
                            <input class="form-control mb-2" type="text" placeholder="Father Name" name="father_name">
                        </div>
                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Birth</label>
                            <input class="form-control mb-2" type="date" name="dob">
                        </div>
                        <div class="d-flex gap-2">
                            <label class="col-4 mt-1">Select Date of Joining</label>
                            <input class="form-control mb-2" type="date" name="doj">
                        </div>


                        <div class="d-flex gap-2">
                            <input class="form-control mb-2" type="text" placeholder="CNIC" name="cnic">
                        </div>
                        <div class="d-flex gap-2">
                            <input class="form-control mr-2 mb-2" type="text" placeholder="Phone No." name="ph">
                            <input class="form-control mb-2" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="d-flex gap-2">
                            <select name="gender" class="form-control mr-2 mb-2" required>
                                <option value="" disabled selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>

                            <select name="desg_name" class="form-control mr-2 mb-2" required>
                                <option value="" disabled selected>Designation</option>
                                <?php $__currentLoopData = $desg_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($desg->name); ?>"><?php echo e($desg->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <select name="dept_name" class="form-control mb-2" required>
                                <option value="" disabled selected>Department</option>
                                <?php $__currentLoopData = $dept_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($dept->DEPTNAME); ?>"><?php echo e($dept->DEPTNAME); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary mr-2 form-control ">Save</button>
                            <a href="<?php echo e(route('employees')); ?>" class="btn btn-secondary form-control">Back</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Main.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\AMS-21\resources\views/HMS/new_emp.blade.php ENDPATH**/ ?>