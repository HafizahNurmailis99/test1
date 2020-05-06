

<?php $__env->startSection('title', 'Detail Students'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-2">Detail Students</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($student->nama); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student->nim); ?></h6>
                        <p class="card-text"><?php echo e($student->email); ?></p>
                        <p class="card-text"><?php echo e($student->jurusan); ?></p>
                        
                        <a href="<?php echo e($student->id); ?>/edit" class="btn btn-primary">edit</a>

                        <form action="<?php echo e($student->id); ?>" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <!--jika pakai form, sebaiknya juga pakai <?php echo csrf_field(); ?> untuk menangani cross side read blabla-->
                        <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        

                        <a href="/students" class="card-link">kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kerjaPraktek\resources\views/students/show.blade.php ENDPATH**/ ?>