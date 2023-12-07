<div class="flex flex-col items-center gap-7">
    <form action="">
       <textarea class="rounded px-3 py-2 mb-3 text-black"
              wire:model.live="message"
              cols="40" rows="5" ></textarea> 
    </form>
    

    <div class="flex flex-wrap gap-7 text-center">    
        @foreach(explode(' ', $message) as $word)            
            <div class="flex">
                @foreach(str_split(strtolower($word)) as $character)
                    <div>
                        <span class="material-symbols-outlined p-1">
                            {{ $this->map[$character] ?? $character }}
                        </span>                  
                    </div>            
                @endforeach
            </div>
        @endforeach    
    </div>
</div>

