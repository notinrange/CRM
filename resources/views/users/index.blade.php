<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('users.create')}} "class ="underline">Add new User</a>
                    <table class="min-w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>First Name</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Last Name</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Email</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Do</b></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$user->first_name}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$user->last_name}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$user->email}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        <a href="{{route('users.edit',$user)}}" class="underline">Edit</a>
                                        | <form method="POST"
                                            class = "inline-block"
                                            action="{{route('users.destroy',$user)}}"
                                            onsubmit="return confirm('Are you sure')">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class = "text-red-500 underline">Delete</button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody> 
                    </table>

                    <div class="mt-4">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>