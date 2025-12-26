<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">لیست کاربران</h1>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary mb-3">ایجاد کاربر جدید</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>تعداد پست‌ها</th>
                <th>تعداد کامنت‌ها</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->posts->count()); ?></td>
                <td><?php echo e($user->comments->count()); ?></td>
                <td>
                    <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-warning">ویرایش</a>
                    <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('آیا مطمئن هستید؟')">حذف</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sermostafack/projects/web-page-design/resources/views/users/index.blade.php ENDPATH**/ ?>