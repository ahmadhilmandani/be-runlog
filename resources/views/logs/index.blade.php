<x-layouts.main>
    <header class="mb-5 flex justify-between items-center">
        <div>
            <h1>Logs</h1>
            <small class="text-neutral-500">Here's All of your logs!</small>
        </div>
        <button
            class="px-3 border-[0.87px] border-neutral-200 py-1.5 bg-neutral-950 text-white flex justify-center items-center">
            Add
            <i class="ph ph-plus text-[16px]"></i>
        </button>
    </header>
    <x-logs.table></x-logs.table>
</x-layouts.main>
