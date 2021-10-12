<?php $__env->startSection('title', '| Asset Details'); ?>
<?php $__env->startSection('content'); ?>

    <div class="bg-section-other bg-cover">
        <div class="container px-4 mx-auto">
            <div class="py-40 flex flex-wrap flex-col md:flex-row">
                <div class="w-full md:w-1/3 mb-6">
                    <img class="block rounded-3xl w-full mb-10" src="<?php echo e(URL::to('/')); ?>/Uploads/<?php echo e($data[0]->url); ?>" alt="<?php echo e($data[0]->name); ?>">
                    <div class="flex flex-row flex-wrap justify-between">
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="<?php echo e(asset('assets/images/social--youtube-v2.svg')); ?>"  alt="Youtube">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="<?php echo e(asset('assets/images/social--tiktok-v2.svg')); ?>"  alt="TikTok">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="<?php echo e(asset('assets/images/social--instagram-v2.svg')); ?>"  alt="Instagram">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="<?php echo e(asset('assets/images/social--discord-v2.svg')); ?>"  alt="Discord">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="<?php echo e(asset('assets/images/social--github-v2.svg')); ?>"  alt="Github">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="<?php echo e(asset('assets/images/social--telegram-v2.svg')); ?>"  alt="Telegram">
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-2/3 md:pl-10">
                    <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl">
                        <div class="bg-septenary rounded-t-3xl p-4 md:p-8">
                            <div class="mb-6 opacity-80">Assets Details</div>
                            <div class="flex flex-wrap flex-row">
                                <span class="block border-secondary border-2 rounded-3xl py-3 px-7 border-solid mr-4">
                                    <?php echo e($data[0]->price); ?> ADA
                                </span>
                                <?php if($data[0]->status=='minted'): ?>
                                    <span class="block text-quaternary text-xl uppercase my-4">Sold Out</span>
                                <?php else: ?> 
                                <div class="custom-select outline-select select-selected--outline w-32 mr-4">
                                    <select name="order">
                                        <option>QTY</option>
                                        <option value="asc">1</option>
                                        <option value="desc">2</option>
                                        <option value="desc">3</option>
                                        <option value="desc">4</option>
                                        <option value="desc">5</option>
                                    </select>
                                </div>
                                <a href="/buy/<?php echo e($data[0]->id); ?>/<?php echo e($data[0]->price); ?>" class="button-secondary border-2px-trans uppercase">Buy</a>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        <!--<form action="do_filter" method="GET" class="jumbotron mt-5">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="inputEmail4">Filter</label>
                                <input type="text" class="form-control" require name="search" placeholder="Search Name">
                            </div>
                            <div class="col-md-3 mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-md">Search</button>
                        </div>
                        </form>-->
                        <div class="p-4 md:p-8">
                            <div class="flex flex-wrap overflow-hidden md:-mx-4 items-end">
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Asset Name</span>
                                    <div class="input-bb-secondary min-h-66px"><?php echo e($data[0]->image_name); ?></div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Asset ID</span>
                                    <div class="input-bb-secondary min-h-66px"><?php echo e($data[0]->nft_id); ?></div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Project</span>
                                    <div class="input-bb-secondary min-h-66px">
                                        <?php if($data[0]->collection_name!=''): ?>
                                        <?php echo e($data[0]->collection_name); ?>

                                        <?php else: ?> 
                                            Not Provided
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Listing ID</span>
                                    <div class="input-bb-secondary min-h-66px"><?php echo e($data[0]->id); ?></div>
                                </div>
                                <!-- <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Policy</span>
                                    <div class="input-bb-secondary min-h-66px">???</div>
                                </div> -->
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Quantity</span>
                                    <div class="input-bb-secondary min-h-66px"><?php echo e($data[0]->quantity); ?></div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Mint Status</span>
                                    <div class="input-bb-secondary min-h-66px"><?php echo e($data[0]->status); ?></div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Listed On</span>
                                   
                                    <div class="input-bb-secondary min-h-66px"> <?php
                                   echo date('d/m/Y H:i:s A', strtotime($data[0]->created_at));
                                    ?></div>
                                </div>
                            </div>
                            <?php if($data[0]->attr_1): ?>
                            <span class="input-bb-label block mb-4">Tags</span>
                            <div class="flex flex-wrap flex-row">
                                <?php if($data[0]->attr_1): ?>
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase"><?php echo e($data[0]->attr_1); ?></span>
                                <?php endif; ?>
                                <?php if($data[0]->attr_2): ?>
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase"><?php echo e($data[0]->attr_2); ?></span>
                                <?php endif; ?>
                                <?php if($data[0]->attr_3): ?>
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase"><?php echo e($data[0]->attr_3); ?></span>
                                <?php endif; ?>
                                <?php if($data[0]->attr_4): ?>
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase"><?php echo e($data[0]->attr_4); ?></span>
                                <?php endif; ?>
                                <?php if($data[0]->attr_5): ?>
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase"><?php echo e($data[0]->attr_5); ?></span>
                                <?php endif; ?>
                                <?php if($data[0]->attr_1=='' && $data[0]->attr_2=='' && $data[0]->attr_3=='' && $data[0]->attr_4=='' && $data[0]->attr_5==''): ?>
                                 <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">No Attribute Provided</span>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                            
                            <span class="input-bb-label mt-3">Description</span>
                            <p class="opacity-80 my-10">
                            <?php if($data[0]->long_description!=''): ?>
                            <?php echo e($data[0]->long_description); ?>

                            <?php else: ?> 
                                Not Provided
                            <?php endif; ?>
                            </p>
                         
                                
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/cardingo.io/public_html/resources/views/pages/view.blade.php ENDPATH**/ ?>