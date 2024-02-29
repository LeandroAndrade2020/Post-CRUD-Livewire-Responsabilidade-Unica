<div>
    {{-- @dump($dados) --}}
    <x-ts-button @click="$wire.set('modalCreate', true)" color="secondary">+</x-ts-button>

    <x-dialog-modal wire:model="modalCreate" submit="save">
        <x-slot name="title">
            Form User Create
        </x-slot>

        <x-slot name="content">

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <x-ts-errors />
                </div>

                <div class="col-span-12">
                    <x-ts-input label="Nome" wire:model="form.name" />
                </div>
                <div class="col-span-6">
                    <x-ts-input label="E-mail" wire:model="form.email" />
                </div>
                <div class="col-span-6">
                    <x-model-escolas label="Escola" campo="form.escola_id"/>
                </div>
                <div class="col-span-6">
                    <x-model-cargos/>
                </div>
                <div class="col-span-6">
                    <x-ts-input label="Matrícula" wire:model="form.matricula" />
                </div>
                <div class="col-span-6">
                    <x-ts-input label="CPF" wire:model="form.cpf" x-mask="999.999.999-99" />
                </div>
                <div class="col-span-6">
                    <x-ts-input label="Data de nascimento" wire:model="form.data_nascimento" type="date" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCreate', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
