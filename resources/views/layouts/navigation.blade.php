<nav
    class=" bg-blue-800  px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0  border-b-gray-100 dark:border-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto pl-3">
        <a href="/" class="flex items-center">

            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Pendaftaran Caleg
        </a>
        <div class="flex md:order-2 my-3 ">
            <img src="{{ asset('image/web-logo.png') }}" alt="" class="h-20">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 text-white rounded text-base">HOME</a>
                </li>
                <li>
                    <a href="/daftar" class="block py-2 pr-4 pl-3 text-white rounded text-base">DAFTAR</a>
                </li>


            </ul>
        </div>

    </div>
</nav>
