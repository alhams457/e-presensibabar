<div>

    <form wire:submit.prevent="register" id="registerForm">          
        <div class="form-group mb-2">
            <label class="form-label" for="username">Nama Pengguna</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Nama Pengguna">                               
        </div><!--end form-group--> 

        <div class="form-group mb-2">
            <label class="form-label" for="useremail">Email</label>
            <input type="email" class="form-control" id="useremail" name="user email" placeholder="Masukkan Email">                               
        </div><!--end form-group--> 

        <div class="form-group mb-2">
            <label class="form-label" for="userpassword">Kata Sandi</label>                                            
            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Masukkan Kata Sandi">                            
        </div><!--end form-group--> 

        <div class="form-group mb-2">
            <label class="form-label" for="Confirmpassword">Konfirmasi Kata Sandi</label>                                            
            <input type="password" class="form-control" name="password" id="Confirmpassword" placeholder="Masukkan Konfirmasi Kata Sandi">                            
        </div><!--end form-group--> 

        <div class="form-group mb-2">
            <label class="form-label" for="organisasi">Organisasi PD</label>
            <select name="organisasi" id="organisasi" class="form-control">
                <option value="">Pilih Organisasi</option>
                @foreach($organisasiOptions as $organisasi)
                    <option value="{{ $organisasi->kd_opd }}">{{ $organisasi->nama_opd }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group row mt-3">
            <div class="col-12">
                <div class="form-check form-switch form-switch-primary">
                    <input class="form-check-input" type="checkbox" id="customSwitchPrimary">
                    <label class="form-check-label" for="customSwitchPrimary">Dengan mendaftar, Anda setuju dengan <a href="#" class="text-primary">Ketentuan Penggunaan</a></label>
                </div>
            </div><!--end col--> 
        </div><!--end form-group--> 

        <div class="form-group mb-0 row">
          <div class="col-12">
            <div class="d-grid mt-3">
                <button class="btn btn-primary" type="button">Daftar <i class="fas fa-sign-in-alt ms-1"></i></button>
            </div>
          </div>
        </div> <!--end form-group-->                           
    </form>
    <div class="text-center">
        <p class="text-muted">Sudah punya akun ?  <a href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal" class="text-primary ms-2">Log in</a></p>

   </div>
</div>
