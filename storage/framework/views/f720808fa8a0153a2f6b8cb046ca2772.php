<!-- Tailwind -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<?php echo \Livewire\Livewire::styles(); ?>


<link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<?php
    $savedColor = setting('websiteColor', '#21a179');
    $appColor = new \OzdemirBurak\Iris\Color\Hex($savedColor);
    $appColorHsla = new \OzdemirBurak\Iris\Color\Hsla('' . $appColor->toHsla()->hue() . ',40%, 75%, 0.45');
    $colorShades = [50, 100, 200, 300, 400, 500, 600, 700, 800, 900];
    $colorShadePercentages = [95, 90, 75, 50, 25, 0, 5, 15, 25, 35];
    $appColorShades = [];
    foreach ($colorShades as $key => $colorShade) {
        if ($key < 5) {
            $appColorShade = $appColor->brighten($colorShadePercentages[$key]);
        } else {
            $appColorShade = $appColor->darken($colorShadePercentages[$key]);
        }
        $appColorShades[] = $appColorShade;
    }

    //

?>

<style>
    .focus\:shadow-outline-primary:focus {
        box-shadow: 0 0 0 3px <?php echo e($appColorHsla); ?>;
    }
</style>
<style>
    <?php $__currentLoopData = $appColorShades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appColorShade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
        /* color shade */
        $colorShade =$colorShades[$key];
    ?>

    .bg-primary-<?php echo e($colorShade); ?> {
        background-color: <?php echo e($appColorShade); ?> !important;
    }

    .focus\:border-primary-<?php echo e($colorShade); ?>:focus {
        border-color: <?php echo e($appColorShade); ?> !important;
    }

    .hover\:bg-primary-<?php echo e($colorShade); ?>:hover {
        background-color: <?php echo e($appColorShade); ?> !important;
    }

    .border-primary-<?php echo e($colorShade); ?>:focus {
        border-color: <?php echo e($appColorShade); ?> !important;
    }



    .text-primary-<?php echo e($colorShade); ?> {
        color: <?php echo e($appColorShade); ?> !important;
    }

    .ring-primary-<?php echo e($colorShade); ?> {
        color: <?php echo e($appColorShade); ?> !important;
    }

    .border-primary-<?php echo e($colorShade); ?> {
        border-color: <?php echo e($appColorShade); ?> !important;
    }

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</style>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/glover/resources/views/layouts/partials/styles.blade.php ENDPATH**/ ?>