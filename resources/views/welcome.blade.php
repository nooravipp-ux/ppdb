@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="container-fluid">
        <form id="form" method="post" action="{{route('saveRegister')}}">
            @csrf
            <div class="alert alert-primary">
                <strong>Biodata Siswa</strong>
            </div>
            <div class="row">
                <div class="col-sm-3">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Induk Keluarga (NIK):</label>
                        <input type="text" name="nik_siswa" class="form-control" placeholder="Masukan Nomor NIK">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No. Registrasi Akta Lahir:</label>
                        <input type="number" name="no_registrasi_akta_lahir" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Anak Ke:</label>
                        <input type="number" name="anak_ke" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jumlah Saudara Kandung:</label>
                        <input type="number" name="jumlah_saudara_kandung" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" ></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi">

                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>

            </div>
            <script>
                $("#provinsi").change(function() {
                    // variabel dari nilai combo provinsi
                    var id_provinsi = $("#provinsi").val();

                    // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                    $.ajax({
                        type: "POST",
                        dataType: "html",
                        url: "ambil-data.php",
                        data: "provinsi=" + id_provinsi,
                        success: function(data) {
                            $("#kabupaten").html(data);
                        }
                    });
                });

                $("#kabupaten").change(function() {
                    // variabel dari nilai combo box kabupaten
                    var id_kabupaten = $("#kabupaten").val();

                    // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                    $.ajax({
                        type: "POST",
                        dataType: "html",
                        url: "ambil-data.php",
                        data: "kabupaten=" + id_kabupaten,
                        success: function(data) {
                            $("#kecamatan").html(data);
                        }
                    });
                });
            </script>
            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Sekolah / Madrasah:</label>
                        <input type="text" name="nama_sekolah_asal" class="form-control" placeholder="Masukan Nama Sekolah">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat_sekolah" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Induk Siswa Nasional (NISN)</label>
                        <input type="number" name="no_induk_siswa_nasional" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Peserta Ujian Nasional (SMP/MTs)</label>
                        <input type="number" name="no_peserta_ujian_nasional" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tahun Ijazah</label>
                        <input type="number" name="tahun_ijazah" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No. Seri Ijazah</label>
                        <input type="number" name="no_seri_ijazah" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No. Seri SKHUN</label>
                        <input type="number" name="no_seri_skhun" class="form-control">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Biodata Orang Tua / Wali</strong>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Ayah Kandung</label>
                        <input type="number" name="nama_ayah" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Induk Keluarga (NIK)</label>
                        <input type="number" name="nik_ayah" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir_ayah" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir_ayah" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_ayah" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="penghasilan_ayah" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Ibu Kandung</label>
                        <input type="number" name="nama_ibu" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Induk Keluarga (NIK)</label>
                        <input type="number" name="nik_ibu" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir_ibu" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir_ibu" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_ibu" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="penghasilan_ibu" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alamat Orang Tua</label>
                        <textarea class="form-control" name="alamat_ortu" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos_ortu" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi_ortu">

                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten_ortu">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan_ortu">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp_ortu" class="form-control" placeholder="Masukan No Telp">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input type="text" name="nama_wali" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_wali" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Penghasilan Perbulan</label>
                        <input type="text" name="penghasilan_wali" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alamat </label>
                        <textarea class="form-control" name="alamat_wali" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos_wali" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi_wali">

                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten_wali">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan_wali">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Hubungan Dengan Peserta Didik</label>
                        <input type="text" name="hub_dengan_peserta_didik" class="form-control">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Lain - Lain</strong>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jarak Rumah Kesekolah</label>
                        <select class="form-control" name="jarak_rumah_ke_sekolah">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Transportasi</label>
                        <select class="form-control" name="transportasi_ke_sekolah">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="text" name="berat_badan" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="text" name="tinggi_badan" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Riwayat Penyakit</label>
                        <input type="text" name="riwayat_penyakit" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection