<div class="relative px-5 py-10 !bg-cover !bg-no-repeat mt-20"
    style="background-image: linear-gradient(rgba(17, 24, 39, 0.8), rgba(17, 24, 39, 0.8)), url('images/gym/image (1).jpg')">
    <div class="max-w-7xl mx-auto">
        <div class="flex-center-center text-center">
            <div>
                <h5 class="text-primary uppercase">pricing plans</h5>
                <p>We offer friendly plans to cater for everyone</p>
            </div>
        </div>

        <div class="grid grid-cols-minmax-uto-200 gap-4 mt-8">
            @for ($i = 0; $i < 4; $i++) <div class="card !bg-card-dark !border-dark !shadow-none text-center">
                <h1 class="text-3xl uppercase">starter</h1>
                <div class="flex justify-center gap-2 ">
                    <h1 class="text-3xl mt-3 text-primary">$</h1>
                    <h1><span class="text-8xl font-extrabold text-primary">9</span> <span
                            class="text-muted">/MONTH</span></h1>
                </div>
                <h1 class="mt-2 text-lg uppercase">Classes</h1>
                <div class="mt-3 flex-center-center">
                    <div>
                        <div class="flex-align-center gap-2 py-3">
                            <div>
                                <i class="feather-check-circle text-secondaryGreen"></i>
                            </div>
                            <h1>Cardio</h1>
                        </div>
                        <div class="flex-align-center gap-2 py-3">
                            <div>
                                <i class="feather-check-circle text-secondaryGreen"></i>
                            </div>
                            <h1>Yoga Classes</h1>
                        </div>
                        <div class="flex-align-center gap-2 py-3">
                            <div>
                                <i class="feather-check-circle text-secondaryGreen"></i>
                            </div>
                            <h1>Body building</h1>
                        </div>
                        <div class="flex-align-center gap-2 py-3">
                            <div>
                                <i class="feather-check-circle text-secondaryGreen"></i>
                            </div>
                            <h1>Swimming lessons</h1>
                        </div>
                        <div class="flex-align-center gap-2 py-3">
                            <div>
                                <i class="feather-check-circle text-secondaryGreen"></i>
                            </div>
                            <h1>Body Massage</h1>
                        </div>
                        <div class="flex-align-center gap-2 py-3">
                            <div>
                                <i class="feather-check-circle text-secondaryGreen"></i>
                            </div>
                            <h1>Boxing</h1>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-4">select plan</button>
        </div>
        @endfor

    </div>
</div>
</div>