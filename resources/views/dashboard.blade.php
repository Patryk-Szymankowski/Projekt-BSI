<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-10 lg:px-14">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 border-t border-gray-100 dark:border-gray-200 md:border-l">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 30 24" class=" w-12 h-2 text-gray-500"></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-black">Brawo udało ci się zalogować</div>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
