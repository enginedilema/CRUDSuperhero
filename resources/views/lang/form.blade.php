<div class="space-y-6">
    
    <div>
        <x-input-label for="code" :value="__('Code')"/>
        <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" :value="old('code', $lang?->code)" autocomplete="code" placeholder="Code"/>
        <x-input-error class="mt-2" :messages="$errors->get('code')"/>
    </div>
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $lang?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>