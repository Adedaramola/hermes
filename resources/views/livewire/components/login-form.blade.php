<div class="max-w-lg w-full bg-white shadow rounded-md px-10 py-8">
    <form wire:submit.prevent="authenticate">

        @csrf

        <div>
            <x-label for="username" value="Username or Email address" />
            <input 
                type="text"
                id="username"
                wire:model.defer="form.username"
                @class([
                    'block w-full mt-1 border bg-gray-50 px-4 py-2 rounded-md shadow-sm placeholder:text-sm placeholder:text-gray-400', 
                    'border-gray-200' => !$errors->has('username'),
                    '!border-red-500' => $errors->has('username')
                ])
                placeholder="administrator"
            />
        </div>

        <div class="mt-4">
            <x-label for="password" value="Password" />
            <input 
                type="password"
                id="password"
                wire:model.defer="form.password"
                @class([
                    'box-border block w-full mt-1 border bg-gray-50 px-4 py-2 rounded-md shadow-sm placeholder:text-sm placeholder:text-gray-400', 
                    'border-gray-200' => !$errors->has('username'),
                    '!border-red-500' => $errors->has('username')
                ])
                autocomplete="current-password"
                placeholder="••••••••"
            />
        </div>

        <div class="mt-5">
            <x-button class="w-full">
                <x-loading-indicator class="w-4 h-auto mr-2" wire:loading />
                <span>{{ __('Sign In') }}</span>
            </x-button>
        </div>
    </form>
</div>