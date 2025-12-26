<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">لیست پست‌ها</h1>
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-3">ایجاد پست جدید</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th>کاربر</th>
                <th>تعداد کامنت‌ها</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->user->name); ?></td>
                <td><?php echo e($post->comments->count()); ?></td>
                <td><?php echo e($post->created_at->format('Y-m-d')); ?></td>
                <td>
                    <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-warning">ویرایش</a>
                    <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" class="d-inline">
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sermostafack/projects/web-page-design/resources/views/posts/index.blade.php ENDPATH**/ ?>