<x-base-layout :title="$title ?? null">
    <div class="h-screen max-h-screen flex overflow-hidden bg-gray-50">
        @include('layouts.app.sidebar.index')

        <div class="flex flex-col w-0 flex-1 overflow-hidden overflow-y-auto">
            @include('layouts.app.header.header')

            <main role="main" class="relative z-0 py-3 lg:py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 min-h-(screen-content) 2xl:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</x-base-layout>