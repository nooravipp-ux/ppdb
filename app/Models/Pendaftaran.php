<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = ['nik_siswa','nama_lengkap','jenis_kelamin','tempat_lahir','tanggal_lahir','no_registrasi_akta_lahir','agama','email',
                        'no_telp','anak_ke','jumlah_saudara_kandung','alamat_siswa','kecamatan','kab_kota','provinsi','kode_pos','penerima_kip','no_kip',
                        'nama_sekolah_asal','alamat_sekolah','no_induk_siswa_nasional','no_peserta_ujian_nasional','tahun_ijazah','no_seri_ijazah','no_seri_skhun',
                        'nama_ayah','nik_ayah','tempat_lahir_ayah','tanggal_lahir_ayah','pendidikan_ayah','pekerjaan_ayah','penghasilan_ayah','nama_ibu','nik_ibu',
                        'tempat_lahir_ibu','tanggal_lahir_ibu','pekerjaan_ibu','penghasilan_ibu','alamat_ortu','no_telp_ortu','nama_wali','pekerjaan_wali',
                        'penghasilan_wali','alamat_wali','hub_dengan_peserta_didik','jarak_rumah_ke_Sekolah','transportasi_ke_Sekolah','berat_badan','tinggi_badan','riwayat_penyakit'];
    protected $table = 't_pendaftaran';
    protected $primaryKey = 'id';
    
    public $timestamps = false;


}
