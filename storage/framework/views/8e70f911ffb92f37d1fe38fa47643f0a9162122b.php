<?php $__env->startSection('title', '| Payments'); ?>
<?php $__env->startSection('content'); ?>

<?php if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com'): ?>

<!-- <script>window.location="<?php echo e(url('/dashboard')); ?>"</script> -->

<?php else: ?>

<script>alert("You don't have permision to access this page!")</script>

<script>window.location="<?php echo e(url('/')); ?>"</script>

<?php endif; ?>

<?php if($message = Session::get('success')): ?>
    <div class="mt-32 flex bg-success p-6" role="alert">
        <div class="container px-4 mx-auto items-center">
            <div class="flex flex-row alert alert-success alert-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <!--<button type="button" class="close text-2xl mr-6" data-dismiss="alert">x</button>-->
                <span class="text-2xl"><?php echo e($message); ?></span>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div>
        <div class="container px-4 mx-auto">
            <div class="pt-24 flex flex-col justify-center items-center">
            
                <div class="w-full bg-gradient-to-br from-quinary to-senary rounded-3xl p-6 md:p-12 my-14">
                    <h1 class="mb-12 text-5xl font-goldplayBold flex-1">
                        All Minted NFT's
                    </h1>
                    <div class="payments-table table-wrapper">
                        <table id="example" class="w-full">
                            <thead class="bg-senary font-goldplaySemibold">
                                <tr>
                                    <th class="w-1/6">Image Name</th>
                                    <th class="w-1/6">Price</th>
                                    <th class="w-1/6">Buyer</th>
                                    <th class="w-1/6">Tx ID</th>
                                    <th class="w-1/6">Image</th>
                                    <th class="w-1/6">Mint Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-center items">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="item">
                                    <td class="font-goldplayBold">
                                        <?php echo e($wall->image_name); ?>

                                    </td>
                                    <td class="font-goldplayBold">
                                        <?php echo e($wall->amount); ?>

                                    </td>
                                    <td>
                                        <?php echo e($wall->name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($wall->tx_id); ?>

                                    </td>
                                    <td>
                                        <img class="img-responsive img-thumbnail" src="<?php echo e(URL::to('/')); ?>/Uploads/<?php echo e($wall->url); ?>">
                                    </td>
                                    <td>
                                        <?php echo e($wall->minted); ?>

                                    </td>
                                </tr>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <p class="lead mt-6">Displaying <span class="shownLength font-goldplayBold"></span> of <span class="listLength font-goldplayBold"></span> results.</p>
                    <div class="flex justify-center mt-12 buttonToogle">
                        <button class="button-secondary-outline flex items-center showMore">
                            <svg xmlns="http://www.w3.org/2000/svg " class="h-4 w-4 mr-3 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                                <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M19 13l-7 7-7-7m14-8l-7 7-7-7 " />
                            </svg>
                            Load more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/cardingo.io/public_html/resources/views/pages/payments.blade.php ENDPATH**/ ?>