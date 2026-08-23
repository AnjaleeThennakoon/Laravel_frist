<div class="navbar bg-base-200 shadow-md border-b border-gray-300">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/ideas" class="hover:text-blue-600">Home</a></li>
                <li><a href="/ideas/create" class="hover:text-blue-600">New Idea</a></li>
            </ul>
        </div>
        <a href="/Login" class="btn btn-ghost text-xl text-blue-600 hover:text-blue-800">
            Idea
        </a>
    </div>

{{--    <div class="navbar-center hidden lg:flex">--}}
{{--        <ul class="menu menu-horizontal px-1 text-gray-700 font-semibold">--}}
{{--            <li><a href="/ideas" class="hover:text-blue-600">Home</a></li>--}}
{{--            <li><a href="/ideas/create" class="hover:text-blue-600">New Idea</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}

    <div class="navbar-end space-x-2">
        @guest
            <a class="btn btn-primary hover:bg-blue-700" href="/register">
                Register
            </a>
            <a class="btn btn-secondary hover:bg-gray-700" href="/login">
                Log In
            </a>
        @endguest

        @auth
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-ghost hover:text-red-600">
                    Log Out
                </button>
            </form>
        @endauth
    </div>
</div>
