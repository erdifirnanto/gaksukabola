<?php $__env->startSection('content'); ?>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card bg-light border-warning" style="border-radius: 20px">
                        <div class="card-body">
                            
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

                            <p>
                                Silahkan melakukan pengecekan email untuk proses verifikasi. <br>
                                Apabila kamu tidak mendapatkan silahkan <a href="<?php echo e(url("/email/verification/$userID")); ?>">Kirim Ulang Verifikasi</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webku\resources\views/user/register_success.blade.php ENDPATH**/ ?>