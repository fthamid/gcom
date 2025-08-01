<!--[if BLOCK]><![endif]--><?php if(count($enabledFilters)): ?>
    <div
        class="col-md-12 d-flex table-responsive mt-1"
    >
        <?php if(count($enabledFilters) > 1): ?>
            <div
                wire:click.prevent="clearAllFilters()"
                class="pe-1"
                role="button"
            >
                <span
                    class="badge bg-secondary"><?php echo e(trans('livewire-powergrid::datatable.buttons.clear_all_filters')); ?>

                    <svg
                        width="10"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 8 8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-width="1.5"
                            d="M1 1l6 6m0-6L1 7"
                        />
                    </svg>
                </span>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $enabledFilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if(isset($filter['label'])): ?>
                <div
                    wire:click.prevent="clearFilter('<?php echo e($filter['field']); ?>')"
                    class="pe-1"
                    role="button"
                >
                    <span class="badge text-bg-light"><?php echo e($filter['label']); ?>

                        <svg
                            width="10"
                            stroke="currentColor"
                            fill="none"
                            viewBox="0 0 8 8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-width="1.5"
                                d="M1 1l6 6m0-6L1 7"
                            />
                        </svg>
                    </span>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /home/hamid/gcom/vendor/power-components/livewire-powergrid/src/Providers/../../resources/views/components/frameworks/bootstrap5/header/enabled-filters.blade.php ENDPATH**/ ?>