<x-layout>
    <x-slot:pageTitle>Login</x-slot:pageTitle>

    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <!-- <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handfull of details from you.</p> -->

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-lable for="email">Email</x-form-lable>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" type="email" :value="old('email')" placeholder="JohnDoe@example.com" required/>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="password">Password</x-form-lable>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>

            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            </a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>


    
</x-layout>