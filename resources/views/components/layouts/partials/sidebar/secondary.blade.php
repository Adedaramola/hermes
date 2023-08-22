<div class="w-52">
    <header class="flex items-center border-b border-gray-200 h-14 px-4">
        <button>F&K Stores</button>
    </header>

    <ul class="flex flex-col py-4 overflow-y-auto">
        <x-nav-link href="" :active="request()->routeIs('dashboard')">
            <x-icons.globe class="w-4 h-auto" />
            <span>Dashboard</span>
        </x-nav-link>

        <x-nav-link>
            <x-icons.users class="w-4 h-auto" />
            <span>Customers</span>
        </x-nav-link>

        <x-nav-link>
            <x-icons.package class="w-4 h-auto" />
            <span>Products</span>
        </x-nav-link>

        <x-accordion>
            <x-slot name="trigger">
                <x-nav-link class="justify-between">
                    <span class="flex items-center space-x-2">
                        <x-icons.file-text class="w-4 h-auto" />
                        <span>Invoices</span>
                    </span>
                    <x-icons.chevron-down 
                        :class="{ 'rotate-180': !isAccordionActive }" 
                        class="w-4 h-auto"
                    />
                </x-nav-link>
            </x-slot>
            <x-slot name="content">
                <ul class="flex flex-col">
                    <x-nav-link>
                        <span>Customers</span>
                    </x-nav-link>
                    <x-nav-link>
                        <span>Suppliers</span>
                    </x-nav-link>
                </ul>
            </x-slot>
        </x-accordion> 

        <x-nav-link>
            <x-icons.download class="w-4 h-auto" />
            <span>Receivings</span>
         </x-nav-link>

        <x-nav-link>
            <x-icons.shopping-bag class="w-4 h-auto" />
            <span>Sales</span>
         </x-nav-link>

        <x-nav-link>
           <x-icons.bar-chart class="w-4 h-auto" />
           <span>Reports</span>
        </x-nav-link>

        <x-nav-link>
            <x-icons.dollar-icon class="w-4 h-auto" />
            <span>Expenses</span>
         </x-nav-link>

         <x-nav-link>
            <x-icons.users class="w-4 h-auto" />
            <span>Employees</span>
        </x-nav-link>
    </ul>
</div>