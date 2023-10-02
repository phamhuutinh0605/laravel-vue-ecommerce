@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm bg-slate-500 py-3 px-4 text-white rounded']) }}>
        {{ $status }}
    </div>
@endif
