<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Welcome to the Dashboard</h1>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
    <h2 class="mb-4">Liste des Articles <a href="/dashboard/articles/create" class="btn btn-primary ms-2">Create</a></h2>
    <ul class="list-group">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <?php if (isset($component)) { $__componentOriginalc197a308f8f389d8eec7ce56253b9544 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc197a308f8f389d8eec7ce56253b9544 = $attributes; } ?>
<?php $component = App\View\Components\ArticleCard::resolve(['article' => $article] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ArticleCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc197a308f8f389d8eec7ce56253b9544)): ?>
<?php $attributes = $__attributesOriginalc197a308f8f389d8eec7ce56253b9544; ?>
<?php unset($__attributesOriginalc197a308f8f389d8eec7ce56253b9544); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc197a308f8f389d8eec7ce56253b9544)): ?>
<?php $component = $__componentOriginalc197a308f8f389d8eec7ce56253b9544; ?>
<?php unset($__componentOriginalc197a308f8f389d8eec7ce56253b9544); ?>
<?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ayoubb/laravel-controller-route/Prototype/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>