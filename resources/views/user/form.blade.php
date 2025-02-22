<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $user?->last_name) }}" id="last_name" placeholder="Last Name">
            {!! $errors->first('last_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="c_c" class="form-label">{{ __('Cc') }}</label>
            <input type="text" name="CC" class="form-control @error('CC') is-invalid @enderror" value="{{ old('CC', $user?->CC) }}" id="c_c" placeholder="Cc">
            {!! $errors->first('CC', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
    <label for="password" class="form-label">{{ __('Password') }}</label>
    <input type="password" 
           name="password" 
           class="form-control @error('password') is-invalid @enderror" 
           id="password"
           onkeyup="validatePassword()">
    {!! $errors->first('password', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    <div id="passwordError" class="invalid-feedback" style="display: none;">
        <strong>Las contraseñas no coinciden</strong>
    </div>
</div>

<div class="form-group mb-2 mb20">
    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
    <input type="password" 
           name="password_confirmation" 
           class="form-control" 
           id="password_confirmation"
           onkeyup="validatePassword()">
    <div id="confirmPasswordError" class="invalid-feedback" style="display: none;">
        <strong>Las contraseñas no coinciden</strong>
    </div>
</div>

<script>
function validatePassword() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    const submitButton = document.querySelector('button[type="submit"]');

    // Solo validar si ambos campos tienen contenido
    if (password.value && confirmPassword.value) {
        if (password.value !== confirmPassword.value) {
            password.classList.add('is-invalid');
            confirmPassword.classList.add('is-invalid');
            passwordError.style.display = 'block';
            confirmPasswordError.style.display = 'block';
            submitButton.disabled = true;
        } else {
            password.classList.remove('is-invalid');
            password.classList.add('is-valid');
            confirmPassword.classList.remove('is-invalid');
            confirmPassword.classList.add('is-valid');
            passwordError.style.display = 'none';
            confirmPasswordError.style.display = 'none';
            submitButton.disabled = false;
        }
    } else {
        // Si algún campo está vacío, remover todas las clases y mensajes
        password.classList.remove('is-invalid', 'is-valid');
        confirmPassword.classList.remove('is-invalid', 'is-valid');
        passwordError.style.display = 'none';
        confirmPasswordError.style.display = 'none';
        submitButton.disabled = false;
    }
}

// Validar también cuando el formulario se envía
document.querySelector('form').addEventListener('submit', function(event) {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');

    if (password.value !== confirmPassword.value) {
        event.preventDefault();
        validatePassword();
    }
});
</script>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>