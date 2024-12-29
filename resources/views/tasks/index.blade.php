<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <a href="{{route('tasks.create')}} "class ="underline">Add new Task</a>
                    <table class="min-w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Title</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Assigned To</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Client</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Deadline</b></span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500"><b>Status</b></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">{{$task->title}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        {{$task->user->first_name}} {{ $task->user->last_name}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        {{$task->client->company_name}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        {{$task->deadline_at}} 
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        {{$task->status}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">
                                        <a href="{{route('tasks.edit',$task)}}" class="underline">Edit</a>
                                        |
                                        @can('delete_tasks') 
                                        <form method="POST"
                                            class = "inline-block"
                                            action="{{route('tasks.destroy',$task)}}"
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
                        {{$tasks->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

