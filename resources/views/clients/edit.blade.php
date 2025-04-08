<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Client') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <form method="POST" action="{{ route('clients.update', $client->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Contact Information -->
                            <div class="mb-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                                    {{ __('Contact Information') }}</h3>

                                <!-- Contact Name -->
                                <div>
                                    <x-input-label for="contact_name" :value="__('Contact Name')" />
                                    <x-text-input id="contact_name" class="block mt-1 w-full" type="text"
                                        name="contact_name" :value="old('contact_name', $client->contact_name)" required autofocus />
                                    <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
                                </div>

                                <!-- Contact Email -->
                                <div class="mt-4">
                                    <x-input-label for="contact_email" :value="__('Contact Email')" />
                                    <x-text-input id="contact_email" class="block mt-1 w-full" type="email"
                                        name="contact_email" :value="old('contact_email', $client->contact_email)" required />
                                    <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
                                </div>

                                <!-- Contact Phone Number -->
                                <div class="mt-4">
                                    <x-input-label for="contact_phone_number" :value="__('Contact Phone Number')" />
                                    <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="text"
                                        name="contact_phone_number" :value="old('contact_phone_number', $client->contact_phone_number)" required />
                                    <x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Company Information -->
                            <div class="mb-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                                    {{ __('Company Information') }}</h3>

                                <!-- Company Name -->
                                <div>
                                    <x-input-label for="company_name" :value="__('Company Name')" />
                                    <x-text-input id="company_name" class="block mt-1 w-full" type="text"
                                        name="company_name" :value="old('company_name', $client->company_name)" required />
                                    <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                                </div>

                                <!-- Company Address -->
                                <div class="mt-4">
                                    <x-input-label for="company_address" :value="__('Company Address')" />
                                    <x-text-input id="company_address" class="block mt-1 w-full" type="text"
                                        name="company_address" :value="old('company_address', $client->company_address)" required />
                                    <x-input-error :messages="$errors->get('company_address')" class="mt-2" />
                                </div>

                                <!-- Company City -->
                                <div class="mt-4">
                                    <x-input-label for="company_city" :value="__('City')" />
                                    <x-text-input id="company_city" class="block mt-1 w-full" type="text"
                                        name="company_city" :value="old('company_city', $client->company_city)" required />
                                    <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
                                </div>

                                <!-- Company Zip -->
                                <div class="mt-4">
                                    <x-input-label for="company_zip" :value="__('ZIP Code')" />
                                    <x-text-input id="company_zip" class="block mt-1 w-full" type="text"
                                        name="company_zip" :value="old('company_zip', $client->company_zip)" required />
                                    <x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
                                </div>

                                <!-- Company VAT -->
                                <div class="mt-4">
                                    <x-input-label for="company_vat" :value="__('VAT Number')" />
                                    <x-text-input id="company_vat" class="block mt-1 w-full" type="text"
                                        name="company_vat" :value="old('company_vat', $client->company_vat)" required />
                                    <x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
                                </div>
                            </div>

                            <div class="flex items-center justify-start mt-6">
                                <x-primary-button>
                                    {{ __('Update Client') }}
                                </x-primary-button>
                                <a href="{{ route('clients.index') }}"
                                    class="ml-4 inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
