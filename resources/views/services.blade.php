<x-layout>
    @section('title', 'Services')

    <div class="px-6 md:px-0">
        <div class="flex flex-col gap-2 w-full pl-12 md:pl-24 py-32">
            <p class="text-sm font-bold text-blue-800">HOW WE SERVE YOU</p>
            <h1 class="text-3xl md:text-6xl font-normal">Our Services</h1>
        </div>
        <div class="flex flex-col md:gap-20 gap">
            <div class="pt-6 flex flex-col md:flex-row mx-auto justify-center md:mt-16 mt-4 md:px-24 md:gap-20 gap-4
                items-center">
                <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
                    <h1 class="font-normal text-4xl text-black">Design and Build</h1>

                    <h2 class="font-normal text-md">
                        Our Design and Build service streamlines your project, combining innovative architectural design with expert construction. From concept to completion, we deliver efficient, tailored solutions that bring your vision to life. Trust us for quality craftsmanship and seamless execution.
                    </h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="md:basis-1/2">
                    <img src="{{ asset('assets/desihn.jpg') }}" class="h-96 object-cover rounded-md" alt="Random image">
                </div>
            </div>
            <div class="pt-6 flex flex-col md:flex-row-reverse mx-auto justify-center md:mt-16 mt-4 md:px-24 md:gap-20 gap-4
                items-center">
                <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
                    <h1 class="font-normal text-4xl text-black">Architectural Design</h1>

                    <h2 class="font-normal text-md">
                        Our Architectural Design service transforms ideas into stunning, functional spaces. We blend creativity with precision to craft designs that reflect your vision and meet your needs. Experience innovative and timeless architecture tailored to perfection.
                    </h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="md:basis-1/2">
                    <img src="{{ asset('assets/arch.jpg') }}" class="h-96 object-cover rounded-md" alt="Random image">
                </div>
            </div>
            <div class="pt-6 flex flex-col md:flex-row mx-auto justify-center md:mt-16 mt-4 md:px-24 md:gap-20 gap-4
                items-center">
                <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
                    <h1 class="font-normal text-4xl text-black">Solar Installation</h1>

                    <h2 class="font-normal text-md">
                        Our Solar Installation service provides sustainable energy solutions tailored to your needs. We ensure efficient system design, seamless installation, and long-term performance. Harness the power of the sun and reduce your carbon footprint today.
                    </h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="md:basis-1/2">
                    <img src="{{ asset('assets/solar.jpeg') }}" class="h-96 object-cover rounded-md" alt="Random image">
                </div>
            </div>
            <div class="pt-6 flex flex-col md:flex-row-reverse mx-auto justify-center md:mt-16 mt-4 md:px-24 md:gap-20 gap-4
                items-center">
                <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
                    <h1 class="font-normal text-4xl text-black">Renovations</h1>

                    <h2 class="font-normal text-md">
                        Our Renovation service transforms spaces with a focus on quality and precision. Whether upgrading a single room or an entire property, we blend modern design with expert craftsmanship. Breathe new life into your space with our tailored renovation solutions.
                    </h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="md:basis-1/2">
                    <img src="{{ asset('assets/reno1.jpg') }}" class="h-96 object-cover rounded-md" alt="Random image">
                </div>
            </div>
            <div class="pt-6 flex flex-col md:flex-row mx-auto justify-center md:mt-16 mt-4 md:px-24 md:gap-20 gap-4
                items-center">
                <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
                    <h1 class="font-normal text-4xl text-black">Real Estate Development</h1>

                    <h2 class="font-normal text-md">
                        Our Real Estate services offer comprehensive solutions for buying, selling, and managing properties. With a deep understanding of market trends and client needs, we provide expert guidance and personalized support. From residential to commercial investments, we help you find the perfect property to meet your goals.
                    </h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="md:basis-1/2">
                    <img src="{{ asset('assets/real.jpg') }}" class="h-96 object-cover rounded-md" alt="Random image">
                </div>
            </div>
        </div>

{{--        <div class="flex flex-col gap-2 w-full pl-12 md:pl-24 py-32">--}}
{{--            <p class="text-sm font-bold text-blue-800">THE EXTRA MILE</p>--}}
{{--            <h1 class="text-3xl md:text-6xl font-normal">Additional Services</h1>--}}
{{--        </div>--}}

{{--        <div class="px-6 grid grid-cols-1 md:grid-cols-4 gap-4">--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2">--}}
{{--                <img src="{{ asset('assets/desihn.jpg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Structural Engineering">--}}

{{--                <div class="absolute inset-0 bg-blue-800 bg-opacity-100 opacity-0 group-hover:opacity-100--}}
{{--                transition-opacity duration-300 ease-in-out flex justify-center items-center rounded-md">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Structural Engineering--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/mapping.jpg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center rounded-md">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}


{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Mapping and 3D Modeling--}}
{{--                </h2>--}}

{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/gis.jpg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center rounded-md">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Geographic Information <br>Systems(GIS)--}}
{{--                </h2>--}}

{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/consul.jpeg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center rounded-md">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Consultancy Services--}}
{{--                </h2>--}}

{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/survey.jpg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center rounded-md">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Surveying--}}
{{--                </h2>--}}

{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/mep.png') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 rounded-md opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    MEP--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/watersys.jpg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center rounded-md">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Water Supply Systems--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <div class="relative group transition-all duration-300 ease-in-out hover:col-span-2 bg-blue-500">--}}
{{--                <img src="{{ asset('assets/awim.jpg') }}" class="h-96 w-full object-cover rounded-md transition-all duration-300 ease-in-out"--}}
{{--                     alt="Random image"--}}
{{--                >--}}
{{--                 <div class="absolute inset-0 bg-blue-800 bg-opacity-100 rounded-md opacity-0 group-hover:opacity-100--}}
{{--                 transition-opacity duration-300 ease-in-out flex justify-center items-center">--}}
{{--                    <h2 class="text-center text-white text-lg">New Text on Hover</h2>--}}
{{--                </div>--}}

{{--                <h2 class="absolute text-nowrap inset-x-10 bottom-10 text-center text-white text-lg p-6 flex flex-col--}}
{{--                 justify-center opacity-100 group-hover:opacity-0 bg-blue-800 rounded-md">--}}
{{--                    Swimming Pools--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</x-layout>
