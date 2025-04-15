@props(['label', 'name', 'options' => []])

<div class="space-y-1">
    <label class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <select name="{{ $name }}"
        class=" input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
        <option value="">-- Pilih --</option>
        @foreach ($options as $option)
            <option value="{{ $option }}" {{ old($name) == $option ? 'selected' : '' }}>{{ $option }}
            </option>
        @endforeach
    </select>
    @error($name)
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>
