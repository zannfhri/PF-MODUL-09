<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    

    <?php $__env->startSection('content'); ?>
        <div class="container-sm my-5">
            <form action="<?php echo e(route('barangs.update', ['id' => $barangs->id])); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 col-xl-6">
                        <div class="mb-3 text-center">
                            <i class="bi-person-circle fs-1"></i>
                            <h4>Edit Employee</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kodeBarang" class="form-label">Firstname</label>
                                <input class="form-control <?php $__errorArgs = ['kodeBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                    name="kodeBarang" id="kodeBarang"
                                    value="<?php echo e($errors->any() ? old('kodeBarang') : $barangs->firstname); ?>"
                                    placeholder="Masukkan Kode Barang">
                                <?php $__errorArgs = ['kodeBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="namaBarang" class="form-label">Lastname</label>
                                <input class="form-control <?php $__errorArgs = ['namaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                    name="namaBarang" id="namaBarang"
                                    value="<?php echo e($errors->any() ? old('namaBarang') : $barangs->lastname); ?>"
                                    placeholder="Masukkan Nama Barang">
                                <?php $__errorArgs = ['namaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="hargaBarang" class="form-label">Email</label>
                                <input class="form-control <?php $__errorArgs = ['hargaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                    name="hargaBarang" id="hargaBarang"
                                    value="<?php echo e($errors->any() ? old('hargaBarang') : $barangs->email); ?>"
                                    placeholder="Masukkan Harga Barang">
                                <?php $__errorArgs = ['hargaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="deskripsiBarang" class="form-label">Age</label>
                                <input class="form-control <?php $__errorArgs = ['deskripsiBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                    name="deskripsiBarang" id="deskripsiBarang"
                                    value="<?php echo e($errors->any() ? old('deskripsiBarang') : $barangs->age); ?>"
                                    placeholder="Masukkan Deskripsi Barang">
                                <?php $__errorArgs = ['deskripsiBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="form-label">Position</label>
                                <select name="satuan" id="satuan" class="form-select">
                                    <?php
                                        $selected = '';
                                        if ($errors->any()) {

                                            $selected = old('satuan');
                                        } else {
                                            $selected = $barangs->satuan_id;
                                        }
                                    ?>
                                    <?php $__currentLoopData = $satuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $satuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($satuan->id); ?>"
                                            <?php echo e($selected == $satuan->id ? 'selected' : ''); ?>>
                                            <?php echo e($satuan->name . ' - ' . $satuan->code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="age" class="form-label">Curriculum Vitae (CV)</label>
                                <?php if($barangs->original_filename): ?>
                                    <h5><?php echo e($barangs->original_filename); ?></h5>
                                    <a href="<?php echo e(route('employees.downloadFile', ['employeeId' => $barangs->id])); ?>" class="btn btn-primary btn-sm mt-2">
                                        <i class="bi bi-download me-1"></i> Download CV
                                    </a>
                                    <div class="col-md-12 mt-3">
                                        <input type="file" class="form-control" name="cv" id="cv">
                                    </div>
                                <?php else: ?>
                                    <h5>N/A</h5>
                                    <div class="col-md-12 mt-3">
                                        <input type="file" class="form-control" name="cv" id="cv">
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="<?php echo e(route('barangs.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
    <?php $__env->stopSection(); ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fauzan\masterBarangUts\resources\views/barang/edit.blade.php ENDPATH**/ ?>