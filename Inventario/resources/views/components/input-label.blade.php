@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-900 dark:text-dark-500']) }}>
    {{ $value ?? $slot }}
</label>
