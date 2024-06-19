<div>

    <div class="flex flex-col bg-slate-400 w-[501px] h-[500px] justify-end p-2 rounded-xl items-end overflow-scroll">
        @foreach ($e as $a)
        <p class="my-2">
            <span class="bg-white rounded p-2 px-[20px] ml-2">{{$a['theMessage']}}</span>
            <span class="bg-blue-900 rounded p-2 px-[20px] ml-2 ">{{$a['name']}} </span>
        </p>
        @endforeach
    </div>
    <form wire:submit.prevent="messageSent">
        <input type="text" wire:model="message" class="w-[400px] h-[50px] mt-2 rounded-xl">
        <button type="submit" class="w-[100px] border bg-blue-500 h-[50px] rounded-xl">Send</button>
    </form>

</div>