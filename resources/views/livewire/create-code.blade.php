<div class="flex flex-col items-center gap-7">
    <form action="">
       <textarea class="rounded px-3 py-2 mb-3 text-black"
              wire:model.live="message"
              cols="40" rows="5" ></textarea> 
    </form>
    
    {{-- Code --}}
    <div class="flex flex-wrap gap-7 text-center">    
        @foreach(explode(' ', $message) as $word)            
            <div class="flex">
                @foreach(str_split(strtolower($word)) as $character)
                    <div>
                        <span class="material-symbols-outlined p-1">
                            {{ $this->legend[$character] ?? $character }}
                        </span>                  
                    </div>            
                @endforeach
            </div>
        @endforeach    
    </div>

    {{-- legend --}}
    <h3>Legend</h3>
    <div class="flex flex-wrap text-center mt-auto">
        
        @foreach($this->legend as $letter => $symbol)
            <div class="flex flex-col border border-white p-1">
                <span>{{ ucwords($letter) }}</span>
                <span class="material-symbols-outlined p-1">
                    {{ $symbol }}
                </span>
            </div>

        @endforeach

    </div>
</div>

