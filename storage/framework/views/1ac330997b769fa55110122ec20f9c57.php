
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Transaction </title>
 
</head>
<body>

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
                <?php echo e(__('Transaction')); ?>

            </h2>
         <?php $__env->endSlot(); ?>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white">
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Food</th>
                            <th class="border px-6 py-4">User</th>
                            <th class="border px-6 py-4">Quantity</th>
                            <th class="border px-6 py-4">Total</th>
                            <th class="border px-6 py-4">Status</th>
                            <th class="border px-6 py-4">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="border px-6 py-4"><p><?php echo e($item->id); ?></p></td>
                                    <td class="border px-6 py-4 "><?php echo e($item->food->name); ?></td>
                                    <td class="border px-6 py-4 "><?php echo e($item->user->name); ?></td>
                                    <td class="border px-6 py-4"><?php echo e($item->quantity); ?></td>
                                    <td class="border px-6 py-4"><?php echo e(number_format($item->total)); ?></td>
                                    <td class="border px-6 py-4"><?php echo e($item->status); ?></td>
                                    <td class="border px-6 py- text-center">
                                        <a href="<?php echo e(route('transaction.show', $item->id)); ?>" class="btn btn-primary">
                                            View
                                        </a>
                                        <form action="<?php echo e(route('transaction.destroy', $item->id)); ?>" method="POST" class="inline-block">
                                            <?php echo method_field('delete') . csrf_field(); ?>

                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                   <td colspan="6" class="border text-center p-5">
                                       Data Tidak Ditemukan
                                   </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-5">
                    <?php echo e($transaction->links()); ?>

                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php /**PATH D:\laragon\www\foodmarket-bb\resources\views/transaction/index.blade.php ENDPATH**/ ?>