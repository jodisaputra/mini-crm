<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Users') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <!-- First Name -->
                            <div>
                                <x-input-label for="first_name" :value="__('First Name')"/>
                                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                              :value="old('first_name')" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
                            </div>

                            <!-- Last Name -->
                            <div class="mt-4">
                                <x-input-label for="last_name" :value="__('Last Name')"/>
                                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                              :value="old('last_name')" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')"/>
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                              :value="old('email')" required autocomplete="username"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')"/>

                                <x-text-input id="password" class="block mt-1 w-full"
                                              type="password"
                                              name="password"
                                              required autocomplete="new-password"/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                              type="password"
                                              name="password_confirmation" required autocomplete="new-password"/>

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                            </div>

                            <div class="justify-start mt-4">
                                <x-primary-button>
                                    {{ __('Submit') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
