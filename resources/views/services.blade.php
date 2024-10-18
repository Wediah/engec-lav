<x-layout>
    @section('title', 'Services')

    <div class="relative w-full">
        <img src="{{ asset('assets/las.jpg') }}" class="h-32 md:h-96 w-full object-cover rounded-md" alt="Random image">

        <div class="absolute inset-x-0 bottom-0 flex justify-center">
            <h2 class="text-white md:text-9xl sm:text-6xl lg:text-9xl font-black w-full text-left px-2">
                HOW WE SERVE YOU
            </h2>
        </div>
    </div>
    <div class="pt-6">
        <div class="flex flex-col ">
            <span class="text-2xl font-medium text-blue-800">OUR SERVICES</span>
            <h1 class="font-bold text-2xl text-yellow-400">GENERAL CONSTRUCTION AND CIVIL WORKS</h1>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-6 flex-wrap w-screen pt-6 pb-6">


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/desihn.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800">DESIGN AND
                        BUILD</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">From commercial and residential
                    developments to infrastructure projects, we specialize in delivering higher quality construction services that exceed clients expectations </p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/arch.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">ARCHITECTURAL
                        DESIGN</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">We offer architectural design services
                    that blend creativity and practicality resulting in esthetically pleasing and functional spaces.</p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/solar.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">SOLAR
                        INSTALLATIONS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Engec group provides state of the art
                    solar energy solutions for residential rooftop solutions to large scale solar farms.</p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/reno1.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">RENOVATIONS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Whether it is a residential property or
                    a commercial space engine group specializes in renovations that breathe new life into existing structures.</p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/real.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">REAL ESTATES
                        DEVELOPMENT</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Engec group is a leader in real
                    estate development offering end to end services that transform land into driving communities. Our
                    developments are characterized by quality construction innovation design and sustainable practices.</p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/awim.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">SWIMMING POOL
                        CONSTRUCTION</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">We specialize in the desire and
                    construction of custom swimming pools from luxurious residential polls to large scale commercial installations our team ensures that every pool is built to the highest standards of safety functionality and esthetic appeal.</p>
            </div>
        </div>
    </div>


    <span class="text-2xl font-medium text-blue-800 py-6">ADDITIONAL SERVICES SERVICES</span>

    <div class="flex flex-col md:flex-row gap-6 flex-wrap w-screen pt-6 pb-6">


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/desihn.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800">STRUCTURAL ENGINEERING</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">AT Engec Group, our Structural Engineering services
                    ensure your projects stand strong. We provide innovative, safe, and sustainable design solutions
                    for building, bridges, and infrastructure.
                </p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/arch.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">WATER SUPPLY SYSTEMS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">We offer comprehensive water supply and
                    drainage Engineering services, ensuring that your projects are equipped with efficient,
                    sustainable, and reliable water management systems.
                </p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/solar.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">MAPPING AND 3D MODELING</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Engec group provides state of the art
                    mapping services from sites plans to detailed topographical maps, that support effective project
                    planning and execution.
                </p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/reno1.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">GEOGRAPHIC INFORMATION
                        SYSTEMS (GIS)</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Whether it being environmental analysis, land use
                    planning, or resource management, our GIS services are tailored to meet your specific project
                    needs.</p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/real.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">Consultancy Services</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Our team of seasoned professionals offer consultancy
                    services in engineering, construction, and project management. We help you navigate complex
                    challenges and achieve your goals with tailored solutions.</p>
            </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/awim.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">SURVEYING</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Using the latest surveying technology, we provide precise
                    measurements and data critical to planning and execution of your projects.
                </p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/awim.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800 ">MEP</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">Engec Group delivers top-tier Mechanical, Electrical and
                    Plumbing Systems that power, connect and sustain your projects. We ensure that your MEP systems
                    are expertly designed, seamlessly integrated, and efficiently managed.
                </p>
            </div>
        </div>
    </div>
</x-layout>
