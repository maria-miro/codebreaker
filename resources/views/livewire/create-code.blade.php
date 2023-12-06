<div class="flex flex-col justify-center">
    <textarea class="rounded px-3 py-2 mb-3"
              wire:model.live="message"
              cols="40" rows="5" ></textarea>

    <p>
        @foreach(str_split(strtolower($message)) as $character)

            <span class="material-symbols-outlined text-white">
                {{ $this->map[$character] ?? $character }}
            </span>

            @if($character == " ")
                <span class="mr-5"></span>
            @endif

        @endforeach
    </p>
    
</div>

