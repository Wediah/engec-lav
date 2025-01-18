<x-layout>
    @section('title', 'Services')

    <div class="px-6 md:px-0 bg-gray-100">
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

        <div class="flex flex-col gap-2 w-full pl-12 md:pl-24 py-32">
            <p class="text-sm font-bold text-blue-800">THE EXTRA MILE</p>
            <h1 class="text-3xl md:text-6xl font-normal">Additional Services</h1>
        </div>

        <div class="grid grid-cols-12 gap-4 md:px-6">
            <!-- Structural Engineering (Large) -->
            <div class="col-span-12 md:col-span-8 relative group rounded-3xl overflow-hidden h-[400px]">
                <img src="{{ asset('assets/desihn.jpg') }}" class="w-full h-full object-cover"
                     alt="Structural Engineering">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-8 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-3xl font-medium text-white mb-4">Structural Engineering</h2>
                        <p class="text-white/90 text-lg">Comprehensive structural analysis and design with innovative solutions for complex building systems.</p>
                    </div>
                </div>
            </div>

            <!-- GIS (Medium) -->
            <div class="col-span-12 md:col-span-4 relative group rounded-3xl overflow-hidden h-[400px]">
                <img src="{{ asset('assets/gis.jpg') }}" class="w-full h-full object-cover"
                     alt="GIS">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-6 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-2xl font-medium text-white mb-3">GIS</h2>
                        <p class="text-white/90">Sophisticated spatial data management with custom GIS solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Mapping (Small) -->
            <div class="col-span-12 md:col-span-4 relative group rounded-3xl overflow-hidden h-[300px]">
                <img src="{{ asset('assets/mapping.jpg') }}" class="w-full h-full object-cover"
                     alt="Mapping">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-6 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-2xl font-medium text-white mb-3">3D Mapping</h2>
                        <p class="text-white/90">Advanced visualization and terrain modeling.</p>
                    </div>
                </div>
            </div>

            <!-- MEP (Medium) -->
            <div class="col-span-12 md:col-span-8 relative group rounded-3xl overflow-hidden h-[300px]">
                <img src="{{ asset('assets/mep.png') }}" class="w-full h-full object-cover"
                     alt="MEP">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-6 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-2xl font-medium text-white mb-3">MEP Systems</h2>
                        <p class="text-white/90">Integrated mechanical, electrical, and plumbing solutions for modern buildings.</p>
                    </div>
                </div>
            </div>

            <!-- Water Systems (Wide) -->
            <div class="col-span-12 relative group rounded-3xl overflow-hidden h-[300px]">
                <img src="{{ asset('assets/watersys.jpg') }}" class="w-full h-full object-cover"
                     alt="Water Systems">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-8 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-3xl font-medium text-white mb-4">Water Supply Systems</h2>
                        <p class="text-white/90 text-lg">Sustainable water distribution design with advanced treatment solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Consultancy (Small) -->
            <div class="col-span-12 md:col-span-4 relative group rounded-3xl overflow-hidden h-[350px]">
                <img src="{{ asset('assets/consul.jpeg') }}" class="w-full h-full object-cover"
                     alt="Consultancy">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-6 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-2xl font-medium text-white mb-3">Consultancy</h2>
                        <p class="text-white/90">Expert technical guidance and project planning.</p>
                    </div>
                </div>
            </div>

            <!-- Swimming Pools (Medium) -->
            <div class="col-span-12 md:col-span-4 relative group rounded-3xl overflow-hidden h-[350px]">
                <img src="{{ asset('assets/awim.jpg') }}" class="w-full h-full object-cover"
                     alt="Swimming Pools">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-6 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-2xl font-medium text-white mb-3">Swimming Pools</h2>
                        <p class="text-white/90">Custom pool design with advanced filtration systems.</p>
                    </div>
                </div>
            </div>

            <!-- Surveying (Medium) -->
            <div class="col-span-12 md:col-span-4 relative group rounded-3xl overflow-hidden h-[350px]">
                <img src="{{ asset('assets/survey.jpg') }}" class="w-full h-full object-cover"
                     alt="Surveying">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                    <div class="p-6 transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <h2 class="text-2xl font-medium text-white mb-3">Surveying</h2>
                        <p class="text-white/90">High-precision land surveys and site analysis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
