<x-layout>
    <x-slot:pageTitle>Jobs</x-slot:pageTitle>

    <x-slot:heading>
        Jobs Listing Page
    </x-slot:heading>

    <x-slot:button>
        <x-button href="/jobs/create">Create Job</x-button>
    </x-slot:button>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>     
</x-layout>