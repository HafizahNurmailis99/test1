

<?php $__env->startSection('title', 'Proses KGB'); ?>

<?php $__env->startSection('halaman', 'Proses KGB'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <a href="/pegawai/prokgb" class="btn btn-info my-3">Pegawai Yang Akan di Proses</a>

            <!-- <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?> -->

            <!-- <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Golongan</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pgw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($pgw->nip); ?></td>
                        <td><?php echo e($pgw->nama); ?></td>
                        <td><?php echo e($pgw->golongan); ?></td>
                        <td><?php echo e($pgw->jabatan); ?></td>
                        <td>
                            <a href="/pegawai/<?php echo e($pgw->id); ?>" class="badge badge-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table> -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kerjaPraktek\resources\views/pegawai/process.blade.php ENDPATH**/ ?>