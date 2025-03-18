<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body bg-primary">
                Selamat Datang {{ auth()->user()->name }} 😃
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">User</span>
            <span class="info-box-number">
                {{ \App\Models\User::count() }} <!-- Menghitung jumlah user -->
                <small>User</small>
            </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
