<x-layout>
    @section('title', 'Home')

    <main class="font-sans text-black/50 px-6">
        <section class="bg-white w-full h-full pb-6">
{{--            <img src="{{ asset('assets/land.png') }}" alt="" class="w-full h-full md:object-cover sm:object-fill">--}}
            <div class="container mx-auto py-6">
                <!-- Image Section -->
                <div class="grid grid-cols-3 gap-4">
                    <div  class="col-span-2">
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
                            <a href="/contact" class="bg-yellow-400 text-white py-2 px-4 rounded-md
                            hover:bg-yellow-500">
                                Get a quote
                            </a>
                            <a href="/services" class="bg-white border border-gray-400 text-gray-600 py-2 px-4
                            rounded-md hidden md:block text-center
                            hover:bg-gray-100">
                                Our services
                            </a>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="0" class="">
                            <img src="{{ asset('assets/Aburi1.jpg') }}" alt="Project 1" class="w-full h-full
                            object-cover rounded-md">
                        </div>

                    </div>

                    <!-- Image 2 -->
                    <div data-aos="fade-up" data-aos-delay="200" class="col-start-2 row-span-1 ">
                        <img src="{{ asset('assets/Aburi2.jpg') }}" alt="Project 2" class="w-full h-full object-cover
                         rounded-md">
                    </div>

                    <!-- Image 3 -->
                    <div data-aos="fade-up" data-aos-delay="400" class="col-start-3 row-start-1 row-end-3 row-span-1
                    relative">
                        <img src="{{ asset('assets/Dodowa2.jpg') }}" alt="Project 3" class="w-full h-full
                        object-cover rounded-md">

                        <div class="absolute bottom-2 right-1 md:bottom-4 md:right-4">
                            <a href="/about" class="text-left text-sm font-light text-blue-800 bg-white p-1 md:p-2
                            rounded-md hover:underline hover:underline-offset-2 hover:animate-bounce flex flw-row
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
            <div data-aos="fade-up" class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-[17.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern1.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
                <div class="relative w-full md:w-[17.625rem] h-[37.5rem] bg-white overflow-hidden border
                border-yellow-400">
                    <img src="{{ asset('assets/eastern5.png') }}" alt="Image description" class="w-full h-full object-cover" />
                    <!-- Overlay Text at the Bottom -->
                    <div class="absolute bottom-0 left-0 right-0 p-2">
                        <a href="/about" class="text-left text-xl font-semibold text-blue-800">Read more about us</a>
                    </div>
                </div>
                <div class="w-full md:w-[17.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern2.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
                <div class="w-full md:w-[17.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern3.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
                <div class="w-full md:w-[17.625rem] h-[37.5rem] bg-white overflow-hidden">
                    <img src="{{ asset('assets/eastern4.png') }}" alt="Image description" class="w-full h-full
                    object-cover" />
                </div>
            </div>

        </section>
        <section class="pb-6 pt-4 text-black">
            <hr class="bg-black">
            <h1 class="font-bold text-3xl md:text-6xl text-black py-6">Featured Projects</h1>
            <hr class="bg-black">

            <p class="text-left md:pt-20 pt-4 md:w-96">Engec group’s work in shaping cities spans diverse projects—from
                major urban transformations to cozy residential spaces—each reflecting our commitment to innovative design and enhancing the quality of urban life.</p>
            <a class="group text-lg font-semibold w-80 inline-flex items-center justify-between border-b-2 pb-1 pt-10"
               href="/projects">
                View All Projects
                <i class='bx bx-right-arrow-alt transform transition-transform duration-200 group-hover:translate-x-1'></i>
            </a>

            <div data-aos="fade-up" class="grid md:grid-cols-2 gap-4 p-4 mt-6">
                    @foreach($projects as $index => $project)
                        <a href="{{ route('project.show', ['slug' => $project->slug]) }}">
                            <div class="relative {{ $index === 2 ? 'md:col-span-2 md:row-span-1' : 'md:col-span-2
                            md:row-span-1' }} group">
                                <!-- Image -->
                                <img src="{{ $project->projectImages->first()->image_path ?? asset('assets/Aburi1.jpg') }}" alt="Project Image"
                                     class="w-full h-[37.5rem] object-cover transition-all duration-300 group-hover:opacity-50">

                                <!-- Background Overlay (when hovered) -->
                                <div class="absolute inset-0 bg-yellow-500 bg-opacity-100 opacity-0 group-hover:opacity-100 transition-all duration-300"></div>

                                <!-- Marquee text that fades up on hover -->
                                <marquee behavior="scroll" direction="left" class="absolute whitespace-nowrap bottom-0 left-0 text-white p-4 text-6xl font-bold opacity-0 group-hover:opacity-100 group-hover:translate-y-0 group-hover:block transition-all duration-300 transform translate-y-10">
                                    {{ $project->name }} &nbsp; &nbsp; {{ $project->name }} &nbsp; &nbsp; {{ $project->name }} &nbsp; &nbsp; {{ $project->name }} &nbsp; &nbsp; {{ $project->name }}
                                </marquee>
                            </div>
                            <p class="capitalize text-md py-2">{{ $project->name }}</p>
                        </a>
                    @endforeach
                        <div class="relative h-full w-full hidden md:block">
                            <a class="absolute bottom-20 right-0 group text-lg font-semibold inline-flex items-center
                            justify-between border-b-2 pb-1 pt-10 w-80" href="/projects"
                            >
                                View All Projects
                                <i class='bx bx-right-arrow-alt transform transition-transform duration-200 group-hover:translate-x-1'></i>
                            </a>
                        </div>

            </div>
        </section>
        <section class="pb-6 pt-4">
            <hr class="bg-black">
            <h1 class="font-bold text-3xl md:text-6xl text-black py-6">What Our Clients Say About Us</h1>
            <hr class="bg-black">

            <div class="grid mb-8 border border-gray-200 shadow-sm md:mb-12 md:grid-cols-2
            bg-white md:mt-12 mt-4">
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
            <hr class="bg-black">
            <h1 class="font-bold text-3xl md:text-6xl text-black py-6">Brand and Individuals We have Worked With</h1>
            <hr class="bg-black">
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
