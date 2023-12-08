    {{-- Code --}}
<div class="code w-full flex flex-col gap-y-10 text-center items-start print:mt-auto">    
    @foreach(explode(PHP_EOL, $message) as $line)
        <div class="line flex flex-wrap gap-x-7">
            @foreach(explode(' ', $line) as $word)            
                <div class="word flex">
                    @foreach(str_split(strtolower($word)) as $character)
                        <div class="symbol flex flex-col">

                            @isset($legend[$character])
                            <span class="material-symbols-outlined p-1">
                                {{ $legend[$character] ?? $character }}
                            </span> 
                            
                            @else
                            <span class="text-2xl">
                                {{ $character }}
                            </span> 
                            @endisset                   
                        </div>            
                    @endforeach
                </div>
            @endforeach
        </div>
    @endforeach        
</div>