<div class="flex flex-col items-center gap-7 h-full w-full justify-center">
    <form action="" class="print:hidden">
       <textarea class="rounded px-3 py-2 mb-3 text-black"
              wire:model.live="message"
              cols="40" rows="5" ></textarea> 
    </form>
    <x-code :message="$message"  :legend="$this->legend" />

    <x-legend :legend="$this->legend" />

</div>

