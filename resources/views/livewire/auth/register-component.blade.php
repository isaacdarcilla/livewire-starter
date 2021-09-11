<div>
    @if(!$showSuccess)
        <form class="form-horizontal" wire:submit.prevent="submit">
            @csrf
            <div class="mb-3">
                <label class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" wire:model="first_name"
                       class="form-control rounded-0 @error('first_name') is-invalid @enderror"
                       placeholder="Enter first name"
                       autofocus>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Middle Name</label>
                <input type="text" wire:model="middle_name"
                       class="form-control rounded-0 @error('middle_name') is-invalid @enderror"
                       placeholder="Enter middle name"
                       autofocus>
                @error('middle_name')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" wire:model="last_name"
                       class="form-control rounded-0 @error('last_name') is-invalid @enderror"
                       placeholder="Enter last name"
                       autofocus>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Suffix Name</label>
                <input type="text" wire:model="suffix_name"
                       class="form-control rounded-0 @error('suffix_name') is-invalid @enderror"
                       placeholder="Enter suffix name"
                       autofocus>
                @error('suffix_name')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <input type="text" wire:model="email"
                       class="form-control rounded-0 @error('email') is-invalid @enderror"
                       placeholder="Enter email"
                       autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" wire:model="password"
                       class="form-control rounded-0 @error('password') is-invalid @enderror"
                       placeholder="Enter password" autofocus>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" wire:model="password_confirmation"
                       class="form-control rounded-0 @error('password_confirmation') is-invalid @enderror"
                       placeholder="Confirm password"
                       autofocus>
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                @enderror
            </div>

            <div class="mt-4 d-grid">
                <button class="btn btn-primary rounded-0 waves-effect waves-light"
                        type="submit">Register
                </button>
            </div>

            <div class="mt-4 text-center">
                <p class="mb-0">By registering you agree to the <a href="#"
                                                                   class="text-primary">Terms
                        of Use</a></p>
            </div>
        </form>
    @else
        <div class="text-center">
            <div class="text-success bx bxs-check-circle my-2" style="font-size: 50px"></div>
            <div>
                Registration successful! Please check your email address for additional instructions.
            </div>
        </div>
    @endif
</div>
