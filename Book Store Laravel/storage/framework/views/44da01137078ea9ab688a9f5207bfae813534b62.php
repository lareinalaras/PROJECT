<?php $__env->startSection('content'); ?>
    <div class="container" style="width: 40rem">
        <nav class="navbar d-flex justify-content-center" style="background-color: #6D747A">
            <div class="container-fluid">
                <span class="fw-normal mb-0 h2 text-white">Book Detail</span>
            </div>
        </nav>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 40rem">
                <img src=<?php echo e(asset('img/' . $book->image)); ?> class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="text-start mb-2">Title : <?php echo e($book->title); ?></p>
                    <p class="text-start mb-2">Author : <?php echo e($book->author); ?></p>
                    <p class="text-start mb-2">Publisher : <?php echo e($book->publisherName); ?></p>
                    <p class="text-start mb-2">Year : <?php echo e($book->year); ?></p>
                    <p class="text-start mb-2">Synopsis : </p>
                    <p class="text-start fs-6">
                        <?php echo e($book->synopsis); ?>

                    </p>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING LEC\UTS-WEB-PROGRAMMING\resources\views/detail.blade.php ENDPATH**/ ?>