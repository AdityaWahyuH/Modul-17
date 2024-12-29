<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="padding-top: 40px;">
    <!-- Header Card -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Menyertakan bagian default -->
    <?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="p-6 m-20 bg-white rounded shadow">
        <!-- Menampilkan chart -->
        <?php echo $chart->container(); ?>

    </div>

    <!-- Memasukkan CDN dan script chart -->
    <script src="<?php echo e($chart->cdn()); ?>"></script>
    <?php echo e($chart->script()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\Modul 18\resources\views/home.blade.php ENDPATH**/ ?>