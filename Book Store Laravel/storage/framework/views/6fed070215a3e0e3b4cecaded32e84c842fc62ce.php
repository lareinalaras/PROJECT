<?php $__env->startSection('content'); ?>
    <div class="container-fluid bg-secondary w-75 p-2 mb-4">
        <div class="">
            <h1 class="text-white">Book List</h1>
        </div>
    </div>

    <div class="row">

        <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <div class="border p-3">
                    <img class="w-100" src="<?php echo e($buku->image); ?>" alt="">
                    <p><?php echo e($buku->title); ?></p>
                    <p>By</p>
                    <p><?php echo e($buku->author); ?></p>
                    <a class="btn btn-primary" href="/detail/<?php echo e($buku->id); ?>">Detail</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Laras\OneDrive - Bina Nusantara\PORTOFOLIO\UTS-WEB-PROGRAMMING\resources\views/body.blade.php ENDPATH**/ ?>