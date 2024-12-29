<div class="container mt-4">
    <h4><?php echo e($pageTitle); ?></h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3
    border">
        <?php if(Route::currentRouteName() == 'home'): ?>
            <div class="bi-house-fill me-3 fs-1"></div>
        <?php elseif(Route::currentRouteName() == 'profile'): ?>
            <div class="bi-person-circle me-3 fs-1"></div>
        <?php endif; ?>
        <h4 class="mb-0">Well done! this is <?php echo e($pageTitle); ?>.</h4>
    </div>
</div>
<?php /**PATH D:\xampp\Modul 18\resources\views/default.blade.php ENDPATH**/ ?>