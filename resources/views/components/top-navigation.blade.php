<div class="container mt-2">
    <nav>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
                <h2 class="font-bold text-3xl">Contact App</h2>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <ul class="flex space-x-4 mt-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <li>
                        <a href={{"/contacts"}} class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                            aria-current="page">Contact list</a>
                    </li>
                    <li>
                        <a href={{"/contacts/create"}}
                            class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                            aria-current="page">Create contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>