<section>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Contact</h5>
        </div>
        <div class="card-body">
          <p class="card-text">Feel free to reach out to me if you have any inquiries or if you're interested in collaborating on projects. I'm just an email or phone call away! Let's connect and explore the possibilities of working together to bring innovative ideas to life.</p>

          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="" method="post" wire:submit="submit">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="form.name" class="form-label">Your name</label>
                  <input type="text" class="form-control" id="form.name" wire:model="form.name" />
                  @error('form.name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="form.email" class="form-label">Your Email</label>
                  <input type="text" class="form-control" id="form.email" wire:model="form.email" />
                  @error('form.email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            
            <div class="mb-3">
              <label for="form.subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="form.subject" wire:model="form.subject" />
              @error('form.subject')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="form.message" class="form-label">Message</label>
              <textarea class="form-control" id="form.message" rows="5" wire:model="form.message"></textarea>
              @error('form.message')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-2 text-end">
              <button type="submit" class="btn btn-sm btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>