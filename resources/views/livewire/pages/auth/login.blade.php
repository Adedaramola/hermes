<div class="flex flex-col items-center justify-center min-h-screen bg-gray-50">
    <div class="mb-8">
        <x-link href="/">
            <img 
                class="mx-auto w-10 h-10 cursor-pointer" 
                src="{{ asset('images/logo-icon.svg') }}" 
                alt="Brand_Logo"
            />
        </x-link>
    </div>

    @livewire('components.login-form')
</div>