<div wire:poll.keep-alive.10s>
  <table class="table">
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