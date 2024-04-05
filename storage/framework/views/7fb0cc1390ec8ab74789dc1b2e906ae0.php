<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .conference-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .conference-details h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="conference-details">
            <h2><?php echo e($conference->name); ?></h2>
            <p><strong>Date:</strong> <?php echo e($conference->date); ?></p>
            <p><strong>Location:</strong> <?php echo e($conference->location); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!--JSbiblioteka-->
    <script>
$(document).ready(function() {
    $('.button').click(function() {
        alert('Paspaudėte mygtuką!');
    });
});
    </script>
</body>
</html>
<?php /**PATH C:\Users\Aorus\SD-1\resources\views/welcome.blade.php ENDPATH**/ ?>