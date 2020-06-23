   
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">

                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Price</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($pro->id); ?></td>
                    <td><?php echo e($pro->name); ?></td>
                    <td><?php echo e($pro->slug); ?></td>
                    <td><?php echo e($pro->price); ?></td>
                    <td><?php echo e($pro->description); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
    </table>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mvc/views/homepage/index.blade.php ENDPATH**/ ?>