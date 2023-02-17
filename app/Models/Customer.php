<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $userid
 * @property string $password
 * @property string $email
 * @property string $nama
 * @property string $alamat
 * @property int $nomorkota
 * @property string $kodekota
 * @property string $telepon
 * @property string $fax
 * @property string $namapengiriman
 * @property string $alamatpengiriman
 * @property int $nomorkotapengiriman
 * @property string $kodekotapengiriman
 * @property string $teleponpengiriman
 * @property string $namapkp
 * @property string $alamatpkp
 * @property int $nomorkotapkp
 * @property string $kodekotapkp
 * @property string $npwp
 * @property string $nppkp
 * @property string $hp
 * @property boolean $status
 * @property boolean $printed
 * @property string $pembuat
 * @property string $token
 * @property string $hash
 * @property boolean $aktif
 * @property string $keterangan
 * @property string $kontak
 * @property int $nomorkategori
 * @property string $kodekategori
 * @property int $nomorcabang
 * @property string $cabang
 * @property string $kotalama
 * @property string $kotapkplama
 * @property string $kotakirimlama
 * @property int $jatuhtempo
 * @property boolean $isproyek
 * @property float $plafonrp
 * @property boolean $afiliasi
 * @property int $nomorsales
 * @property string $kodesales
 * @property string $penerima
 * @property string $prefix
 * @property boolean $isafiliasi
 * @property int $nomoraccount
 * @property string $kodeaccount
 */
class Customer extends Model
{
    /**
     * The table associated with the model.
     * php artisan krlove:generate:model User --table-name=user
     * @var string
     */
    protected $table = 'tcustomer';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'nomor';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['kode', 'userid', 'password', 'email', 'nama', 'alamat', 'nomorkota', 'kodekota', 'telepon', 'fax', 'namapengiriman', 'alamatpengiriman', 'nomorkotapengiriman', 'kodekotapengiriman', 'teleponpengiriman', 'namapkp', 'alamatpkp', 'nomorkotapkp', 'kodekotapkp', 'npwp', 'nppkp', 'hp', 'status', 'printed', 'pembuat', 'token', 'hash', 'aktif', 'keterangan', 'kontak', 'nomorkategori', 'kodekategori', 'nomorcabang', 'cabang', 'kotalama', 'kotapkplama', 'kotakirimlama', 'jatuhtempo', 'isproyek', 'plafonrp', 'afiliasi', 'nomorsales', 'kodesales', 'penerima', 'prefix', 'isafiliasi', 'nomoraccount', 'kodeaccount'];
}
