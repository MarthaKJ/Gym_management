<x-app-layout>
    <section id="home">
        <div class="min-h-screen !bg-cover !bg-no-repeat"
            style="background-image: linear-gradient(rgba(17, 24, 39, 0.8), rgba(17, 24, 39, 0.8)), url('images/gym/carousel-1.jpg')">
            @include('partials.navbar')
            @include('partials.hero')

            {{-- About Us --}}
        </div>
    </section>
    <section id="about">
        @include('partials.about-us')
    </section>
    @include('partials.become-member')

    <section id="services">
        @include('partials.services')
    </section>

    <section id="pricing">
        @include('partials.pricing')
    </section>
    <section id="contact">
        @include('partials.contact')
    </section>

    @include('partials.footer')
</x-app-layout>
