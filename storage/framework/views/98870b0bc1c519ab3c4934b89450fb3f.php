<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <title><?php echo e($title ?? 'Page Title'); ?></title>
    </head>
    <body>
    
    <?php echo e($slot); ?>

         
    </body>
</html>
<?php /**PATH /home/hamid/gcom/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>