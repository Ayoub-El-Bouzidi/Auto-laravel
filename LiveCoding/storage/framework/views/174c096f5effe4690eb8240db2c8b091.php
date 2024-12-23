<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Create Article</h1>
    <form action="/dashboard/articles" method="POST" class="needs-validation" novalidate>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu :</label>
            <textarea name="content" id="content" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ayoubb/laravel-controller-route/Prototype/resources/views/admin/articles/create.blade.php ENDPATH**/ ?>