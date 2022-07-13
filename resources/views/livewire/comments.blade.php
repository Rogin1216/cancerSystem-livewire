<div>
    <form class="row" wire:submit.prevent="appendBody">
        <div class="col">
            <input type="text" wire:model.lazy="newComment">
            <button type="submit">Add</button>
    </form>
    </div>
    <div class="row">
        <div class="col border border-secondary">
        @foreach($text as $a)
            <div class="rounded border shadow p-3 my-2">
                <div class="flex justify-start my-2">
                    <p class="font-bold text-lg">{{$a->hpercode}}</p>
                    <p class="mx-3 py-1 text-xs text-gray-50 font-semibold"></p>
                </div>
                <p class="text-gray-800"></p>
            </div>
            @endforeach
        </div>
    </div>
</div>