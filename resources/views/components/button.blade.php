<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn-primary bg-slate-500 hover:bg-slate-600 active:bg-slate-700 w-full']) }}>
    {{ $slot }}
</button>
