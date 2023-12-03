<div class="container">
  <div class="row">
    <div class="col-md-6 mt-4">
      <div class="card">
        <div class="card-body">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="" method="post" wire:submit="createNewUser">
            <div class="mb-3">
              <label for="name" class="form-label">Fullname</label>
              <input type="text" class="form-control" id="name" name="name" wire:model="name" />
              @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" wire:model="email" />
              <div id="email" class="form-text">We'll never share your email with anyone else.</div>
              @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" wire:model="password" />
              @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger" wire:click="deleteAllUser">Delete All User</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6 mt-4">
      @foreach ($users as $item)
        <p>{{ $item->email }}</p>     
      @endforeach

      {{ $users->links() }}
    </div>
  </div>
</div>