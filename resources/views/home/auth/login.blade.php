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
                    <p class="text-center">Silahkan Masukkan </p>

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger">{{ session('loginError') }}</div>
                    @endif
                    <form action="/login/do" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for=""><b>Email</b></label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-primary mt-4 px-5">Login <i class="fas fa-sign-in-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
