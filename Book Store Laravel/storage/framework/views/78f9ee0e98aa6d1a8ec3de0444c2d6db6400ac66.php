<?php $__env->startSection('content'); ?>
    <div class="container-xl">

        <nav class="navbar d-flex justify-content-center" style="background-color: #6D747A">
            <div class="container">
                <span class="fw-normal mb-0 h2 text-white w-100">Publish List</span>
            </div>
        </nav>

        <div class="row ">
            <?php $__currentLoopData = $publish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 18rem">
                        <img src=<?php echo e(asset('image/' . $p->image)); ?> class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="text-start card-title"><?php echo e($p->name); ?></h4>
                            <div class="text-start">
                                <a href=<?php echo e('/pubdetail' . $p->id); ?> class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING LEC\UTS-WEB-PROGRAMMING\resources\views/publisher.blade.php ENDPATH**/ ?>