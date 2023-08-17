<nav class="flex-1 flex flex-col px-2 pt-8 space-y-3 overflow-y-auto">
    <x-navigation-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Inventories') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Receiving') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Sales') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Expenses') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Customers') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Suppliers') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Invoices') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Employees') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Reports') }}
    </x-navigation-link>

    <x-navigation-link>
        {{ __('Appointments') }}
    </x-navigation-link>

    <x-navigation-link href="{{ route('settings') }}" :active="request()->routeIs('settings')">
        {{ __('Settings') }}
    </x-navigation-link>
</nav>