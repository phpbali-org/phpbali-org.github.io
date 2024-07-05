<header class="p-4 flex shadow bg-white items-center">
    <button class="header__hamburger-btn p-2 md:hidden" aria-label="Open menu">
        <img src="/assets/icons/list.svg" alt="" class="h-6 w-6">
    </button>
    <a href="/" class="ml-4 md:ml-0">
        <img src="/assets/images/phpbali-logo.png" alt="PHPBali logo" width="50" height="50">
    </a>
    <nav id="sidebarMenu">
        <div class="flex border-b border-solid border-gray-500 md:border-none p-6 -ml-2 -mt-1 md:hidden">
            <!-- You can put your logo here ;) -->
            <button class="nav__hide-btn p-2 ml-auto" aria-label="Close menu">
              <img src="/assets/icons/times.svg" alt="" class="h-6 w-6">
            </button>
        </div>
        <ul class="flex flex-col md:flex-row md:items-center">
            <li>
                <a href="/about" class="block md:inline font-bold md:mx-4 hover:bg-gray-200">
                    ABOUT
                </a>
            </li>
            <li>
                <a href="/events" class="block md:inline font-bold md:mx-4 hover:bg-gray-200">
                    EVENTS
                </a>
            </li>
        </ul>
    </nav>
</header>
