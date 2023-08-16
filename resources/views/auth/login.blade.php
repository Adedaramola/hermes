<x-base-layout>
    <div class="min-h-screen flex justify-center items-center">
        <div class="max-w-xl w-full">
            <div class="border border-neutral-200 overflow-hidden rounded">
                <div class="bg-blue-500 p-10"></div>
                <div class="px-10 py-6 pb-10 bg-white">
                    <p class="tracking-wide leading-loose text-sm text-neutral-500 font-semibold">Welcome to Hermes Point of
                        sale system. To continue, please login with your
                        username and password below.</p>
                    <form action="{{ route('login') }}" method="post" class="mt-8">
                        @csrf
        
                        <div>
                            <x-ui.input type="text" name="username" class="block w-full" placeholder="Enter your username" />
                        </div>
        
                        <div class="mt-6">
                            <x-ui.input type="password" name="password" class="block w-full"
                                placeholder="Enter your password" />
                        </div>
        
                        <div class="py-6 text-right">
                            <a href="" class="text-sm text-neutral-500">Reset password?</a>
                        </div>
        
                        <x-ui.button class="w-full">
                            {{ __('Continue to dashboard') }}
                        </x-ui.button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>