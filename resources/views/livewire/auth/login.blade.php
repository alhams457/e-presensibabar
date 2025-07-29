<div>
    
    <form wire:submit.prevent="login" id="loginForm">
        <div class="form-group mb-2">
            <label class="form-label" for="username">Nama Pengguna</label>
            <input type="text" class="form-control" id="username" name="username"
                placeholder="Masukkan Nama Pengguna" required wire:model="username">
        </div>
        <div class="form-group">
            <label class="form-label" for="userpassword">Kata sandi</label>
            <input type="password" class="form-control" name="password"
                id="userpassword" placeholder="Masukkan kata sandi" required wire:model="password">
        </div>
        <div class="form-group row mt-3">
            <div class="col-sm-6">
                <div class="form-check form-switch form-switch-primary">
                    <input class="form-check-input" type="checkbox"
                        id="customSwitchPrimary">
                    <label class="form-check-label" for="customSwitchPrimary">Ingat
                        saya</label>
                </div>
            </div>
            <div class="col-sm-6 text-end">
                <a href="{{url('/lupa-kata-sandi')}}" class="text-muted font-13"><i
                        class="dripicons-lock"></i> Lupa Kata Sandi?</a>
            </div>
        </div>
        <div class="form-group mb-0 row">
            <div class="col-12">
              <div class="d-grid mt-3">
                <button class="btn btn-primary" type="submit">Masuk <i class="fas fa-sign-in-alt ms-1"></i></button>
            </div>

            </div>
        </div>
    </form>

    <div class="text-center mb-2">
        <p class="text-muted">Belum punya akun ? 
          <a href="#daftarModal" data-bs-toggle="modal" data-bs-target="#daftarModal"  class="text-primary ms-2 btn-daftar">Daftar</a>
        </p>
      </div>


</div>

