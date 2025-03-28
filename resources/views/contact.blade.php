<x-layout>

    <section>
        <div class="mx-auto max-w-screen-md px-4 py-8">
            <h2 class="mb-4 text-center font-[Montserrat] text-4xl font-extrabold tracking-tight text-black">
                {{ __('contact.contact_us') }}
            </h2>
            <p class="text-black-400 mb-4 text-center font-[Montserrat] text-xl font-light">
                {{ __('contact.opening') }}
            </p>
            <form class="space-y-4" action=" {{ route('contact.submit') }} " method="POST">
                @csrf

                <div>
                    <label class="text-black-400 mb-2 block font-[Montserrat] text-lg font-medium"
                        for="email">{{ __('contact.your_email') }}</label>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 border-black-300 bg-black-50 placeholder-black-400 block w-full rounded-lg border p-2.5 font-[playfair-display] text-lg shadow-sm"
                        id="email" name="email" type="email" placeholder="name@example.com" required>
                </div>
                <div>
                    <label class="text-black-400 mb-2 block font-[Montserrat] text-lg font-medium"
                        for="subject">{{ __('contact.subject') }}</label>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 border-black-300 bg-black-50 placeholder-black-400 block w-full rounded-lg border p-2.5 font-[playfair-display] text-lg shadow-sm"
                        id="subject" name="subject" type="text" placeholder="{{ __('contact.help_you') }}"
                        required>
                </div>
                <div class="col-span-2">
                    <label class="text-black-400 mb-2 block font-[Montserrat] text-lg font-medium"
                        for="message">{{ __('contact.your_message') }}</label>
                    <textarea
                        class="focus:ring-primary-500 focus:border-primary-500 border-black-300 bg-black-50 placeholder-black-400 block w-full rounded-lg border p-2.5 font-[playfair-display] text-lg shadow-sm"
                        id="message" name="message" rows="6" placeholder="{{ __('contact.leave_comment') }}"></textarea>
                </div>
                <button
                    class="hover:bg-primary-800 focus:ring-primary-300 rounded-lg bg-red-600 px-5 py-3 text-center font-[Montserrat] text-lg font-medium text-white focus:outline-none focus:ring-4"
                    type="submit" value="submit">{{ __('contact.send_message') }}</button>
            </form>
        </div>
    </section>

</x-layout>
