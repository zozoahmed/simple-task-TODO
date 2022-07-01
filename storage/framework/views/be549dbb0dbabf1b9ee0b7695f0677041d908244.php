
<!DOCTYPE html>
<html lang="en">

<head>
    <title>create task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container">
        <h2>create task</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $__env->make('messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo url('/Task/Store'); ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="form-group">
                <label for="exampleInpuTitle">Title</label>
                <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="" name="title"
                    placeholder="Enter Title" value="<?php echo old('title'); ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputContent">content</label>
                <input type="text" class="form-control" id="exampleInputContent" aria-describedby="content"
                    name="content" placeholder="Enter content" value="<?php echo old('content'); ?>">
            </div>
             <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>

             <div class="form-group">
           <label for="date">start date:</label>
            <input type="date" class="form-control" id="date" name="start-date">
            </div>
             <div class="form-group">
           <label for="date">end date</label>
            <input type="date" class="form-control" id="date" name="end-date">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>
<?php /**PATH H:\xamp\htdocs\simpletask\resources\views/Task/create.blade.php ENDPATH**/ ?>