<div>
  <div class="input-group mb-3">
    <input type="text" wire:model.live.debounce.350ms="search" class="form-control" name="search" placeholder="Search.." />
    <span class="input-group-text" wire:click="update" style="cursor: pointer;">Search</span>
  </div>

  <table class="table" wire:poll.keep-alive.10s>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Fullname</th>
        <th scope="col">Email</th>
        <th scope="col">Profile</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $users->firstItem() + $loop->index }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <img src="{{ asset('storage/' . $user->image) }}" class="img-fluid" alt="Profile Picture" style="max-width: 150px" />
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  
  {{ $users->links() }}
</div>