 <!-- MODAL -->
 <section class="modal" id="{{$name}}-modal" data-modal-target>
    <div class="modal__overlay" data-modal-close tabindex="-1"></div>
    <div class="modal__wrapper">
        <div class="modal__header">
            <h3 class="modal__title text-xl font-goldplayBold">
                {{$title}}
            </h3>
            <button class="modal__close" data-modal-close aria-label="Close Modal">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ffffff">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="modal__content opacity-80">
            {!! $about !!}
        </div>
    </div>
</section>  
