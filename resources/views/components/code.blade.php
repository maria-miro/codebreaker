    {{-- Code --}}
<div class="flex flex-wrap gap-7 text-center">    
    @foreach(explode(' ', $message) as $word)            
        <div class="flex">
            @foreach(str_split(strtolower($word)) as $character)
                <div>
                    <span class="material-symbols-outlined p-1">
                        {{ $legend[$character] ?? $character }}
                    </span>                  
                </div>            
            @endforeach
        </div>
    @endforeach    
</div>