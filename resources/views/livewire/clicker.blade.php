<div>
  <h1>{{ $title }}</h1>

  @foreach ($users as $item)
    <p>{{ $item->email }}</p>   
  @endforeach

  <button wire:click="createNewUser">Click Me</button>
  <button wire:click="deleteAllUser">Delete All User</button>
</div>
