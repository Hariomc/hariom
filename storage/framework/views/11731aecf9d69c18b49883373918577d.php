<center>
    <h2>List of Product</h2>
    <table border="1">
        <tr>
            <th>#</th>
            <th>category name</th>
            <th>product</th>

        </tr>
        <tbody>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($member['id']); ?></td>
                    <td><?php echo e($member['category_name']); ?></td>
                    <td><?php echo e($member['product']); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <span><?php echo e($members->links()); ?></span>
    <style>
        .w-5 {
            display: none
        }
    </style>
</center>
<?php /**PATH D:\xampp\htdocs\laravel\resources\views/List.blade.php ENDPATH**/ ?>