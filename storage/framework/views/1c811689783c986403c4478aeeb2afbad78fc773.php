

<?php $__env->startSection('title', 'Proses KGB Pegawai'); ?>

<?php $__env->startSection('halaman', 'Proses KGB Pegawai'); ?>

<?php $__env->startSection('container'); ?>

hiya hiya

        <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
        <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kerjaPraktek\resources\views/kgb/riwayatcetak.blade.php ENDPATH**/ ?>