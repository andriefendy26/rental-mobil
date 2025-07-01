@props(['name', 'id' => $name, 'options' => [], 'label' => null, 'selected' => null])

<div class="relative">
    @if($label)
        <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-700">{{ $label }}</label>
    @endif
    <select
        name="{{ $name }}"
        id="{{ $id }}"
        {{ $attributes->merge(['class' => 'w-full p-4 pl-12 border border-gray-300 rounded-lg appearance-none bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500']) }}
    >
        <option value="">-- Pilih --</option>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" @selected($value == $selected)>{{ $text }}</option>
        @endforeach
    </select>
</div>
