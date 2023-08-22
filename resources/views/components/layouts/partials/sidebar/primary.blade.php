<div class="flex flex-col justify-between w-14 p-2">
    <ul class="flex flex-col items-center space-y-4">
        <a href="" class="block">
            <img 
                class="mx-auto w-6 h-10 cursor-pointer" 
                src="{{ asset('images/logo-icon.svg') }}" 
                alt="Brand_Logo"
            />
        </a>

        <x-link>
            <x-icons.plus class="w-5 h-auto"/>
        </x-link>
    </ul>

    <ul class="flex flex-col items-center">
        <x-nav-link>
            <x-icons.setting class="w-5 h-auto"/>
        </x-nav-link>
    </ul>
</div>