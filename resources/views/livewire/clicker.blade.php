<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card py-3">
        <div class="card-body">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="" method="post" enctype="multipart/form-data" wire:submit="createNewUser">
            <div class="mb-3">
              <label for="name" class="form-label">Fullname</label>
              <input type="text" class="form-control" id="name" name="name" wire:model="name" />
              <div id="email" class="form-text">We'll never share your data with anyone else.</div>
              @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" wire:model="email" />
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

            <div class="mb-3">
              <label for="image" class="form-label">Profile Picture</label>
              <input type="file" class="form-control" id="image" name="image" wire:model="image" accept="image/png, image/jpg, image/jpeg" wire:model="image" />
              @error('image')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror

              @if ($image)
                <div class="col-md-12 mt-3">
                  <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="Preview Image" />
                </div>
              @endif
              
              <div class="spinner-grow spinner-grow-sm" role="status" wire:loading wire:target="image">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>

            <div class="text-end">
              @for ($i = 1; $i <= 3; $i++)
                <div class="spinner-grow spinner-grow-sm me-2" role="status" wire:loading.delay>
                  <span class="visually-hidden">Loading...</span>
                </div>
              @endfor
            </div>

            <div class="text-end" wire:loading.remove>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-danger" wire:click="deleteAllUser">Delete All User</button>
            </div>
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