<x-layout>
    @section('title', 'About')
    <div class="relative w-full">
        <img src="{{ asset('assets/Aburi1.jpg') }}" class="h-32 md:h-96 w-full object-cover" alt="Random
        image">

        <div class="absolute inset-x-0 bottom-0 flex justify-center">
            <h2 class="text-white text-left md:text-9xl sm:text-6xl lg:text-9xl font-black w-full px-2">
                WHO WE ARE
            </h2>
        </div>
    </div>
    <div class="pt-6 flex flex-col md:flex-row mx-auto justify-center md:mt-16 mt-4 md:px-28 md:gap-12 gap-4
    items-start">
        <div class="flex flex-row md:basis-1/2">
            <h1 class="font-normal text-4xl text-yellow-400"><span class="text-black">About</span> Engec</h1>
        </div>
        <h2 class="font-normal text-md pt-2 basis-1/2">
            ENGEC is a premier multidisciplinary construction and consulting firm with a
            core focus on delivering
            exceptional services in architecture, civil, and environmental engineering. Our expertise spans across design, construction, and consultancy, enabling us to transform visions into sustainable realities. Since our inception, ENGEC has successfully designed and executed numerous residential, commercial, and industrial projects throughout Ghana, establishing ourselves as a trusted name in the industry. Our team’s commitment to innovation, quality, and professionalism drives us to continuously meet and exceed the expectations of our diverse Clientele.
        </h2>
    </div>
    <div class="pt-6 flex flex-col md:flex-row mx-auto justify-center md:mt-16 mt-4 md:px-28 md:gap-12 gap-4
    items-start">
        <div class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
            <h1 class="font-normal text-4xl text-black">Who We Are</h1>

            <h2 class="font-normal text-md">
                <span class="font-bold text-blue-800">Founding History: </span> Engec Group was founded with a vision to
                provide comprehensive solutions across the construction and energy sectors. Established by a team of
                industry veterans with decades of experience, our journey begun with the a focus of delivering quality
                craftsmanship and unparalleled service to our clients.
            </h2>
            <h2 class="font-normal text-md pt-2">
                Our mission is to become a leading engineer and construction service provider, both locally and
                internationally. We are dedicated to delivering quality projects that meet or exceed ISO standards, ensuring our clients' satisfaction and fostering lasting relationships.
            </h2>
        </div>
        <div class="md:basis-1/2">
                <img src="{{ asset('assets/Dodowa2.jpg') }}" class="h-96 object-cover rounded-md" alt="Random image">
        </div>
    </div>
    <div class="pt-6 flex flex-col md:flex-row-reverse mx-auto justify-center md:mt-16 mt-4 md:px-28  md:gap-12
    gap-4
    items-start">
        <div class="flex flex-col md:gap-6 gap-4 md:basis-1/2">
            <h1 class="font-normal text-4xl text-black">A Vision Built on Achievements</h1>

            <h2 class="font-normal text-md">
                Over the years, We have achieved significant milestones, including successful completion of landmark
                projects, the Expansion of our service portfolio and the establishment of strategic partnership. Our
                dedication to excellence has earned as a reputation as a entrusted partner in the industry.
            </h2>

            <h2 class="font-normal text-md pt-2">
                Our vision is to build a team of experience architects, engineers, builders and project managers who
                combine top-tier design and construction skills to create exceptional and durable buildings. We aim to
                exceed our client’s expectation by delivering excellence and durability in the most economical and efficient manner.
            </h2>
        </div>
        <div class="basis-1/2">
            <img src="{{ asset('assets/Aburi2.jpg') }}" class="h-96 object-cover rounded-md" alt="Random image">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-12 justify-center mt-16 md:px-28 items-center">
        <div class="mb-4 border-b border-gray-200 md:basis-1/5 bg-blue-800 p-6 rounded-md">
            <ol class="flex flex-row md:flex-col -mb-px text-xl font-medium text-left" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="flex p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-white
                    gap-6 flex-row" id="dashboard-tab" data-tabs-target="#dashboard" type="button"
                            role="tab"
                            aria-controls="dashboard" aria-selected="false"><span>01</span>
                        <h1 class="hidden md:block">Dependability</h1></button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300
                    gap-6 flex flex-row" id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false"><span>02</span><h1
                            class="hidden md:block">Integrity</h1></button>
                </li>
                <li role="presentation">
                    <button class="flex p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300
                    gap-6 flex-row" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false"><span>03</span><h1
                            class="hidden md:block">Quality</h1></button>
                </li>
                <li role="presentation">
                    <button class="flex p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300
                    gap-6 flex-row" id="esg-tab" data-tabs-target="#esg" type="button" role="tab"
                            aria-controls="esg" aria-selected="false"><span>04</span><h1
                            class="hidden md:block">ESG</h1></button>
                </li>
                <li role="presentation">
                    <button class="flex p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300
                    gap-6 flex-row" id="learn-tab" data-tabs-target="#learn" type="button" role="tab"
                            aria-controls="learn" aria-selected="false"><span>05</span><h1
                            class="hidden md:block">Learn</h1></button>
                </li>
                <li role="presentation">
                    <button class="flex p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300
                    gap-6 flex-row" id="safety-tab" data-tabs-target="#safety" type="button" role="tab"
                            aria-controls="safety" aria-selected="false"><span>06</span><h1
                            class="hidden md:block">Safety</h1></button>
                </li>
            </ol>
        </div>
        <div id="default-tab-content" class="basis-4/5">
            <div class="hidden " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div  class="flex flex-col md:flex-row gap-6 items-center">
                    <div class="md:basis-2/5">
                        <h2 class="pb-4 font-bold text-blue-800">Core Values</h2>
                        <h1 class="text-3xl font-normal pb-4">Dependability</h1>
                        <p class="text-left ml-6 text-sm">Dependability is at the core of our work, ensuring every project
                            is delivered on time and to the highest standards. We prioritize clear communication and adaptability, consistently exceeding expectations. Our commitment to excellence helps build lasting trust with our clients.</p>
                    </div>
                    <div class="md:basis-3/5">
                        <img src="{{ asset('assets/contractor2.webp') }}" class="h-96 object-cover rounded-md"
                             alt="Random image">
                    </div>
                </div>
            </div>
            <div class="hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div  class="flex flex-col md:flex-row gap-6 items-center">
                    <div class="md:basis-2/5">
                        <h2 class="pb-4 font-bold text-blue-800">Core Values</h2>
                        <h1 class="text-3xl font-normal pb-4">Integrity</h1>
                        <p class="text-left ml-6 text-sm">We uphold the highest ethical standards, ensuring trust and
                            accountability in all interactions. By treating clients, partners, and employees with respect and dignity, we build strong, transparent relationships that foster lasting success.</p>
                    </div>
                    <div class="md:basis-3/5">
                        <img src="{{ asset('assets/ubte.jpg') }}" class="h-96 object-cover rounded-md" alt="Random
                        image">
                    </div>
                </div>
            </div>
            <div class="hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab"><div  class="flex flex-row gap-6 items-center">
                    <div  class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:basis-2/5">
                            <h2 class="pb-4 font-bold text-blue-800">Core Values</h2>
                            <h1 class="text-3xl font-normal pb-4">Quality</h1>
                            <p class="text-left ml-6 text-sm">We use only the highest quality materials and bring expert
                                craftsmanship to every project. Our team is committed to delivering exceptional results that not only meet but exceed expectations. Every detail is carefully considered to ensure lasting quality and satisfaction.</p>
                        </div>
                        <div class="md:basis-3/5">
                            <img src="{{ asset('assets/dam-615x405.png') }}" class="h-96 object-cover rounded-md"
                                 alt="Random image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden" id="esg" role="tabpanel" aria-labelledby="esg-tab"><div  class="flex flex-row gap-6
            items-center">
                    <div  class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:basis-2/5">
                            <h2 class="pb-4 font-bold text-blue-800">Core Values</h2>
                            <h1 class="text-3xl font-normal pb-4">ESG (Environmental, Social, and Governance)
                            </h1>
                            <p class="text-left ml-6 text-sm">We integrate ESG principles into our operations, focusing on sustainability and ethical practices. Our environmental efforts include reducing our carbon footprint and using eco-friendly materials. We promote diversity, inclusion, and transparency in every aspect of our business.</p>
                        </div>
                        <div class="md:basis-3/5">
                            <img src="{{ asset('assets/green.jpeg') }}" class="h-96 object-cover rounded-md" alt="Random
                            image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden" id="learn" role="tabpanel" aria-labelledby="learn-tab"><div  class="flex
            flex-row gap-6
            items-center">
                    <div  class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:basis-2/5">
                            <h2 class="pb-4 font-bold text-blue-800">Core Values</h2>
                            <h1 class="text-3xl font-normal pb-4">Learn
                            </h1>
                            <p class="text-left ml-6 text-sm">We foster a culture of continuous learning through training and professional development. By encouraging innovation and knowledge-sharing, we ensure our team stays ahead of industry trends. Ongoing learning drives our success and empowers our people.</p>
                        </div>
                        <div class="md:basis-3/5">
                            <img src="{{ asset('assets/learn.jpg') }}" class="h-96 object-cover rounded-md" alt="Random
                            image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden" id="safety" role="tabpanel" aria-labelledby="safety-tab"><div  class="flex
            flex-row gap-6
            items-center">
                    <div  class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="md:basis-2/5">
                            <h2 class="pb-4 font-bold text-blue-800">Core Values</h2>
                            <h1 class="text-3xl font-normal pb-4">Safety
                            </h1>
                            <p class="text-left ml-6 text-sm">Safety is a top priority for us, and we maintain strict safety standards across all operations. Through comprehensive safety protocols and regular training, we ensure the well-being of our team and clients. We create secure work environments with minimal risks.</p>
                        </div>
                        <div class="md:basis-3/5">
                            <img src="{{ asset('assets/prot.jpeg') }}" class="h-96 object-cover rounded-md" alt="Random
                            image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>
