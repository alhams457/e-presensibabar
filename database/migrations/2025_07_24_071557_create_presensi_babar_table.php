<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('absen_baru')) {
            Schema::create('absen_baru', function (Blueprint $table) {
                $table->increments('id');
                $table->string('uuid', 25);
                $table->string('nip', 18);
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu_pagi')->nullable()->default('00:00:00');
                $table->time('waktu_siang')->nullable()->default('00:00:00');
                $table->time('waktu_sore')->nullable()->default('00:00:00');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
            });
        }

        if (!Schema::hasTable('absen_reguler')) {
            Schema::create('absen_reguler', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('uuid', 25);
                $table->string('nip', 18);
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();

                $table->index(['nip', 'tanggal', 'status', 'waktu'], 'idx_absen_reguler_nip_tanggal_status_waktu');
            });
        }

        if (!Schema::hasTable('absen_reguler_duplicate_phl')) {
            Schema::create('absen_reguler_duplicate_phl', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('uuid');
                $table->string('nik');
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();
            });
        }

        if (!Schema::hasTable('absen_reguler_duplicate_pns')) {
            Schema::create('absen_reguler_duplicate_pns', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('uuid', 25);
                $table->string('nip', 18);
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();
            });
        }

        if (!Schema::hasTable('absen_reguler_phl')) {
            Schema::create('absen_reguler_phl', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('uuid');
                $table->string('nik')->index('idx_absen_nik');
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal')->index('idx_absen_tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();
            });
        }

        if (!Schema::hasTable('absen_reguler_phl_recovery')) {
            Schema::create('absen_reguler_phl_recovery', function (Blueprint $table) {
                $table->integer('id', true)->index('idx_id');
                $table->string('uuid', 25);
                $table->string('nik', 18)->index('idx_nip');
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();

                $table->primary(['id']);
            });
        }

        if (!Schema::hasTable('absen_reguler_recovery')) {
            Schema::create('absen_reguler_recovery', function (Blueprint $table) {
                $table->integer('id')->nullable()->index('idx_absen_reguler_recovery_id');
                $table->string('uuid', 25);
                $table->string('nip', 18)->index('idx_absen_reguler_recovery_nip');
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();
            });
        }

        if (!Schema::hasTable('absen_reguler_test')) {
            Schema::create('absen_reguler_test', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('uuid', 25);
                $table->string('nip', 18);
                $table->string('nama');
                $table->double('lat')->nullable();
                $table->double('lon')->nullable();
                $table->string('image')->nullable();
                $table->date('tanggal');
                $table->time('waktu')->nullable()->default('00:00:00');
                $table->integer('status');
                $table->time('selisih')->nullable();
                $table->integer('kd_kehadiran')->default(0);
                $table->string('image_upload')->nullable();
            });
        }

        if (!Schema::hasTable('changelog_app')) {
            Schema::create('changelog_app', function (Blueprint $table) {
                $table->integer('id', true);
                $table->text('changelog_name');
                $table->text('changelog_description');
                $table->char('changelog_type', 50)->default('');
                $table->date('changelog_date');
                $table->string('created_by', 50);
                $table->dateTime('created_at')->useCurrent();
                $table->string('modified_by', 50)->nullable();
                $table->dateTime('modified_at')->useCurrentOnUpdate()->nullable();
            });
        }

        if (!Schema::hasTable('changelog_query')) {
            Schema::create('changelog_query', function (Blueprint $table) {
                $table->integer('id', true);
                $table->text('content');
                $table->string('created_by', 100);
                $table->dateTime('created_at')->useCurrent();
                $table->string('ip_address', 15);
                $table->text('user_agent');
            });
        }

        if (!Schema::hasTable('clusteropd')) {
            Schema::create('clusteropd', function (Blueprint $table) {
                $table->integer('id_cluster_opd');
                $table->integer('kd_opd');
                $table->integer('kd_unit_opd');
                $table->integer('kd_subunit_opd');
                $table->double('lat_opd')->nullable();
                $table->double('lon_opd')->nullable();
                $table->float('radius');
            });
        }

        if (!Schema::hasTable('clustersenin')) {
            Schema::create('clustersenin', function (Blueprint $table) {
                $table->integer('id_cluster_opd');
                $table->integer('kd_opd');
                $table->double('lat_opd');
                $table->double('lon_opd');
                $table->float('radius');
            });
        }

        if (!Schema::hasTable('company')) {
            Schema::create('company', function (Blueprint $table) {
                $table->integer('id_company', true);
                $table->string('company_name', 100);
                $table->text('company_desc');
                $table->text('company_address');
                $table->text('company_maps');
                $table->string('company_phone', 50);
                $table->string('company_phone2', 50);
                $table->string('company_fax', 50);
                $table->string('company_webmail_name')->nullable();
                $table->string('company_webmail_pass')->nullable();
                $table->string('company_gmail_name')->nullable();
                $table->string('company_gmail_pass')->nullable();
                $table->text('company_photo');
                $table->text('company_photo_thumb');
                $table->char('created_by', 50);
                $table->dateTime('created_at')->useCurrent();
                $table->char('modified_by', 50);
                $table->dateTime('modified_at')->useCurrentOnUpdate()->nullable()->useCurrent();
            });
        }

        if (!Schema::hasTable('dat_url')) {
            Schema::create('dat_url', function (Blueprint $table) {
                $table->integer('id_url', true);
                $table->string('url_absensi');
                $table->string('url_ekin');
                $table->string('url_ekinphl');
                $table->string('url_sidilan');
                $table->string('url_nonasn')->nullable();
                $table->string('ukey')->nullable();
                $table->string('key')->nullable();
                $table->string('ukey1')->nullable();
                $table->string('key1')->nullable();
                $table->string('ukey2')->nullable();
                $table->string('key2')->nullable();
                $table->string('ukey3')->nullable();
                $table->string('key3')->nullable();
                $table->string('ukey4')->nullable();
                $table->string('key4')->nullable();
            });
        }

        if (!Schema::hasTable('data_access')) {
            Schema::create('data_access', function (Blueprint $table) {
                $table->integer('id_data_access', true);
                $table->string('data_access_name', 50);
                $table->string('color', 10);
            });
        }

        if (!Schema::hasTable('download')) {
            Schema::create('download', function (Blueprint $table) {
                $table->integer('id_download', true);
                $table->string('judul', 100);
                $table->string('nama_file', 100);
                $table->date('tgl_posting');
                $table->time('jam');
                $table->integer('hits');
                $table->string('versi');
            });
        }

        if (!Schema::hasTable('dt_phl')) {
            Schema::create('dt_phl', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('nik', 16)->index('idx_dtphl_nik');
                $table->string('nama')->nullable();
                $table->string('jabatan')->nullable();
                $table->integer('id_lokasi')->nullable();
                $table->string('kd_opd')->nullable()->index('idx_kd_opd');
                $table->string('kd_unit_opd')->nullable();
                $table->string('kd_subunit_opd')->nullable();
                $table->string('kd_presensi', 11);
                $table->string('kd_subpresensi', 11);
                $table->boolean('kd_subsubpresensi')->default(true);
                $table->string('stts_peg')->nullable();
                $table->integer('stts_presensi');

                $table->index(['kd_presensi', 'kd_subpresensi'], 'idx_dtphl_presensi');
                $table->index(['nik'], 'idx_nik');
            });
        }

        if (!Schema::hasTable('dt_pns')) {
            Schema::create('dt_pns', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('nip', 18)->index('idx_dt_pns_nip');
                $table->string('nama');
                $table->string('jabatan')->nullable();
                $table->string('pangkat')->nullable();
                $table->string('gol')->nullable();
                $table->integer('id_lokasi')->nullable();
                $table->integer('kd_opd')->nullable()->index('idx_dt_pns_kd_opd');
                $table->integer('kd_unit_opd')->nullable();
                $table->integer('kd_subunit_opd')->nullable();
                $table->string('kd_presensi')->nullable();
                $table->string('kd_subpresensi')->nullable();
                $table->tinyInteger('kd_subsubpresensi')->default(1);
                $table->integer('stts_presensi');
                $table->string('stts_peg')->nullable();

                $table->index(['nip', 'kd_opd'], 'idx_dt_pns_nip_kd_opd');
            });
        }

        if (!Schema::hasTable('jam_absen')) {
            Schema::create('jam_absen', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
                $table->time('start_app');
                $table->time('start_checkin');
                $table->time('start_checkin_jumat');
                $table->time('start_breakin');
                $table->time('start_breakin_jumat');
                $table->time('start_checkout');
                $table->time('start_checkout_jumat');
                $table->time('stop');
            });
        }

        if (!Schema::hasTable('jam_absen_normal')) {
            Schema::create('jam_absen_normal', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
                $table->time('start_app');
                $table->time('start_checkin');
                $table->time('start_checkin_jumat');
                $table->time('start_breakin');
                $table->time('start_breakin_jumat');
                $table->time('start_checkout');
                $table->time('start_checkout_jumat');
                $table->time('stop');
            });
        }

        if (!Schema::hasTable('jam_absen_ramdhan')) {
            Schema::create('jam_absen_ramdhan', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
                $table->time('start_app');
                $table->time('start_checkin');
                $table->time('start_checkin_jumat');
                $table->time('start_breakin');
                $table->time('start_breakin_jumat');
                $table->time('start_checkout');
                $table->time('start_checkout_jumat');
                $table->time('stop');
            });
        }

        if (!Schema::hasTable('jam_guru')) {
            Schema::create('jam_guru', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
                $table->time('start_app');
                $table->time('start_checkin');
                $table->time('start_breakin');
                $table->time('start_breakin_jumat');
                $table->time('start_checkout');
                $table->time('start_checkout_jumat');
                $table->time('stop');
            });
        }

        if (!Schema::hasTable('jam_shift')) {
            Schema::create('jam_shift', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('kd_presensi')->nullable();
                $table->integer('kd_subpresensi')->nullable();
                $table->integer('kd_shift');
                $table->time('mulai')->nullable();
                $table->time('selesai');
            });
        }

        if (!Schema::hasTable('keys')) {
            Schema::create('keys', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('user_id');
                $table->string('key', 40);
                $table->integer('level');
                $table->boolean('ignore_limits')->default(false);
                $table->boolean('is_private_key')->default(false);
                $table->text('ip_addresses')->nullable();
                $table->integer('date_created');
            });
        }

        if (!Schema::hasTable('libur_guru')) {
            Schema::create('libur_guru', function (Blueprint $table) {
                $table->integer('id', true);
                $table->date('date')->nullable();
                $table->string('ket')->nullable();
            });
        }

        if (!Schema::hasTable('login_attempts')) {
            Schema::create('login_attempts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('ip_address', 50);
                $table->string('username', 100);
                $table->dateTime('time')->useCurrent();
            });
        }

        if (!Schema::hasTable('logs')) {
            Schema::create('logs', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('uri');
                $table->string('method', 6);
                $table->text('params')->nullable();
                $table->string('api_key', 40);
                $table->string('ip_address', 45);
                $table->integer('time');
                $table->float('rtime')->nullable();
                $table->string('authorized', 1);
                $table->smallInteger('response_code')->nullable()->default(0);
            });
        }

        if (!Schema::hasTable('menu')) {
            Schema::create('menu', function (Blueprint $table) {
                $table->integer('id_menu', true);
                $table->string('menu_name', 100);
                $table->string('menu_controller', 100);
                $table->string('menu_function', 100);
                $table->string('menu_icon', 50);
                $table->boolean('is_active')->default(true);
                $table->tinyInteger('order_no');
            });
        }

        if (!Schema::hasTable('menu_access')) {
            Schema::create('menu_access', function (Blueprint $table) {
                $table->integer('id_menu_access', true);
                $table->integer('usertype_id')->index('usertype_id');
                $table->integer('menu_id')->index('menu_id');
                $table->integer('submenu_id')->nullable()->index('submenu_id');
            });
        }

        if (!Schema::hasTable('phbn')) {
            Schema::create('phbn', function (Blueprint $table) {
                $table->integer('id', true);
                $table->date('date')->nullable();
                $table->string('ket')->nullable();
            });
        }

        if (!Schema::hasTable('ref_kehadiran')) {
            Schema::create('ref_kehadiran', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_kehadiran');
                $table->string('nm_kehadiran', 50);
            });
        }

        if (!Schema::hasTable('ref_kordinat')) {
            Schema::create('ref_kordinat', function (Blueprint $table) {
                $table->integer('id_kordinat', true);
                $table->integer('kd_opd')->nullable();
                $table->integer('id_lokasi')->nullable();
                $table->double('lat_opd')->nullable();
                $table->double('lon_opd')->nullable();
                $table->float('radius');
                $table->integer('stts_edit');
            });
        }

        if (!Schema::hasTable('ref_kordinat_upacara')) {
            Schema::create('ref_kordinat_upacara', function (Blueprint $table) {
                $table->integer('id_kordinat_upacara', true);
                $table->double('lat_upacara')->nullable();
                $table->double('lon_upacara')->nullable();
                $table->float('radius_upacara');
                $table->boolean('kd_stts_upacara')->default(false);
                $table->string('nm_lokasi_upacara')->nullable();
            });
        }

        if (!Schema::hasTable('rekap_phl')) {
            Schema::create('rekap_phl', function (Blueprint $table) {
                $table->integer('id');
                $table->string('tahun')->nullable();
                $table->string('bulan')->nullable();
                $table->string('nik')->nullable();
                $table->string('nama')->nullable();
                $table->string('hari_kerja')->nullable();
                $table->string('cuti_izin')->nullable();
                $table->string('sakit')->nullable();
                $table->string('dinas_luar')->nullable();
                $table->string('kehadiran')->nullable();
                $table->string('tanpa_keterangan')->nullable();
                $table->string('tl1')->nullable();
                $table->string('tl2')->nullable();
                $table->string('tl3')->nullable();
                $table->string('tl4')->nullable();
                $table->string('psw1')->nullable();
                $table->string('psw2')->nullable();
                $table->string('psw3')->nullable();
                $table->string('psw4')->nullable();
                $table->string('kd_opd')->nullable();
            });
        }

        if (!Schema::hasTable('rekap_phl_baru')) {
            Schema::create('rekap_phl_baru', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('tahun')->nullable();
                $table->string('bulan')->nullable();
                $table->string('nik')->nullable();
                $table->string('nama')->nullable();
                $table->integer('hari_kerja')->nullable();
                $table->integer('cuti')->nullable();
                $table->integer('sakit')->nullable();
                $table->integer('dinas_luar')->nullable();
                $table->integer('diklat')->nullable();
                $table->integer('kehadiran')->nullable();
                $table->integer('tanpa_keterangan')->nullable();
                $table->integer('tl1')->nullable();
                $table->integer('tl2')->nullable();
                $table->integer('tl3')->nullable();
                $table->integer('tl4')->nullable();
                $table->integer('psw1')->nullable();
                $table->integer('psw2')->nullable();
                $table->integer('psw3')->nullable();
                $table->integer('psw4')->nullable();
                $table->integer('kd_opd')->nullable();
                $table->date('created_at')->nullable();
            });
        }

        if (!Schema::hasTable('rekap_pns')) {
            Schema::create('rekap_pns', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('tahun')->nullable();
                $table->string('bulan')->nullable();
                $table->string('nip')->nullable();
                $table->string('nama')->nullable();
                $table->string('hari_kerja')->nullable();
                $table->string('cuti')->nullable();
                $table->string('sakit')->nullable();
                $table->string('dinas_luar')->nullable();
                $table->string('diklat')->nullable();
                $table->string('kehadiran')->nullable();
                $table->string('tanpa_keterangan')->nullable();
                $table->string('tl1')->nullable();
                $table->string('tl2')->nullable();
                $table->string('tl3')->nullable();
                $table->string('tl4')->nullable();
                $table->string('psw1')->nullable();
                $table->string('psw2')->nullable();
                $table->string('psw3')->nullable();
                $table->string('psw4')->nullable();
                $table->string('kd_opd')->nullable();
            });
        }

        if (!Schema::hasTable('rekap_pns_baru')) {
            Schema::create('rekap_pns_baru', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('tahun')->nullable();
                $table->string('bulan')->nullable();
                $table->string('nip')->nullable();
                $table->string('nama')->nullable();
                $table->integer('hari_kerja')->nullable();
                $table->integer('cuti')->nullable();
                $table->integer('sakit')->nullable();
                $table->integer('dinas_luar')->nullable();
                $table->integer('diklat')->nullable();
                $table->integer('kehadiran')->nullable();
                $table->integer('tanpa_keterangan')->nullable();
                $table->integer('tl1')->nullable();
                $table->integer('tl2')->nullable();
                $table->integer('tl3')->nullable();
                $table->integer('tl4')->nullable();
                $table->integer('psw1')->nullable();
                $table->integer('psw2')->nullable();
                $table->integer('psw3')->nullable();
                $table->integer('psw4')->nullable();
                $table->integer('kd_opd')->nullable();
                $table->date('created_at')->nullable();
            });
        }

        if (!Schema::hasTable('status')) {
            Schema::create('status', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kode_status');
                $table->string('nama_status', 50);
            });
        }

        if (!Schema::hasTable('submenu')) {
            Schema::create('submenu', function (Blueprint $table) {
                $table->integer('id_submenu', true);
                $table->string('submenu_name', 100);
                $table->string('submenu_function', 100);
                $table->integer('menu_id')->index('menu_id');
                $table->tinyInteger('order_no');
            });
        }

        if (!Schema::hasTable('table_basis_data')) {
            Schema::create('table_basis_data', function (Blueprint $table) {
                $table->integer('id_basis_data', true);
                $table->date('tanggal')->nullable();
                $table->string('nip')->nullable();
                $table->string('nama')->nullable();
                $table->integer('kd_opd')->nullable();
                $table->integer('kd_unit_opd')->nullable();
                $table->integer('kd_subunit_opd')->nullable();
                $table->time('pagi')->nullable();
                $table->time('siang')->nullable();
                $table->time('sore')->nullable();
                $table->date('tgl_presensi')->nullable();
                $table->integer('kd_kehadiran')->nullable();
                $table->integer('stts_basis_data')->default(0);
                $table->integer('stts_import_data')->default(0);
                $table->integer('stts_rekap')->default(0);
                $table->integer('stts_ttd_kepala')->default(0);
                $table->integer('kd_presensi')->nullable();
                $table->integer('kd_subpresensi')->nullable();
                $table->integer('bln')->nullable();
                $table->year('thn')->nullable();
                $table->integer('stts_pagi')->nullable();
                $table->integer('stts_siang')->nullable();
                $table->integer('stts_sore')->nullable();

                $table->index(['kd_opd', 'kd_unit_opd', 'kd_subunit_opd'], 'idx_basis_data_opd_unit_subunit');
            });
        }

        if (!Schema::hasTable('table_basis_data_phl')) {
            Schema::create('table_basis_data_phl', function (Blueprint $table) {
                $table->integer('id_basis_data', true);
                $table->date('tanggal')->nullable();
                $table->string('nik')->nullable();
                $table->string('nama')->nullable();
                $table->integer('kd_opd')->nullable();
                $table->integer('kd_unit_opd')->nullable();
                $table->integer('kd_subunit_opd')->nullable();
                $table->time('pagi')->nullable();
                $table->time('siang')->nullable();
                $table->time('sore')->nullable();
                $table->date('tgl_presensi')->nullable();
                $table->integer('kd_kehadiran')->nullable();
                $table->integer('stts_basis_data')->default(0);
                $table->integer('stts_import_data')->default(0);
                $table->integer('stts_rekap')->default(0);
                $table->integer('stts_ttd_kepala')->default(0);
                $table->integer('kd_presensi')->nullable();
                $table->integer('kd_subpresensi')->nullable();
                $table->integer('bln')->nullable();
                $table->year('thn')->nullable();
                $table->integer('stts_pagi')->nullable();
                $table->integer('stts_siang')->nullable();
                $table->integer('stts_sore')->nullable();
            });
        }

        if (!Schema::hasTable('tanda_tangan')) {
            Schema::create('tanda_tangan', function (Blueprint $table) {
                $table->integer('id_ttd', true)->comment(' ');
                $table->string('nip')->nullable();
                $table->string('nama')->nullable();
                $table->string('jabatan')->nullable();
                $table->integer('kd_opd')->nullable();
                $table->integer('stts_plt')->nullable();
                $table->string('tte')->nullable();
            });
        }

        if (!Schema::hasTable('tbl_opd')) {
            Schema::create('tbl_opd', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_opd')->nullable()->index('idx_kd_opd');
                $table->string('nama_opd')->nullable();

                $table->index(['kd_opd'], 'idx_opd_kd_opd');
                $table->index(['kd_opd'], 'idx_tbl_opd_kd_opd');
            });
        }

        if (!Schema::hasTable('tbl_prem')) {
            Schema::create('tbl_prem', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('nip');
                $table->string('nama');
                $table->string('uuid');
                $table->boolean('kd_pegawai');
            });
        }

        if (!Schema::hasTable('tbl_ref_ramadhan')) {
            Schema::create('tbl_ref_ramadhan', function (Blueprint $table) {
                $table->integer('id', true);
                $table->dateTime('start_date')->nullable();
                $table->dateTime('end_date')->nullable();
                $table->string('keterangan')->nullable();
            });
        }

        if (!Schema::hasTable('tbl_rkp')) {
            Schema::create('tbl_rkp', function (Blueprint $table) {
                $table->integer('id');
                $table->string('thn');
                $table->string('bln');
                $table->string('kd_opd');
                $table->string('nip');
                $table->string('nama');
                $table->string('hari_kerja');
                $table->string('cuti');
                $table->string('sakit');
                $table->string('dinas_luar');
                $table->string('kehadiran');
                $table->string('tk');
                $table->string('tl1');
                $table->string('tl2');
                $table->string('tl3');
                $table->string('tl4');
                $table->string('psw1');
                $table->string('psw2');
                $table->string('psw3');
                $table->string('psw4');
                $table->integer('stts_created');
            });
        }

        if (!Schema::hasTable('tbl_server_down')) {
            Schema::create('tbl_server_down', function (Blueprint $table) {
                $table->integer('id_down', true);
                $table->date('tgl_down_server')->nullable();
                $table->string('img_error')->nullable();
                $table->integer('stts_pagi')->nullable();
                $table->integer('stts_siang')->nullable();
                $table->integer('stts_sore')->nullable();
            });
        }

        if (!Schema::hasTable('tbl_shift_phl')) {
            Schema::create('tbl_shift_phl', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
                $table->integer('kd_shift');
                $table->integer('nik');
                $table->integer('tgl');
            });
        }

        if (!Schema::hasTable('tbl_shift_pns')) {
            Schema::create('tbl_shift_pns', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
                $table->integer('kd_shift');
                $table->integer('nip');
                $table->integer('tgl');
            });
        }

        if (!Schema::hasTable('tbl_subunit_opd')) {
            Schema::create('tbl_subunit_opd', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_opd')->nullable();
                $table->integer('kd_unit_opd')->nullable();
                $table->integer('kd_subunit_opd')->nullable();
                $table->string('nama_subunit_opd')->nullable();
            });
        }

        if (!Schema::hasTable('tbl_unit_opd')) {
            Schema::create('tbl_unit_opd', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_opd')->nullable();
                $table->integer('kd_unit_opd')->nullable();
                $table->string('nama_unit_opd')->nullable();
            });
        }

        if (!Schema::hasTable('tbl_upacara')) {
            Schema::create('tbl_upacara', function (Blueprint $table) {
                $table->integer('Id_up', true);
                $table->date('tanggal');
                $table->integer('opd_id');
                $table->double('lat');
                $table->double('long');
                $table->double('radius');
                $table->integer('kd_presensi');
                $table->integer('kd_subpresensi');
            });
        }

        if (!Schema::hasTable('tbllokasikantor')) {
            Schema::create('tbllokasikantor', function (Blueprint $table) {
                $table->string('kodeunit', 6);
                $table->string('lokasi', 50)->nullable();
            });
        }

        if (!Schema::hasTable('tblnmlokasikantor')) {
            Schema::create('tblnmlokasikantor', function (Blueprint $table) {
                $table->integer('id_lokasi', true);
                $table->integer('kd_opd')->nullable();
                $table->string('namakantor', 100)->nullable();
            });
        }

        if (!Schema::hasTable('tblstatus_jabatan')) {
            Schema::create('tblstatus_jabatan', function (Blueprint $table) {
                $table->integer('kodejab');
                $table->string('jenis', 3)->nullable();
                $table->string('jabatan')->nullable();
                $table->integer('kd_presensi')->nullable();
                $table->integer('kd_subpresensi')->nullable();
            });
        }

        if (!Schema::hasTable('tblstatus_presensi')) {
            Schema::create('tblstatus_presensi', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('kd_presensi', 6)->nullable();
                $table->string('nm_presensi', 100)->nullable();
            });
        }

        if (!Schema::hasTable('tblstatus_subpresensi')) {
            Schema::create('tblstatus_subpresensi', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('kd_presensi')->nullable();
                $table->integer('kd_subpresensi')->nullable();
                $table->string('nm_subpresensi')->nullable();
            });
        }

        if (!Schema::hasTable('tblstatus_subpresensi_shift')) {
            Schema::create('tblstatus_subpresensi_shift', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('kd_presensi');
                $table->string('kd_subpresensi')->nullable();
                $table->integer('kd_shift');
                $table->string('nama_shift')->nullable();
            });
        }

        if (!Schema::hasTable('userphl')) {
            Schema::create('userphl', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('nik');
                $table->string('nama');
                $table->string('uuid');
                $table->integer('id_lokasi');
                $table->string('kd_opd');
                $table->string('kd_unit_opd');
                $table->string('kd_subunit_opd');
                $table->boolean('logstatus')->default(false);
                $table->boolean('kd_pegawai')->default(false);
            });
        }

        if (!Schema::hasTable('userpns')) {
            Schema::create('userpns', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('nip', 18);
                $table->string('nama');
                $table->string('uuid', 25);
                $table->integer('id_lokasi');
                $table->string('kd_opd', 12);
                $table->string('kd_unit_opd', 8);
                $table->string('kd_subunit_opd');
                $table->boolean('logstatus')->default(false);
                $table->boolean('kd_pegawai')->default(true);
            });
        }

        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->integer('id_users', true);
                $table->string('name', 100);
                $table->boolean('gender');
                $table->text('address');
                $table->string('phone', 20);
                $table->string('email', 50);
                $table->string('username', 50);
                $table->string('password');
                $table->integer('usertype')->index('fk_cms_users_cms_usertype');
                $table->boolean('is_active')->default(true);
                $table->text('photo')->nullable();
                $table->text('photo_thumb')->nullable();
                $table->string('ip_add_reg', 50);
                $table->string('code_activation', 50)->nullable();
                $table->string('code_forgotten', 50)->nullable();
                $table->dateTime('last_login')->nullable();
                $table->string('created_by', 50);
                $table->dateTime('created_at')->useCurrent();
                $table->string('modified_by', 50);
                $table->dateTime('modified_at')->useCurrentOnUpdate()->nullable();
                $table->boolean('is_delete')->default(false);
                $table->string('deleted_by', 50)->nullable();
                $table->dateTime('deleted_at')->nullable();
                $table->integer('kd_opd')->nullable();
                $table->integer('Kd_unit_opd')->nullable();
                $table->integer('kd_subunit_opd')->nullable();
            });
        }

        if (!Schema::hasTable('users_data_access')) {
            Schema::create('users_data_access', function (Blueprint $table) {
                $table->integer('id_users_data_access', true);
                $table->integer('data_access_id')->index('fk_cms_user_access_cms_access');
                $table->integer('user_id')->index('fk_cms_user_access_cms_users');
            });
        }

        if (!Schema::hasTable('usertype')) {
            Schema::create('usertype', function (Blueprint $table) {
                $table->integer('id_usertype', true);
                $table->string('usertype_name', 20);
            });
        }

        DB::statement("CREATE VIEW `list_tanggal_pertahun` AS select `d`.`tanggal` AS `tanggal`,dayname(`d`.`tanggal`) AS `hari` from (select ('1970-01-01' + interval (((((`t4`.`i` * 10000) + (`t3`.`i` * 1000)) + (`t2`.`i` * 100)) + (`t1`.`i` * 10)) + `t0`.`i`) day) AS `tanggal` from (((((select 0 AS `i` union select 1 AS `1` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9`) `t0` join (select 0 AS `i` union select 1 AS `1` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9`) `t1`) join (select 0 AS `i` union select 1 AS `1` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9`) `t2`) join (select 0 AS `i` union select 1 AS `1` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9`) `t3`) join (select 0 AS `i` union select 1 AS `1` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9`) `t4`)) `d` group by `d`.`tanggal` order by `d`.`tanggal`");

        DB::statement("CREATE VIEW `query_sanding_dt_pns_dengan_absen_reguler` AS select `presensi_babar`.`dt_pns`.`id` AS `id`,`presensi_babar`.`dt_pns`.`nip` AS `nip`,`presensi_babar`.`dt_pns`.`nama` AS `nama`,`presensi_babar`.`dt_pns`.`jabatan` AS `jabatan`,`presensi_babar`.`dt_pns`.`pangkat` AS `pangkat`,`presensi_babar`.`dt_pns`.`gol` AS `gol`,`presensi_babar`.`dt_pns`.`id_lokasi` AS `id_lokasi`,`presensi_babar`.`dt_pns`.`kd_opd` AS `kd_opd`,`presensi_babar`.`dt_pns`.`kd_unit_opd` AS `kd_unit_opd`,`presensi_babar`.`dt_pns`.`kd_subunit_opd` AS `kd_subunit_opd`,`presensi_babar`.`dt_pns`.`kd_presensi` AS `kd_presensi`,`presensi_babar`.`dt_pns`.`kd_subpresensi` AS `kd_subpresensi`,`presensi_babar`.`dt_pns`.`stts_presensi` AS `stts_presensi`,`presensi_babar`.`dt_pns`.`stts_peg` AS `stts_peg`,`presensi_babar`.`absen_reguler`.`lat` AS `lat`,`presensi_babar`.`absen_reguler`.`lon` AS `lon`,`presensi_babar`.`absen_reguler`.`tanggal` AS `tanggal` from (`presensi_babar`.`dt_pns` left join `presensi_babar`.`absen_reguler` on((`presensi_babar`.`dt_pns`.`nip` = `presensi_babar`.`absen_reguler`.`nip`))) order by `presensi_babar`.`absen_reguler`.`lat`");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `query_sanding_dt_pns_dengan_absen_reguler`");

        DB::statement("DROP VIEW IF EXISTS `list_tanggal_pertahun`");

        Schema::dropIfExists('usertype');

        Schema::dropIfExists('users_data_access');

        Schema::dropIfExists('users');

        Schema::dropIfExists('userpns');

        Schema::dropIfExists('userphl');

        Schema::dropIfExists('tblstatus_subpresensi_shift');

        Schema::dropIfExists('tblstatus_subpresensi');

        Schema::dropIfExists('tblstatus_presensi');

        Schema::dropIfExists('tblstatus_jabatan');

        Schema::dropIfExists('tblnmlokasikantor');

        Schema::dropIfExists('tbllokasikantor');

        Schema::dropIfExists('tbl_upacara');

        Schema::dropIfExists('tbl_unit_opd');

        Schema::dropIfExists('tbl_subunit_opd');

        Schema::dropIfExists('tbl_shift_pns');

        Schema::dropIfExists('tbl_shift_phl');

        Schema::dropIfExists('tbl_server_down');

        Schema::dropIfExists('tbl_rkp');

        Schema::dropIfExists('tbl_ref_ramadhan');

        Schema::dropIfExists('tbl_prem');

        Schema::dropIfExists('tbl_opd');

        Schema::dropIfExists('tanda_tangan');

        Schema::dropIfExists('table_basis_data_phl');

        Schema::dropIfExists('table_basis_data');

        Schema::dropIfExists('submenu');

        Schema::dropIfExists('status');

        Schema::dropIfExists('sessions');

        Schema::dropIfExists('rekap_pns_baru');

        Schema::dropIfExists('rekap_pns');

        Schema::dropIfExists('rekap_phl_baru');

        Schema::dropIfExists('rekap_phl');

        Schema::dropIfExists('ref_kordinat_upacara');

        Schema::dropIfExists('ref_kordinat');

        Schema::dropIfExists('ref_kehadiran');

        Schema::dropIfExists('phbn');

        Schema::dropIfExists('personal_access_tokens');

        Schema::dropIfExists('password_reset_tokens');

        Schema::dropIfExists('menu_access');

        Schema::dropIfExists('menu');

        Schema::dropIfExists('logs');

        Schema::dropIfExists('login_attempts');

        Schema::dropIfExists('libur_guru');

        Schema::dropIfExists('keys');

        Schema::dropIfExists('jobs');

        Schema::dropIfExists('job_batches');

        Schema::dropIfExists('jam_shift');

        Schema::dropIfExists('jam_guru');

        Schema::dropIfExists('jam_absen_ramdhan');

        Schema::dropIfExists('jam_absen_normal');

        Schema::dropIfExists('jam_absen');

        Schema::dropIfExists('failed_jobs');

        Schema::dropIfExists('dt_pns');

        Schema::dropIfExists('dt_phl');

        Schema::dropIfExists('download');

        Schema::dropIfExists('data_access');

        Schema::dropIfExists('dat_url');

        Schema::dropIfExists('company');

        Schema::dropIfExists('clustersenin');

        Schema::dropIfExists('clusteropd');

        Schema::dropIfExists('changelog_query');

        Schema::dropIfExists('changelog_app');

        Schema::dropIfExists('cache_locks');

        Schema::dropIfExists('cache');

        Schema::dropIfExists('absen_reguler_test');

        Schema::dropIfExists('absen_reguler_recovery');

        Schema::dropIfExists('absen_reguler_phl_recovery');

        Schema::dropIfExists('absen_reguler_phl');

        Schema::dropIfExists('absen_reguler_duplicate_pns');

        Schema::dropIfExists('absen_reguler_duplicate_phl');

        Schema::dropIfExists('absen_reguler');

        Schema::dropIfExists('absen_baru');
    }
};
