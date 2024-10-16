<x-layout>
    <main class="font-sans text-black/50">
        <section class="bg-white w-full h-full pb-6">
{{--            <img src="{{ asset('assets/land.png') }}" alt="" class="w-full h-full md:object-cover sm:object-fill">--}}
            <div class="container mx-auto py-6">
                <!-- Image Section -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            We Take Your <span class="underline">Dream</span> Home <br>
                            <span class="italic">& Make It Real</span>
                        </h1>
                    </div>
                    <!-- Image 1 -->
                    <div class="col-start-1 row-span-1">
                        <p class="text-sm md:text-lg text-gray-600 mb-8">
                            We aren't just a construction, architectural, or engineering company. We build stories that stand the test of time—stories of innovation, passion, and craftsmanship.
                        </p>
                        <div class="flex justify-center items-center sm:gap-1 lg:justify-start space-x-4
                        mb-8">
                            <a href="/contact" class="bg-yellow-400 text-white py-2 px-4 rounded-full
                            hover:bg-yellow-500">
                                Get a quote
                            </a>
                            <a href="/services" class="bg-white border border-gray-400 text-gray-600 py-2 px-4
                            rounded-full hidden md:block text-center
                            hover:bg-gray-100">
                                Our services
                            </a>
                        </div>
                        <div class="">
                            <img src="{{ asset('assets/Aburi1.jpg') }}" alt="Project 1" class="w-full h-full
                            object-cover rounded-3xl">
                        </div>

                    </div>

                    <!-- Image 2 -->
                    <div class="col-start-2 row-span-1 ">
                        <img src="{{ asset('assets/Aburi2.jpg') }}" alt="Project 2" class="w-full h-full object-cover
                         rounded-3xl">
                    </div>

                    <!-- Image 3 -->
                    <div class="col-start-3 row-start-1 row-end-3 row-span-1 relative">
                        <img src="{{ asset('assets/Dodowa2.jpg') }}" alt="Project 3" class="w-full h-full
                        object-cover rounded-3xl">

                        <div class="absolute bottom-2 right-1 md:bottom-4 md:right-4">
                            <a href="/about" class="text-left text-sm font-light text-blue-800 bg-white p-1 md:p-4
                            rounded-full hover:underline hover:underline-offset-2 hover:animate-bounce flex flw-row
                            items-center">read more
                                us <i class='bx bx-right-arrow-alt' ></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="bg-white pb-6">
            <div class="flex flex-col gap-1 pb-4 pt-6 text-black">
                <div class="flex flex-row justify-between items-baseline">
                    <span class="text-xl font-gray-200">OUR APPROACH</span>
                    <h1 class="font-bold text-xl md:text-4xl">WITH RESEARCH-DRIVEN </h1>
                </div>
                <h1 class="text-xl md:text-4xl  font-bold">
                APPROACHES, WE FACTOR IN ALL YOUR NEEDS AND PRESENT YOU AN EXPERIENCE THAT FITS YOUR IMAGINATION WHETHER IT BEING A UNIQUE LANDSCAPE, A BUSTLING CITY SCENARIO OR THE LIVELY PEOPLE AND THEIR MOVEMENTS.
                </h1>
            </div>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-[16.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern1.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
                <div class="relative w-full md:w-[16.625rem] h-[37.5rem] bg-white overflow-hidden border
                border-yellow-400">
                    <img src="{{ asset('assets/eastern5.png') }}" alt="Image description" class="w-full h-full object-cover" />
                    <!-- Overlay Text at the Bottom -->
                    <div class="absolute bottom-0 left-0 right-0 p-2">
                        <a href="/about" class="text-left text-xl font-semibold text-blue-800">Read more about us</a>
                    </div>
                </div>
                <div class="w-full md:w-[16.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern2.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
                <div class="w-full md:w-[16.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern3.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
                <div class="w-full md:w-[16.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern4.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
            </div>

        </section>
        <section class="pb-6 pt-4 text-black">
            <marquee behavior="scroll" direction="left" class="text-6xl">
                OUR PROJECTS OUR PROJECTS OUR PROJECTS OUR PROJECTS OUR PROJECTS OUR PROJECTS OUR PROJECTS OUR PROJECTS
            </marquee>
            <h1 class="font-bold text-lg pb-4">CHECK OUT OUR RECENTLY COMPLETED PROJECTS.</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($projects as $project)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <img src="{{ $project->projectImages->first()->image_path }}" alt="Project Image"
                                 class="w-full h-[300px]">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-black">{{
                                $project->name
                                }}</h5>
                            </a>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center
                            text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none
                            focus:ring-blue-700">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


        </section>
        <section class="pb-6 pt-4">
            <h1 class="font-bold text-2xl md:text-4xl text-black">
                WHAT OUR CLIENTS SAY ABOUT US.
            </h1>
            <div class="grid mb-8 border border-gray-200 shadow-sm md:mb-12 md:grid-cols-2
            bg-white mt-4">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">Great expertise</h3>
                        <p class="my-4">"Working with Engec Limited has been a game-changer for our projects. Their expertise in water and sanitation engineering is unparalleled, and their commitment to delivering on time and within budget is commendable. They’re our go-to partner for infrastructure solutions."
                        </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <div class="space-y-0.5 font-medium text-black text-left rtl:text-right ms-3">
                            <div>Kwame Agyemang</div>
                            <div class="text-sm text-gray-500 ">CEO, ConstructPro Ltd</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">Exceptional Engineering
                            Services</h3>
                        <p class="my-4">"Engec Limited provided us with exceptional engineering services on a recent residential development project. From design to execution, their attention to detail and focus on safety gave us confidence throughout the process. We’re extremely satisfied with their work</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <div class="space-y-0.5 font-medium text-black text-left rtl:text-right ms-3">
                            <div>Ama Boakyewaa</div>
                            <div class="text-sm text-gray-500">Project Manager, GreenBuild Africa</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">Deep Technical Knowledge and
                            Problem-solving Skills</h3>
                        <p class="my-4">CityWater Works: "The team at Engec Limited demonstrated deep technical knowledge and problem-solving skills while working on our urban water distribution project. Their innovative solutions and professionalism exceeded our expectations."
                        </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <div class="space-y-0.5 font-medium text-black text-left rtl:text-right ms-3">
                            <div>Samuel Osei</div>
                            <div class="text-sm text-gray-500">Director of Operations, CityWater Works</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg ">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">Efficient Collaborating</h3>
                        <p class="my-4">"Engec Limited has been an exceptional partner on several of our collaborative projects. Their technical proficiency and project management capabilities have consistently impressed us. From concept to completion, they delivered high-quality engineering solutions with unmatched professionalism. We look forward to future partnerships."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <div class="space-y-0.5 font-medium text-black text-left rtl:text-right ms-3">
                            <div>Dennis Nsoh</div>
                            <div class="text-sm text-gray-500">Managing Director, Qualiden
                                Engineering</div>
                        </div>
                    </figcaption>
                </figure>
            </div>

        </section>
        <section class="pb-6">
            <h1 class="font-bold text-2xl md:text-4xl text-black">
                BRANDS AND INDIVIDUALS WE HAVE WORKED WITH.
            </h1>
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-6 lg:px-8 items-center justify-center">
                    <div class="mx-auto mt-10 grid max-w-lg grid-cols-2 gap-x-2 gap-y-1 sm:grid-cols-3
                    lg:grid-cols-3 sm:gap-x-10 lg:mx-0 lg:max-w-none gap-6">
                        <img class="max-h-12 w-full object-contain" src="{{ asset('assets/looo.jpg') }}"
                             alt="Transistor" width="158"
                             height="48">
                        <img class="max-h-12 w-full object-contain"  src="{{ asset('assets/rec.jpg') }}" alt="Reform"
                        width="158" height="48">
                        <img class="max-h-12 w-full object-contain" src="{{ asset('assets/wes.jpg') }}" alt="Tuple"
                        width="158" height="48">
                    </div>
                </div>
            </div>


        </section>
    </main>
</x-layout>
