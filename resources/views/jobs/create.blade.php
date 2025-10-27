<x-layout>
    <x-slot:pageTitle>Create Job</x-slot:pageTitle>

    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handfull of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-lable for="title">Title</x-form-lable>
                        <div class="mt-2">
                            <x-form-input id="title" name="title" placeholder="CEO" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="salary">Salary Per Year</x-form-lable>
                        <div class="mt-2">
                            <x-form-input id="salary" name="salary" placeholder="$100,000 USD" required />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>

            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            </a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>


    
</x-layout>