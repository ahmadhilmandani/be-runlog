<div class="w-full p-4 bg-white border border-gray-200 sm:p-6 md:p-8">
    <form class="space-y-6" action="#">
        <img class="w-12" src="{{ asset('storage/images/logo-runlog.png') }}" alt="">
        <h5 class="text-xl font-medium text-gray-900">Login to Runlog Admin</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@company.com" required />
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required />
        </div>
        <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Remember me</label>
            </div>
            <a href="#" class="ms-auto text-sm text-[#05A3FD] hover:underline">Lost Password?</a>
        </div>
        <button type="submit"
            class="w-full text-[white] bg-[#0B131C] hover:bg-[#05A3FD] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Login
            to your account</button>
    </form>
</div>
