<x-layout>
    <div class="container mx-auto">
        <h2 class="text-3xl text-center my-5">Contact list</h2>
        <hr class="my-5">
        <div class="text-center flex gap-5">

            <button class="text-center bg-blue-800 px-5 py-2 rounded text-white my-3"><a
                    href="{{route('contacts.orderByName')}}">Sort By Name</a></button>
            <button class="text-center bg-blue-800 px-5 py-2 rounded text-white my-3"><a
                    href="{{route('contacts.orderByDate')}}">Sort By Date</a></button>


            <form class=" w-2/3 mx-auto"  action="{{route('contacts.search')}}" method="get">
                @csrf

                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input name="search" type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>


        </div>
        <table class="table-auto text-center w-full">
            <thead>
                <tr>
                    <th class="border-2 p-4">Name</th>
                    <th class="border-2 p-4">Email</th>
                    <th class="border-2 p-4">Phone</th>
                    <th class="border-2 p-4">Address</th>
                    <th class="border-2 p-4">Update</th>
                    <th class="border-2 p-4">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contact as $cts)
                <tr class="border-2 p-2">
                    <td class="border-2 p-4">{{$cts->name}}</td>
                    <td class="border-2 p-4">{{$cts->email}}</td>
                    <td class="border-2 p-4">{{$cts->phone}}</td>
                    <td class="border-2 p-4">{{$cts->address}}</td>
                    <td class="border-2 p-4 text-blue-600"><a href="{{route('contacts.viewSingleContact', $cts)}}">View</a>
                    </td>
                    <td class="border-2 p-4 text-red-600">
                        <form method="post" action="{{route('contacts.destroy', $cts)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600 hover:text-red-950">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <h3>No data found!</h3>
                @endforelse

            </tbody>
        </table>

    </div>
    {{--    <hr class="my-5"/>--}}
    {{--    <div class="container my-5">--}}
    {{--        @include("create")--}}
    {{--    </div>--}}

</x-layout>