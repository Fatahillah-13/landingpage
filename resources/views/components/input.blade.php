@props(['label', 'name', 'type' => 'text'])

<div class="space-y-1">
    <label class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
    @error($name)
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>