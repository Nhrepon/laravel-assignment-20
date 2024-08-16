<x-layout>
    <div class="container">
        <h2 class="text-3xl">Contact list</h2>
        <table class="table-auto">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            </thead>
            <tbody>
            @forelse($contact as $cts)
                <tr class="border-2 p-2">
                    <td class="border-2 p-2">{{$cts->name}}</td>
                    <td class="border-2 p-2">{{$cts->email}}</td>
                    <td class="border-2 p-2">{{$cts->phone}}</td>
                    <td class="border-2 p-2">{{$cts->address}}</td>
                    <td class="border-2 p-2"><button>Update</button></td>
                </tr>
            @empty
                <h3>No data found!</h3>
            @endforelse

            </tbody>
        </table>

    </div>
    <hr class="my-5"/>
    <div class="container my-5">
        @include("create")
    </div>

</x-layout>
