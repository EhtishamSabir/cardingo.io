<?php $__env->startSection('title', '| Create Account'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com'): ?>
    <script>window.location="<?php echo e(url('/dashboard')); ?>"</script>
    <?php endif; ?>

    <div class="py-40 ">
        <div class="container px-4 mx-auto">
            <div class="pt-24 h-screen flex flex-col justify-center items-center">
            
                <div class="w-full md:w-500px bg-gradient-to-br from-quinary to-senary rounded-3xl p-10">
                    <h1 class="mb-12 text-5xl font-goldplayBold text-center">
                        Create Account!
                    </h1>
                    <?php if($message = Session::get('error')): ?>
                    <div class="text-quaternary flex flex-row items-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <?php echo e($message); ?>

                    </div>
                    <?php endif; ?>

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
                    <form method="post" action="register">
                        <?php echo e(csrf_field()); ?>

                        <div class="mb-12">
                            <label class="block uppercase opacity-80">Name</label>
                            <input type="text" name="name" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" autofocus>
                        </div>
                        <div class="mb-12">
                            <label class="block uppercase opacity-80">Email address</label>
                            <input type="email" name="email" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" value="<?php echo e(old('email')); ?>" autocomplete="email">
                        </div>
                        <div class="mb-12">
                            <label class="block uppercase opacity-80">Password</label>
                            <input type="password" name="password" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" value="<?php echo e(old('email')); ?>">
                        </div>
                        <div class="mb-12">
                            <label class="block uppercase opacity-80">Confirm Password</label>
                            <input type="password" name="c_password" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" value="<?php echo e(old('email')); ?>">
                        </div>
                        <button type="submit" class="button-grad text-xl my-5 w-full hover:bg-pos-100">
                            Sign in
                        </button>
                        <div class="text-center">
                            <span class="opacity-80">Already have an account? <a href="/signin" class="font-goldplayBold">Login</a></span>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/cardingo.io/public_html/resources/views/pages/signup.blade.php ENDPATH**/ ?>