

<?php $__env->startSection('title', 'Detail Pegawai'); ?>

<?php $__env->startSection('halaman', 'Detail Pegawai'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo e($employee->nama); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Tempat dan tanggal lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo e($employee->tempat_lahir); ?>, <?php echo e($employee->tgl_lahir); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo e($employee->nip); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Pangkat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo e($employee->golongan); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo e($employee->jabatan); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Kantor/Tempat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?php echo e($employee->kantor); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Gaji Pokok Lama</label>
                                <div class="col-sm-10">
                                    <input type="decimal" readonly class="form-control-plaintext" value="Rp. <?php echo e($employee->gaji_pokok_akhir); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Tanggal Gaji Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="date" readonly class="form-control-plaintext" value="<?php echo e($employee->tgl_gajian_akhir); ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Tanggal Mulai Kerja</label>
                                <div class="col-sm-10">
                                    <input type="date" readonly class="form-control-plaintext" value="<?php echo e($employee->tgl_masuk_kerja); ?>">
                                </div>
                            </div>
                        </form>
                        
                        <a href="<?php echo e($employee->id); ?>/edit" class="btn btn-primary">edit</a>

                        <form action="<?php echo e($employee->id); ?>" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <!--jika pakai form, sebaiknya juga pakai <?php echo csrf_field(); ?> untuk menangani cross side read blabla-->
                        <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        

                        <a href="/pegawai" class="card-link">kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kerjaPraktek\resources\views/pegawai/show.blade.php ENDPATH**/ ?>