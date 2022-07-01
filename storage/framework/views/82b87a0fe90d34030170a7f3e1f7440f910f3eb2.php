<!DOCTYPE html>
<html>

<head>
    <title>index user</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
        .m-r-1em {
            margin-right: 1em;
        }
        .m-b-1em {
            margin-bottom: 1em;
        }
        .m-l-1em {
            margin-left: 1em;
        }
        .mt0 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Read Users </h1>
            
            <?php echo $__env->make('messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <a href="<?php echo e(url('Users/Create')); ?>" class='btn btn-primary m-r-1em' >Account</a>
         <a href="<?php echo e(url('Logout')); ?>" class='btn btn-primary m-r-1em' >Logout</a>
        <br>
        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>action</th>
            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($users->id); ?></td>
                    <td><?php echo e($users->name); ?></td>
                    <td><?php echo e($users->email); ?></td>

                    <td>
                        <a href='<?php echo e(url('Users/Delete/'.$users->id)); ?>' class='bnt btn-danger m-r-1em'>Delete</a>
                         <a href='<?php echo e(url('Users/edit/'.$users->id)); ?>' class='bnt btn-danger m-r-1em'>Edit</a>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>
<?php /**PATH H:\xamp\htdocs\simpletask\resources\views/users/index.blade.php ENDPATH**/ ?>