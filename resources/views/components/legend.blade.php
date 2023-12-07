{{-- Legend --}}
<h3>Legend</h3>

<div class="flex flex-wrap text-center mt-auto">
    
    @foreach($legend as $letter => $symbol)
        <div class="flex flex-col border border-white p-1">
            <span>{{ ucwords($letter) }}</span>
            <span class="material-symbols-outlined p-1">
                {{ $symbol }}
            </span>
        </div>
    @endforeach

</div>