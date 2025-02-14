<nav class="border-gray-200 bg-[url('/public/images/background.jpg')]">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('/images/logo-title.png') }}" class="h-14" alt="Flowbite Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul id="navbar-list" class="mt-4 flex flex-col rounded-lg border border-gray-100 p-4 font-medium rtl:space-x-reverse md:mt-0 md:flex-row md:space-x-8 md:border-0 md:p-0">
                <!-- Navbar items will be appended here by jQuery -->
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        $(document).ready(function() {
            var navbarItems = [{
                    href: "#",
                    text: "Home",
                    ariaCurrent: "page"
                },
                {
                    href: "#",
                    text: "About Us",
                },
                {
                    href: "#",
                    text: "Product",
                },
                {
                    href: "#",
                    text: "News",
                },
                {
                    href: "#",
                    text: "Experience",
                },
                {
                    href: "#",
                    text: "Contact",
                }
            ];

            $.each(navbarItems, function(index, item) {
                var listItem = $('<li></li>');
                var link = $('<a class="block rounded font-normal px-3 py-2 text-gray-300 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-white"></a>').attr('href', item.href).text(item.text);
                if (item.ariaCurrent) {
                    link.attr('aria-current', item.ariaCurrent);
                }
                listItem.append(link);
                $('#navbar-list').append(listItem);
            });
        });
    </script>
@endpush
