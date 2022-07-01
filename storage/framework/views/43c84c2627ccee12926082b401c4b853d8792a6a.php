    <?php if(session()->has('message-success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('message-success')); ?>

        </div>
        <?php elseif(session()->has('message-error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session()->get('message-error')); ?>

        </div>
          <?php endif; ?>
<?php /**PATH H:\xamp\htdocs\simpletask\resources\views/messages.blade.php ENDPATH**/ ?>