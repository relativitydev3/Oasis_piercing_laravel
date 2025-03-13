<div class="">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="name" class="form-label">{{ __('Name') }}<span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                   value="{{ old('name', $user?->name) }}" id="name" placeholder="Name" required>
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" 
                   value="{{ old('last_name', $user?->last_name) }}" id="last_name" placeholder="Last Name">
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="c_c" class="form-label">{{ __('Cc') }}</label>
            <input type="text" name="CC" class="form-control @error('CC') is-invalid @enderror" 
                   value="{{ old('CC', $user?->CC) }}" id="c_c" placeholder="Cc">
            {!! $errors->first('CC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="email" class="form-label">{{ __('Email') }}<span class="text-danger">*</span></label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                   value="{{ old('email', $user?->email) }}" id="email" placeholder="Email" required>
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">{{ __('Password') }}<span class="text-danger">*</span></label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                   id="password" onkeyup="validatePassword()">
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
            <div id="passwordError" class="invalid-feedback" style="display: none;">Las contraseñas no coinciden</div>
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}<span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" class="form-control" 
                   id="password_confirmation" onkeyup="validatePassword()">
            <div id="confirmPasswordError" class="invalid-feedback" style="display: none;">Las contraseñas no coinciden</div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-primary w-50">{{ __('Submit') }}</button>
    </div>
</div>

<script>
function validatePassword() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    const submitButton = document.querySelector('button[type="submit"]');

    if (password.value && confirmPassword.value) {
        if (password.value !== confirmPassword.value) {
            password.classList.add('is-invalid');
            confirmPassword.classList.add('is-invalid');
            passwordError.style.display = 'block';
            confirmPasswordError.style.display = 'block';
            submitButton.disabled = true;
        } else {
            password.classList.remove('is-invalid');
            confirmPassword.classList.remove('is-invalid');
            passwordError.style.display = 'none';
            confirmPasswordError.style.display = 'none';
            submitButton.disabled = false;
        }
    } else {
        password.classList.remove('is-invalid', 'is-valid');
        confirmPassword.classList.remove('is-invalid', 'is-valid');
        passwordError.style.display = 'none';
        confirmPasswordError.style.display = 'none';
        submitButton.disabled = false;
    }
}
</script>
