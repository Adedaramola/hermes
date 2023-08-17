<x-base-layout title="Login">
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-50">
        <div class="w-full max-w-lg py-8 px-10 bg-white shadow rounded-md">
            <form action="" method="post">
                @csrf

                <div>
                    <x-label for="email" value="{{__('Username or Email address')}}"/>
                    <x-input type="email" name="email" class="block w-full mt-1" placeholder="admin@hermes.shop"/>
                </div>

                <div class="mt-5">
                    <x-label for="password" value="{{__('Password')}}"/>
                    <x-input type="password" name="password" class="block w-full mt-1" placeholder=""/>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>