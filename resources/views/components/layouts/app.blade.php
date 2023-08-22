<x-layouts.base :title="$title ?? 'Page Title'">
    <div class="h-screen max-h-screen flex overflow-hidden">
        <x-layouts.partials.sidebar.index />

        <div class="flex-1 flex flex-col w-0 overflow-hidden overflow-y-auto">
            <x-layouts.partials.header />

            <main role="main">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.base>