<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Document</title>
    </head>
    <body>

            <form action="<?php echo e(route('users.store')); ?>" method="POST">
             <?php echo csrf_field(); ?>
             <label for="">Name:</label>
             <input type="text" name="name">
             <br/>
             <label for="">Family:</label>
             <input type="text" name="family">
             <button type="submit">save</button>
            </form>

         </body><?php /**PATH /var/www/resources/views/create.blade.php ENDPATH**/ ?>