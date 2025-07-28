<?php if (isset($component)) { $__componentOriginalc2d7d00e468a4ed4de65f87d86ee2c7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2d7d00e468a4ed4de65f87d86ee2c7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.table-base','data' => ['readyToLoad' => $readyToLoad,'tableName' => $tableName,'theme' => $theme,'lazy' => !is_null(data_get($setUp, 'lazy'))]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-powergrid::table-base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['readyToLoad' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($readyToLoad),'tableName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tableName),'theme' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($theme),'lazy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!is_null(data_get($setUp, 'lazy')))]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo $__env->make('livewire-powergrid::components.table.tr', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('loading', null, []); ?> 
        <?php echo $__env->make('livewire-powergrid::components.table.tr', ['loading' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('body', null, []); ?> 
        <?php echo $__env->renderWhen($this->hasColumnFilters, 'livewire-powergrid::components.inline-filters', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>

        <!--[if BLOCK]><![endif]--><?php if(is_null($data) || count($data) === 0): ?>
            <?php echo $__env->make('livewire-powergrid::components.table.th-empty', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php else: ?>
            <?php echo $__env->renderWhen($headerTotalColumn, 'livewire-powergrid::components.table-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>

            <!--[if BLOCK]><![endif]--><?php if(empty(data_get($setUp, 'lazy'))): ?>

                <!--[if BLOCK]><![endif]--><?php if(isset($setUp['detail'])): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $rowId = data_get($row, $this->realPrimaryKey);
                            $class = theme_style($theme, 'table.body.tr');
                        ?>

                        <tbody
                            wire:key="tbody-<?php echo e(substr($rowId, 0, 6)); ?>"
                            class="<?php echo e($class); ?>"
                        >
                            <?php echo $__env->make('livewire-powergrid::components.row', [
                                'rowIndex' => $loop->index + 1,
                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!--[if BLOCK]><![endif]--><?php if(data_get($setUp, 'detail.state.' . $rowId)): ?>
                                <tr
                                    class="<?php echo e($class); ?>"
                                >
                                    <?php echo $__env->make('livewire-powergrid::components.table.detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>

                        <?php echo $__env->renderWhen(isset($setUp['responsive']),
                            'livewire-powergrid::components.expand-container', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $rowId = data_get($row, $this->realPrimaryKey);
                            $class = theme_style($theme, 'table.body.tr');
                        ?>

                        <tr
                            wire:replace.self
                            x-data="pgRowAttributes({ rowId: <?php echo \Illuminate\Support\Js::from($rowId)->toHtml() ?>, defaultClasses: <?php echo \Illuminate\Support\Js::from($class)->toHtml() ?>, rules: <?php echo \Illuminate\Support\Js::from($row->__powergrid_rules)->toHtml() ?> })"
                            x-bind="getAttributes"
                        >
                            <?php echo $__env->make('livewire-powergrid::components.row', [
                                'rowIndex' => $loop->index + 1,
                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </tr>

                        <?php echo $__env->renderWhen(isset($setUp['responsive']),
                            'livewire-powergrid::components.expand-container', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php else: ?>
                <div>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = range(0, data_get($setUp, 'lazy.items')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $skip = $item * data_get($setUp, 'lazy.rowsPerChildren');
                            $take = data_get($setUp, 'lazy.rowsPerChildren');
                        ?>

                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('lazy-child', ['parentId' => $this->getId(),'childIndex' => $item,'primaryKey' => $primaryKey,'realPrimaryKey' => ''.e($this->realPrimaryKey).'','radio' => $radio,'radioAttribute' => $radioAttribute,'checkbox' => $checkbox,'checkboxAttribute' => $checkboxAttribute,'theme' => $theme,'setUp' => $setUp,'tableName' => $tableName,'parentName' => $this->getName(),'columns' => $this->visibleColumns,'data' => \PowerComponents\LivewirePowerGrid\DataSource\Processors\DataSourceBase::transform(
                                $data->skip($skip)->take($take),
                                $this,
                                true,
                            )]);

$__html = app('livewire')->mount($__name, $__params, ''.e($this->getLazyKeys).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <?php echo $__env->renderWhen($footerTotalColumn, 'livewire-powergrid::components.table-footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2d7d00e468a4ed4de65f87d86ee2c7d)): ?>
<?php $attributes = $__attributesOriginalc2d7d00e468a4ed4de65f87d86ee2c7d; ?>
<?php unset($__attributesOriginalc2d7d00e468a4ed4de65f87d86ee2c7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2d7d00e468a4ed4de65f87d86ee2c7d)): ?>
<?php $component = $__componentOriginalc2d7d00e468a4ed4de65f87d86ee2c7d; ?>
<?php unset($__componentOriginalc2d7d00e468a4ed4de65f87d86ee2c7d); ?>
<?php endif; ?>
<?php /**PATH /home/hamid/gcom/vendor/power-components/livewire-powergrid/src/Providers/../../resources/views/components/table.blade.php ENDPATH**/ ?>