<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del Perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualiza la información de tu perfil') }}
    </x-slot>

    <x-slot name="form">

        <!-- Nombre -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Apellido -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="last_name" value="{{ __('Apellido') }}" />
            <x-jet-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="state.last_name" />
            <x-jet-input-error for="last_name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Dirección -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="direction" value="{{ __('Dirección') }}" />
            <x-jet-input id="direction" type="text" class="mt-1 block w-full" wire:model.defer="state.direction" />
            <x-jet-input-error for="direction" class="mt-2" />
        </div>

        <!-- Fecha de Nacimiento-->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="date_of_birth" value="{{ __('Fecha de Nacimiento') }}" />
            <x-jet-input id="date_of_birth" type="date" class="mt-1 block w-full"   wire:model.defer="state.date_of_birth" />
            <x-jet-input-error for="date_of_birth" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
