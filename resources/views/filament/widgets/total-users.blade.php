<x-filament::widget>
    <x-filament::card>
        <h2 class="text-2xl font-bold">Total User</h2>
        <p>{{ $this->getTotalUsers() }}</p>
        <p>{{auth()->user()->role}}</p>
    </x-filament::card>
</x-filament::widget>

