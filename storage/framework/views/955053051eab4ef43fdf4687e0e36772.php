<div>
    <?php if ($__env->exists(data_get($setUp, 'footer.includeViewOnTop'))) echo $__env->make(data_get($setUp, 'footer.includeViewOnTop'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!--[if BLOCK]><![endif]--><?php if(filled(data_get($setUp, 'footer.perPage')) &&
            count(data_get($setUp, 'footer.perPageValues')) > 1 &&
            blank(data_get($setUp, 'footer.pagination'))): ?>
        <footer
                class="<?php echo e(theme_style($theme, 'footer.footer', 'mt-50 pb-1 w-100 align-items-end px-1 d-flex flex-wrap justify-content-sm-center justify-content-md-between')); ?>"
        >
            <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
                <?php if(filled(data_get($setUp, 'footer.perPage')) && count(data_get($setUp, 'footer.perPageValues')) > 1): ?>
                    <div class="d-flex flex-lg-row align-items-center">
                        <label class="w-auto">
                            <select
                                    wire:model.live="setUp.footer.perPage"
                                    class="form-select <?php echo e(theme_style($theme, 'footer.select')); ?>"
                            >
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = data_get($setUp, 'footer.perPageValues'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value); ?>">
                                        <!--[if BLOCK]><![endif]--><?php if($value == 0): ?>
                                            <?php echo e(trans('livewire-powergrid::datatable.labels.all')); ?>

                                        <?php else: ?>
                                            <?php echo e($value); ?>

                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </select>
                        </label>
                        <small class="ms-2 text-muted">
                            <?php echo e(trans('livewire-powergrid::datatable.labels.results_per_page')); ?>

                        </small>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="col-auto overflow-auto mt-2 mt-sm-0">
                <!--[if BLOCK]><![endif]--><?php if(method_exists($data, 'links')): ?>
                    <?php echo $data->links(data_get($theme, 'root') . '.pagination', [
                        'recordCount' => data_get($setUp, 'footer.recordCount'),
                    ]); ?>

                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </footer>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(filled(data_get($setUp, 'footer.pagination'))): ?>
        <footer>
            <!--[if BLOCK]><![endif]--><?php if(method_exists($data, 'links')): ?>
                <?php echo $data->links(data_get($setUp, 'footer.pagination'), [
                    'recordCount' => data_get($setUp, 'footer.recordCount'),
                ]); ?>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </footer>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php if ($__env->exists(data_get($setUp, 'footer.includeViewOnBottom'))) echo $__env->make(data_get($setUp, 'footer.includeViewOnBottom'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php /**PATH /home/hamid/gcom/vendor/power-components/livewire-powergrid/src/Providers/../../resources/views/components/frameworks/bootstrap5/footer.blade.php ENDPATH**/ ?>