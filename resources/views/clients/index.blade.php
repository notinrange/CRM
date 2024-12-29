

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <a href="{{route('clients.create')}} "class ="underline">Add new Client</a>
                    <table class="min-w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Company</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>VAT</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Address</b></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$client->company_name}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$client->company_vat}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$client->company_address}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        <a href="{{route('clients.edit',$client)}}" class="underline">Edit</a>
                                        @can('delete_clients')
                                        | <form method="POST"
                                            class = "inline-block"
                                            action="{{route('clients.destroy',$client)}}"
                                            onsubmit="return confirm('Are you sure')">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class = "text-red-500 underline">Delete</button>
                                        </form>
                                        @endcan
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody> 
                    </table>

                    <div class="mt-4">
                        {{$clients->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

