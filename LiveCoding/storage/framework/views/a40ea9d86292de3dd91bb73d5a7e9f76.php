<li class="list-group-item d-flex justify-content-between align-items-center">
    <div>
        <div class="fw-bold text-decoration-none"><?php echo e($article['title']); ?></div>
    </div>
    <div>
        <form action="/dashboard/articles/<?php echo e($article['id']); ?>" method="POST" class="d-inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
        </form>
    </div>
</li>
<?php /**PATH /home/ayoubb/laravel-controller-route/Prototype/resources/views/components/article-card.blade.php ENDPATH**/ ?>