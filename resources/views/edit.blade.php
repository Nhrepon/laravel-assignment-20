<x-layout>
<div class="container">
    <h2 class="text-4xl text-center">Create contacts</h2>
    <hr class="my-3">


    <form class="max-w-sm mx-auto" action="{{route('contacts.update')}}" method="post">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name" required />
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required />
        </div>
        <div class="mb-5">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
            <input name="phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone" required />
        </div>
        <div class="mb-5">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
            <input name="address" type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required />
        </div>
        <div class="mb-5 text-center">
            <button onclick="{{}}" type="submit" class="text-center bg-blue-800 px-5 py-3 rounded text-white">Add contacts</button>
        </div>

    </form>

</div>
</x-layout>
