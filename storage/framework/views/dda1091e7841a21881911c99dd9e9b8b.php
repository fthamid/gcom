<?php
    $columns = collect($columns)->map(function ($column) {
        return data_forget($column, 'rawQueries');
    });
?>
<div <?php if($deferLoading): ?> wire:init="fetchDatasource" <?php endif; ?>>
    <div class="col-md-12">
        <?php echo $__env->make(theme_style($theme, 'layout.header'), [
            'enabledFilters' => $enabledFilters,
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <?php if(config('livewire-powergrid.filter') === 'outside'): ?>
        <?php
            $filtersFromColumns = $columns
                ->filter(fn($column) => filled(data_get($column, 'filters')));
        ?>

        <!--[if BLOCK]><![endif]--><?php if($filtersFromColumns->count() > 0): ?>
            <?php if (isset($component)) { $__componentOriginalf811bdbfb51d98baa2ba69d70996b35b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf811bdbfb51d98baa2ba69d70996b35b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.frameworks.bootstrap5.filter','data' => ['enabledFilters' => $enabledFilters,'tableName' => $tableName,'columns' => $columns,'filtersFromColumns' => $filtersFromColumns,'theme' => $theme]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-powergrid::frameworks.bootstrap5.filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['enabled-filters' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($enabledFilters),'tableName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tableName),'columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns),'filtersFromColumns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($filtersFromColumns),'theme' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($theme)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf811bdbfb51d98baa2ba69d70996b35b)): ?>
<?php $attributes = $__attributesOriginalf811bdbfb51d98baa2ba69d70996b35b; ?>
<?php unset($__attributesOriginalf811bdbfb51d98baa2ba69d70996b35b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf811bdbfb51d98baa2ba69d70996b35b)): ?>
<?php $component = $__componentOriginalf811bdbfb51d98baa2ba69d70996b35b; ?>
<?php unset($__componentOriginalf811bdbfb51d98baa2ba69d70996b35b); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div
        class="<?php echo e(theme_style($theme, 'table.layout.div')); ?>"
    >
        <?php echo $__env->make($table, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <div class="row">
        <div class="col-12 overflow-auto">
            <?php echo $__env->make(theme_style($theme, 'footer.view'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/hamid/gcom/vendor/power-components/livewire-powergrid/src/Providers/../../resources/views/components/frameworks/bootstrap5/table-base.blade.php ENDPATH**/ ?>