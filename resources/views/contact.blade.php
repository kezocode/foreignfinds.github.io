<x-layout>

    <section>
        <div class="mx-auto max-w-screen-md px-4 py-8 lg:py-16">
            <h2
                class="mb-4 text-center font-[Montserrat] text-4xl font-extrabold tracking-tight text-black dark:text-black">
                Contact Us
            </h2>
            <p class="dark:text-black-400 mb-4 text-center font-[Montserrat] font-light text-black sm:text-xl lg:mb-6">
                Did we miss something you wanted to see? Let us know!
            </p>
            <form class="space-y-4" action=" {{ route('contact.submit') }} " method="POST">
                @csrf

                <div>
                    <label class="dark:text-black-300 mb-2 block font-[Montserrat] text-lg font-medium text-black"
                        for="email">Your
                        email</label>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light border-black-300 bg-black-50 dark:border-black-600 dark:bg-black-700 dark:placeholder-black-400 block w-full rounded-lg border p-2.5 font-[playfair-display] text-lg text-black shadow-sm dark:text-black"
                        id="email" name="email" type="email" placeholder="name@example.com" required>
                </div>
                <div>
                    <label class="dark:text-black-300 mb-2 block font-[Montserrat] text-lg font-medium text-black"
                        for="subject">Subject</label>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light border-black-300 bg-black-50 dark:border-black-600 dark:bg-black-700 dark:placeholder-black-400 block w-full rounded-lg border p-3 font-[playfair-display] text-lg text-black shadow-sm dark:text-black"
                        id="subject" name="subject" type="text" placeholder="Let us know how we can help you"
                        required>
                </div>
                <div class="sm:col-span-2">
                    <label class="dark:text-black-400 mb-2 block font-[Montserrat] text-lg font-medium text-black"
                        for="message">Your
                        message</label>
                    <textarea
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 border-black-300 bg-black-50 dark:border-black-600 dark:bg-black-700 dark:placeholder-black-400 block w-full rounded-lg border p-2.5 font-[playfair-display] text-lg text-black shadow-sm dark:text-black"
                        id="message" name="message" rows="6" placeholder="Leave a comment..."></textarea>
                </div>
                <button
                    class="hover:bg-primary-800 focus:ring-primary-300 dark:hover:bg-primary-700 dark:focus:ring-primary-800 rounded-lg bg-red-600 px-5 py-3 text-center font-[Montserrat] text-lg font-medium text-white focus:outline-none focus:ring-4 sm:w-fit dark:bg-red-600"
                    type="submit" value="submit">Send message</button>
            </form>
        </div>
    </section>

</x-layout>
