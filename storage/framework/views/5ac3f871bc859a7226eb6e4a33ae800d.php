 
 
 <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Food')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5">
                
                <a href="<?php echo e(route('food.create')); ?>" class="bg-green-700 btn">
                   + Create Food
                </a>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                        <th class="border px-6 py-4">ID</th>
                        <th class="border px-6 py-4">Name</th>
                        <th class="border px-6 py-4">Price</th>
                        <th class="border px-6 py-4">Rate</th>
                        <th class="border px-6 py-4">Types</th>
                        <th class="border px-6 py-4">Action</th>
                    </thead>

                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $food; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            
                       <tr>
                        <td class="border px-6 py-4"><?php echo e($data->id); ?></td>
                        <td class="border px-6 py-4"><?php echo e($data->name); ?></td>
                        <td class="border px-6 py-4"><?php echo e(number_format($data-> price)); ?></td>
                        <td class="border px-6 py-4"><?php echo e($data->rate); ?></td>
                        <td class="border px-6 py-4"><?php echo e($data->types); ?></td>
                        <td class="border px-6 py-4 text-center"><a  href="<?php echo e(Route('food.edit',$data->id)); ?>">Edit | </a>
                        <form action="<?php echo e(Route('food.destroy',$data->id)); ?>" method="POST" class="inline-block">
                        <?php echo method_field('delete') . csrf_field(); ?>

                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded">hapus</button>
                        </form>
                        </td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td>
                                <td colspan="3" class="border text-center p-5">data tidak di temukan</td>
                            </td>
                        </tr>
                            
                        <?php endif; ?>
                    </tr>
                    </tbody>
                </table>

               
            </div>
            <div class="text-center mt-5"><?php echo e(($food->links())); ?></div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\foodmarket-bb\resources\views\food\index.blade.php ENDPATH**/ ?>