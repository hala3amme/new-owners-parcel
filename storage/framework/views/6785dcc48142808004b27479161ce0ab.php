<?php echo $__env->make('layouts.partials.demo-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="px-4">
    <div class="flex items-center w-full mb-2 text-2xl font-semibold">
        <?php echo e($title ?? 'List'); ?>

        <?php if($showNew ?? false): ?>
            <div class="mx-auto"></div>
            <?php if (isset($component)) { $__componentOriginal78d8734e4b0eac380ba95e5a2785c4ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal78d8734e4b0eac380ba95e5a2785c4ed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.new','data' => ['title' => ''.e($actionTitle ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($actionTitle ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal78d8734e4b0eac380ba95e5a2785c4ed)): ?>
<?php $attributes = $__attributesOriginal78d8734e4b0eac380ba95e5a2785c4ed; ?>
<?php unset($__attributesOriginal78d8734e4b0eac380ba95e5a2785c4ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78d8734e4b0eac380ba95e5a2785c4ed)): ?>
<?php $component = $__componentOriginal78d8734e4b0eac380ba95e5a2785c4ed; ?>
<?php unset($__componentOriginal78d8734e4b0eac380ba95e5a2785c4ed); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
    <?php if($newInfo ?? false): ?>
        <p class="mb-4 text-xs font-light"><?php echo e(__('Note: Please login as vendor manager to be able create new data')); ?>

        </p>
    <?php endif; ?>
    
    <?php echo e($slot); ?>



</div>

<div wire:loading class="fixed top-0 bottom-0 left-0 z-50 w-full h-full ">
    <div class="fixed top-0 bottom-0 left-0 w-full h-full bg-black opacity-75"></div>
    <div class="fixed top-0 bottom-0 left-0 flex items-center justify-center w-full h-full">
        <img src="<?php echo e(asset('images/loading.svg')); ?>" class="" />
    </div>
</div>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/glover/resources/views/components/baseview.blade.php ENDPATH**/ ?>