<div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
    <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
        <a href="#" data-modal-trigger aria-controls="{{$modal}}-modal" aria-expanded="false">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="w-full rounded-3xl" src="{{ URL::to('/') }}/assets/images/team--{{$image}}.png" alt="{{$alt}}" />
                    </div>
                    <div class="flip-card-back pt-10 flex justify-center items-center">
                        <button class="button-secondary-outline px-4 text-white">About Me!</button>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <span class="block text-xl text-white font-goldplayBold">{{$name}}</span>
                <span class="block text-quaternary">{{$title}}</span>
            </div>
        </a>
    </div>
</div>
  