<x-layout>
    @section('title', 'Contact')

    <div class="grid md:grid-cols-2 gap-6">
        <div class="3/5">
            <img src="{{ asset('assets/Aburi2.jpg') }}" class="h-full w-full object-cover rounded-md" alt="Random
            image">
        </div>
        <div class="2/5">
            <div class="text-left">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Let's Get In Touch.</h2>
                <p class="font-light text-md">
                    Or just reach out manually to
                    <a class="text-blue-800" href="mailto:groupengec@gmail.com">groupengec@gmail.com</a>
                </p>
            </div>
            <form action="#" method="POST" class="pt-4">
                <div class="grid grid-cols-1 gap-x-8 gap-y-4 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                        <div class="mt-2.5">
                            <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
                        <div class="relative mt-2.5">
                            <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                </div>
                <div class="pt-2">
                    <h1>By engaging this form, you agree to our privacy policy.</h1>
                </div>
                <div class="mt-10">
                    <button type="submit" class="block w-full rounded-md bg-blue-800 px-3.5 py-2.5 text-center text-sm
                    font-semibold text-white shadow-sm hover:bg-blue-900 focus-visible:outline focus-visible:outline-2
                    focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
                </div>
            </form>
        </div>
    </div>
    <div class="pt-6">
        <button class="text-sm rounded-full p-2 border border-yellow-400 text-blue-800">Reach Out To Us</button>

        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl pt-4">
            We Would Love to Hear From You .
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4">
            <div class="p-4 ">
                <button class="text-6xl text-blue-800 bg-blue-200 rounded-full p-4">
                    <i class='bx bx-envelope'></i>
                </button>
                <h1 class="text-2xl font-bold py-2">Email Support</h1>
                <p class="font-light text-md pb-2">Our team can respond in realtime</p>
                <a class="text-md font-light text-blue-800" href="mailto:groupengec@gmail.com">groupengec@gmail.com</a>
            </div>
            <div class="p-4">
                <button class="text-6xl text-blue-800 bg-blue-200 rounded-full p-4">
                    <i class='bx bx-building-house' ></i>
                </button>
                <h1 class="text-2xl font-bold py-2">Visit Our Location</h1>
                <p class="font-light text-md pb-2">We are available during the hours 9am to 5pm GMT. Weekdays Only</p>
                <a class="text-md font-light text-blue-800" href="https://maps.app.goo.gl/mnEAgpYj1vF8Djqn9">No. 41 Gye
                    Nyame
                    Street
                    <br>
                    Taifa,
                    Accra -
                    Ghana</a>
            </div>
            <div class="p-4">
                <button class="text-6xl text-blue-800 bg-blue-200 rounded-full p-4">
                    <i class='bx bx-building-house' ></i>
                </button>
                <h1 class="text-2xl font-bold py-2">Call Us Directly</h1>
                <p class="font-light text-md pb-2">We are available during 9am to 5pm GMT to answer all your calls</p>
                <h1 class="text-md font-light text-blue-800">
                    +233 (0)555071746
                    +233 (0)5056160395
                </h1>
            </div>
        </div>

    </div>
</x-layout>
