<?php echo e(Form::open(array('url'=>'roles.show','method'=>'get'))); ?>

<div class="modal-body">
    <div class="row">
        <table>
            <tbody>
                <td class="Permission">
                    <?php $__currentLoopData = $role->permissions()->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge rounded p-2 m-1 px-3 bg-primary"><?php echo e($permissionName); ?>

                        
                    </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tbody>
        </table>
        
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Close')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
</div>
<?php echo e(Form::close()); ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/role/show.blade.php ENDPATH**/ ?>