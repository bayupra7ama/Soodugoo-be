<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Transaction Details</title>
   
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
                Transaction &raquo; <?php echo e($item->food->name); ?> by <?php echo e($item->user->name); ?>

            </h2>
         <?php $__env->endSlot(); ?>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="w-full md:w-1/6 px-4 mb-4 md:mb-0">
                                    <img src="<?php echo e($item->food->picturePath); ?>" alt="" class="w-full rounded" width="100px" class="img-fluid">
                                </div>
                            </div>
    
                            <div class="col-md-8">
                                
                                    <div class=" row d-flex flex-wrap mb-3">
                                        <div class="col-md-3">
                                            <div class="text-sm">Nama Produk</div>
                                            <div class="text-xl font-bold"><?php echo e($item->food->name); ?></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-sm">Quantity</div>
                                            <div class="text-xl font-bold"><?php echo e(number_format($item->quantity)); ?></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-sm">Total</div>
                                            <div class="text-xl font-bold"><?php echo e(number_format($item->total)); ?></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-sm">Status</div>
                                            <div class="text-xl font-bold"><?php echo e($item->status); ?></div>
                                        </div>
                                    </div>
                                    <div class="row  mb-3">
                                        <div class="col-md-3 ">
                                            <div class="text-sm">User Name</div>
                                            <div class="text-xl font-bold"><?php echo e($item->user->name); ?></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-sm">Email</div>
                                            <p class="text-xl font-bold"><?php echo e($item->user->email); ?></p>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="text-sm">Kota</div>
                                            <div class="text-xl font-bold"><?php echo e($item->user->city); ?></div>
                                        </div>
                                    </div>
                                    <div class="row flex-wrap mb-3">
                                        <div class="col-md-4">
                                            <div class="text-sm">Alamat</div>
                                            <div class="text-xl font-bold"><?php echo e($item->user->address); ?></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-sm">Nomor Rumah</div>
                                            <div class="text-xl font-bold"><?php echo e($item->user->houseNumber); ?></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-sm">Nomor Hp</div>
                                            <div class="text-xl font-bold"><?php echo e($item->user->phoneNumber); ?></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="text-sm">Payment URL :</div>
                                            <div class="text-lg">
                                                <a href="<?php echo e($item->payment_url); ?>"><?php echo e($item->payment_url); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-sm mb-1">Change Status</div>
                                            <a  href="<?php echo e(route('transaction.changeStatus', ['id' => $item->id, 'status' => 'ON_DELIVERY'])); ?>"
                                               class="p mb-2 text-bold bg-primary text-white px-2 rounded block text-center w-full ">
                                                On Delivery
                                            </a>
                                            <a href="<?php echo e(route('transaction.changeStatus', ['id' => $item->id, 'status' => 'DELIVERED'])); ?>"
                                               class="p mb-2 text-bold bg-success text-white px-2 rounded block text-center w-full  ">
                                                Delivered
                                            </a>
                                            <a href="<?php echo e(route('transaction.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED'])); ?>"
                                               class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                                Cancelled
                                            </a>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        
                       
                       
                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
</body>
</html>
<?php /**PATH D:\laragon\www\foodmarket-bb\resources\views/transaction/detail.blade.php ENDPATH**/ ?>