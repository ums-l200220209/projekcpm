<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($user))
                    <form action="{{ url('admin/user/' . $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                        <form action="/admin/user" method="POST">
                @endif

                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Username" value="{{ isset($user) ? $user->name : old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email" value="{{ isset($user) ? $user->email : old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <div class="position-relative">
                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <i id="eyeIcon1" class="fas fa-eye position-absolute"
                            style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                            onclick="togglePassword('password', 'eyeIcon1')"></i>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <div class="position-relative">
                        <input type="password" id="re_password" name="re_password"
                            class="form-control @error('re_password') is-invalid @enderror" placeholder="Password">
                        <i id="eyeIcon2" class="fas fa-eye position-absolute"
                            style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                            onclick="togglePassword('re_password', 'eyeIcon2')"></i>
                    </div>
                    @error('re_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword(fieldId, iconId) {
        let passwordField = document.getElementById(fieldId);
        let eyeIcon = document.getElementById(iconId);

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
