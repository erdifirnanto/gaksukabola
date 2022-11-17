<?php $__env->startSection('content'); ?>
    <section class="my-0" style="background-color:rgb(255, 252, 238)">
        <div class="img js-fullheight" style="background-image:url(<?php echo e(url('assets/images/1.jpeg')); ?>)">
            <div class="container-fluid bg-warning p-5 text-dark bg-opacity-10">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="card bg-light border-warning" style="border-radius: 20px">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="<?php echo e(asset('assets/images/rm-logo.png')); ?>" class="img-fluid mb-2" width="70">
                                    <h4 class="text-center">Login</h4>
                                </div>


                                
                                <?php if(Session::has('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(Session::get('success')); ?>

                                        <?php
                                            Session::forget('success');
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(Session::has('error')): ?>
                                    <div class="alert alert-warning">
                                        <?php echo e(Session::get('error')); ?>

                                        <?php
                                            Session::forget('error');
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Menampilkan Error form validation -->
                                <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <b>There was an error in the data input process</b> <br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <form action="<?php echo e(url("user/process-login")); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="d-grid gap-2 mt-4">
                                        <button type="submit" class="btn btn-primary" type="button">Login</button>
                                    </div>

                                    <div class="d-grid gap-2 mt-4 mb-1">
                                        <p class="mb-0">Don't have an account yet?<a href="<?php echo e(url("user/register")); ?>" class="btn btn-link">Register</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webku\resources\views/user/login.blade.php ENDPATH**/ ?>