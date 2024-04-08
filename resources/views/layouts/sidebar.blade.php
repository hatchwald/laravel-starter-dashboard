<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="/dashboard" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Dashboard</a>

    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/dashboard" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="/dashboard/users/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user mr-3"></i>
            User
        </a>
        <a href="/dashboard/posts/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-book mr-3"></i>
            Post
        </a>
        @if (auth()->user()->can('role-view'))
            <a href="/dashboard/roles/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-tag mr-3"></i>
                Role
            </a>
        @endif
        <a href="/dashboard/rates/" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-star mr-3"></i>
            Rate
        </a>

    </nav>

</aside>
