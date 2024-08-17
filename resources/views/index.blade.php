<x-layout>
    <div class="container mx-auto">
        <h2 class="text-3xl text-center my-5">Contact list</h2>
        <hr class="my-5">
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
                    <td class="border-2 p-4 text-blue-600"><a href="{{route('contacts.update', $cts)}}">Update</a></td>
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
