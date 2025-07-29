  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/fronted_end/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/fronted_end/js/main.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/fronted_end/vendor/sweetalert2/sweetalert2.min.js') }}"></script>


{{-- <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('{{ url('admin/login') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest', // Indicate that this is an AJAX request
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                $('#loginModal').modal('hide');
                Swal.fire({
                    title: 'Login Berhasil!',
                    text: 'Anda akan diarahkan ke dashboard.',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: true
                }).then(() => {
                    window.location.href = '{{ url('admin/dashboard') }}';
                });
            } else {
                $('#loginModal').modal('hide');
                
                Swal.fire({
                    title: 'Login Gagal!',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(() => {
                    $('#loginModal').modal('show');
                });
            }
        })

        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Terjadi Kesalahan!',
                text: 'Silakan coba lagi.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
</script> --}}

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        var daftarModal = new bootstrap.Modal(document.getElementById('daftarModal'));

        // Check if the buttons exist before adding event listeners
        var getStartedButton = document.querySelector('.btn-getstarted');
        if (getStartedButton) {
            getStartedButton.addEventListener('click', function () {
                loginModal.show();
            });
        } else {
            console.warn('Button .btn-getstarted not found.');
        }

        var daftarButton = document.querySelector('.btn-daftar');
        if (daftarButton) {
            daftarButton.addEventListener('click', function () {
                daftarModal.show();
            });
        } else {
            console.warn('Button .btn-daftar not found.');
        }
    });
</script>

<script>
    Livewire.on('loginError', message => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message,
        });
    });

    Livewire.on('loginSuccess', message => {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: message,
        }).then(() => {
            window.location.href = '/admin/dashboard'; // Redirect after success
        });
    });
</script>
@endpush

