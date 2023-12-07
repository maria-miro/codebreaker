<div class="flex flex-col items-center gap-7">
    <form action="">
       <textarea class="rounded px-3 py-2 mb-3 text-black"
              wire:model.live="message"
              cols="40" rows="5" ></textarea> 
    </form>
    
    <x-code :message="$message"  :legend="$this->legend" />
        
    <x-legend :legend="$this->legend" />

</div>

