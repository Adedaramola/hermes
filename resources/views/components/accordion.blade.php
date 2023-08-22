<div x-data="{ isAccordionActive: false }">
    <div>
        <button @click="isAccordionActive = !isAccordionActive" class="block w-full">
            <span>{{ $trigger }}</span>
            {{-- <svg :class="{ 'rotate-180': isAccordionActive }" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg> --}}
        </button>
    </div>
    <div x-show="isAccordionActive" x-collapse x-cloak class="pl-7">
        <div class="border-l border-gray-200">
            {{ $content }}
        </div>
    </div>
</div>