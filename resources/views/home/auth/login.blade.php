<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/loginn.png" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">

                    <div class="text-center"><strong>
                            <h4>LOGIN</h4>
                        </strong></div>

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger">{{ session('loginError') }}</div>
                    @endif
                    <form action="/login/do" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password"><b>Password</b></label>
                            <div class="position-relative">
                                <input type="password" id="password" name="password" class="form-control pr-4"
                                    placeholder="Password">
                                <i id="eyeIcon" class="fas fa-eye position-absolute"
                                    style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                    onclick="togglePassword()"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 px-5">Login <i class="fas fa-sign-in-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        let passwordField = document.getElementById('password');
        let eyeIcon = document.getElementById('eyeIcon');

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
