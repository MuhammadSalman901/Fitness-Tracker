<label {{ $attributes->merge(
    [
        'class'=>'block text-sm/6 font-medium bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent'
    ]
)}}>{{ $slot }}</label>