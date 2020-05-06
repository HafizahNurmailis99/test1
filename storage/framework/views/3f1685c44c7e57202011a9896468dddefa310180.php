

<?php $__env->startSection('title', 'Data Pegawai'); ?>

<?php $__env->startSection('halaman', 'Daftar Pegawai'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="" class="btn btn-info my-3">Proses KGB Pegawai</a>
<!-- 
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?> -->

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Gaji SK Lama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($employee->nip); ?></td>
                            <td><?php echo e($employee->nama); ?></td>
                            <td><?php echo e($employee->tgl_gajian_akhir); ?></td>
                            <td>
                                <a href="kgb/<?php echo e($employee->id); ?>/processkgb" class="badge badge-success">Proses</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kerjaPraktek\resources\views/kgb/index.blade.php ENDPATH**/ ?>