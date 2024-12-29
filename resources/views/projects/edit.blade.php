<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action = "{{route('projects.update', $project)}}">
                    @method('PUT')
                    @csrf
                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title',$project->title)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description',$project->description)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Deadline At -->
                    <div class="mt-4">
                        <x-input-label for="deadline_at" :value="__('Deadline')" />
                        <x-text-input id="deadline_at" class="block mt-1 w-full" type="date" name="deadline_at" :value="old('deadline_at',$project->deadline_at)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('deadline_at')" class="mt-2" />
                    </div>

                    <!-- Assigned User-->
                    <div class="mt-4">
                        <x-input-label for="user_id" :value="__('Assigned user')" />
                        <select name="user_id" id="user_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}"
                                    @selected(old('user_id',$project->user_id) == $user->id)>
                                    {{ $user->first_name . ' ' . $user->last_name}}
                                </option>
                            @endforeach    
                        </select>                        
                        <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                    </div>

                    <!-- Client-->
                    <div class="mt-4">
                        <x-input-label for="client_id" :value="__('Client')" />
                        <select name="client_id" id="client_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}"
                                    @selected(old('client_id',$project->client_id) == $client->id)>
                                    {{ $client->company_name}}
                                </option>
                            @endforeach    
                        </select>                        
                        <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                    </div>


                    <!-- Status-->
                    <div class="mt-4">
                        <x-input-label for="status" :value="__('Status')" />
                        <select name="status" id="status"  class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                            @foreach (\App\Constants\ProjectStatus::all() as $status)
                                <option value="{{$status}}"
                                    @selected(old('status',$project->status) == $status)>
                                    {{ $status}}
                                </option>
                            @endforeach    
                        </select>                        
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>

                    

                    <x-primary-button class="mt-4">
                        {{__('Save')}}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
