<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>tasks</h2>

  <?php if($errors->any()): ?>
  <div class="alert alert-danger">
      <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  </div>
<?php endif; ?>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>start-date</th>
        <th>end-date</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $tasks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($tasks->id); ?></td>
        <td><?php echo e($tasks->title); ?></td>
        <td><?php echo e($tasks->content); ?></td>
        <td><?php echo e($tasks->startdate); ?></td>
        <td><?php echo e($tasks->enddate); ?></td>
        <td><img src="<?php echo e(url('Task/'.$tasks->image)); ?>"  width="80px" height="80px" ></td>
        <td><a href='<?php echo e(url('Task/delete/'.$tasks->id)); ?>'> Delete</a></td>
        
        <td><a href='<?php echo e(url('Task/edit/'.$tasks->id)); ?>'> Edit</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH H:\xamp\htdocs\simpletask\resources\views/Task/index.blade.php ENDPATH**/ ?>