<!doctype html>
<html lang="en">

<head>
    <title>HRIS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo e(asset('/style/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e('/favicon.png'); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-between fixed-top header">
        <div class="col-sm-2 col-3 bg-white d-flex justify-content-center">
            <a onclick="menuBar()" src="/dashboard.html" class=" amsTag hidden"><img class="img-sm-fluid logo mt-1"
                    src="/img/Logo.PNG" alt=""></a>
        </div>
        <div class="dropdown show mt-3 mb-2 mr-4 ">
            <img class="profilePic" src="/img/dummy-profile-image.jpg" alt="">
            <a class="text-light display-5 amsTag dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Muhammad Bilal
            </a>

            <div class="dropdown-menu mt-3 px-2 " aria-labelledby="dropdownMenuLink">
                <button class="dropdown-item " href="#">Change Password</button>
                <button class="dropdown-item" href="#">Log Out</button>
            </div>
        </div>
    </div>
    <div class="row no-gutters rightSide mt-5">
        <div class="col-sm-2 d-md-block d-none bg-info leftSide ">

            <div class="list-group ">
                <a class="list-group-item list-group-item-active mt-3 active bg-info border-0 text-white text-center "
                    href="/dashboard">Dashboard
                </a>

                <button class="list-group-item list-group-item-active border-0 text-white bg-info "
                    data-toggle="collapse" href="#HRMenu">HMS</button>
                <div class="collapse" id="HRMenu">
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('employees')); ?>">Employees</a>
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('leave')); ?>">Leave</a>
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('dept')); ?>">Department</a>
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('desg')); ?>">Designation</a>
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('reset_password')); ?>">Reset Password</a>
                    
                </div>
                <button class="list-group-item list-group-item-active border-0 text-white bg-info "
                    data-toggle="collapse" href="#ReportMenu">Reports</button>
                <div class="collapse" id="ReportMenu">
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('attendance')); ?>">Attendance
                        Detail</a>
                    <a class="btn text-white bg-secondary form-control " href="<?php echo e(route('machine')); ?>">Machine
                        Log</a>
                    <!-- <a class="btn text-white bg-secondary form-control " href="#">My Attendance</a>
                    <a class="btn text-white bg-secondary form-control " href="#">My Machine Log</a> -->
                </div>
                

                <!-- <button class="list-group-item list-group-item-active border-0 text-white bg-info "
                data-toggle="collapse" href="#accounts">Accounts</button>
                    <div class="collapse" id="accounts">
                        <a class="btn text-white bg-secondary form-control " href="#">Salary</a>
                        <a class="btn text-white bg-secondary form-control " href="#">Pay Slip</a>
                    </div> -->
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>

    </div>

    <footer class="bg-secondary display-4 text-center p-2 text-white">
        <h5 style="font-size: 16px;">2025 &#169; Copyright. All rights reserved by HRIS.</h5>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="<?php echo e('/js/index.js'); ?>"></script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\AMS-Project\resources\views/main/master.blade.php ENDPATH**/ ?>