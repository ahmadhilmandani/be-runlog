<x-layouts.auth>
    <div class="w-full min-h-screen flex justify-between items-center gap-10">
        <div class="pl-32 min-[320px] max-w-[640px] w-full">
            <x-login.card></x-login.card>
        </div>

        <div class="max-w-[920px] h-[100vh] w-full bg-[#0a0a0a] shadow-2xl"
            style="background-image: url({{ asset('storage/images/bg-auth.png') }}); background-repeat: no-repeat; background-position: center;  background-size: cover;">
        </div>
    </div>
</x-layouts.auth>
