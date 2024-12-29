<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Client') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action = "{{route('clients.store')}}">
                    @csrf

                    <h3 class="text-x1 font-semibold mb-4">Contact Information</h3>
                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="contact_name" :value="__('Name')" />
                        <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <x-input-label for="contact_email" :value="__('Email')" />
                        <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
                    </div>

                    <!-- Phone number -->
                    <div class="mt-4">
                        <x-input-label for="contact_phone_number" :value="__('Phone Number')" />
                        <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="tel" name="contact_phone_number" :value="old('contact_phone_number')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2" />
                    </div>

                    <h3 class="text-x1 font-semibold mb-4 mt-4">Company Information</h3>

                    <!-- Company Name -->
                    <div class="mt-4">
                        <x-input-label for="company_name" :value="__('Company Name')" />
                        <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                    </div>

                    <!-- Company VAT -->
                    <div class="mt-4">
                        <x-input-label for="company_vat" :value="__('Company VAT')" />
                        <x-text-input id="company_vat" class="block mt-1 w-full" type="number" name="company_vat" :value="old('company_vat')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
                    </div>

                    <!-- Company Address -->
                    <div class="mt-4">
                        <x-input-label for="company_address" :value="__('Company Address')" />
                        <x-text-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" :value="old('company_address')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('company_address')" class="mt-2" />
                    </div>

                    <!-- Company City -->
                    <div class="mt-4">
                        <x-input-label for="company_city" :value="__('Company City')" />
                        <x-text-input id="company_city" class="block mt-1 w-full" type="text" name="company_city" :value="old('company_city')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
                    </div>

                    <!-- Company Zip -->
                    <div class="mt-4">
                        <x-input-label for="company_zip" :value="__('Company ZIP')" />
                        <x-text-input id="company_zip" class="block mt-1 w-full" type="number" name="company_zip" :value="old('company_zip')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
                    </div>

                    <x-primary-button class="mt-4">
                        {{__('Save')}}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
