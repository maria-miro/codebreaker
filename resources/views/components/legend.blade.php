{{-- Legend --}}
<h2 class="legend mt-auto">Legend</h2>
<div class="flex flex-wrap text-center">
    
    @foreach($legend as $letter => $symbol)
        <div class="flex flex-col border border-white print:border-slate-300 p-1">
            <span>{{ ucwords($letter) }}</span>
            <span class="material-symbols-outlined p-1">
                {{ $symbol }}
            </span>
        </div>
    @endforeach

</div>