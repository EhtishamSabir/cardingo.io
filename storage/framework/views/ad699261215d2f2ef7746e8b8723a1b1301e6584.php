<?php $__env->startSection('title', '| Send ADA'); ?>
<?php $__env->startSection('content'); ?>

   
    <?php if(!isset(Auth::user()->email)): ?>
    <script>window.location="<?php echo e(url('/signin')); ?>"</script>
     <?php endif; ?>

    <div class="py-16 md:py-0">
        <div class="container px-4 mx-auto">
            <div class="pt-24 h-screen flex flex-col justify-center items-center">
                <div class="w-full bg-gradient-to-br from-quinary to-senary rounded-3xl p-10">
                    <h4 class="mb-8 text-4xl font-goldplayBold text-center">Send <span> <?php echo e($amount); ?> </span> To Below Address</h4>
                    <h5 class="mb-14 text-3xl text-center">addr1v9fm5j89d3yhr0395s9vxpks6j6ea5yget7m8l0t6hx5cjgx6xpdu</h5>
                    <!--<div class="flex flex-row items-center justify-center mb-14">
                        <input type="text" value="abscska910232131kq1" id="myInput" class="text-3xl text-center bg-transparent focus:outline-none" readonly>
                        <button onclick="myFunction()" class="text-seconary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </button>
                    </div>-->
                    <?php if(count($errors) > 0): ?>
                    <div class="text-quaternary mb-8">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex flex-row items-center my-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <?php echo e($error); ?>

                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <form action="/sold" method="post" class="jumbotron mt-5">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group col-md-9">
                            <label class="block uppercase opacity-80" for="inputEmail4">Insert Transaction Id/Tx here</label>
                            <input type="text" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" require name="tx" placeholder="Enter Transaction ID here">
                            <input type="hidden" name="image" value="<?php echo e($id); ?>">
                            <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                        </div>
                        <button type="submit" class="button-grad text-xl my-5 hover:bg-pos-100">submit</button>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>

    <script>
        function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/cardingo.io/public_html/resources/views/pages/buy.blade.php ENDPATH**/ ?>