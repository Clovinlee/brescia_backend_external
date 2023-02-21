<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $nama
 * @property string $namajual
 * @property boolean $custom
 * @property boolean $barangtambang
 * @property boolean $barangimport
 * @property int $nomorkategori
 * @property string $kodekategori
 * @property int $nomortipe
 * @property string $kodetipe
 * @property int $nomorbentuk
 * @property string $kodebentuk
 * @property int $nomorukuran
 * @property string $kodeukuran
 * @property int $nomortebal
 * @property string $kodetebal
 * @property int $nomorgrade
 * @property string $kodegrade
 * @property int $nomormotif
 * @property string $kodemotif
 * @property int $nomorsurface
 * @property string $kodesurface
 * @property int $nomorjenis
 * @property string $kodejenis
 * @property int $nomorsatuan
 * @property string $kodesatuan
 * @property boolean $status
 * @property boolean $printed
 * @property string $pembuat
 * @property string $keterangan
 * @property boolean $aktif
 * @property int $minimumstok
 * @property float $hargadasaridr
 * @property float $hargajualidr
 * @property float $hpp
 * @property float $panjang
 * @property float $lebar
 * @property float $tebal
 * @property string $namamanual
 * @property int $nomorlama
 * @property string $kodelama
 * @property string $proses
 */
class Barang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbarang';

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

    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, "nomorkategori");
    }

    public function tipe()
    {
        return $this->belongsTo(TipeBarang::class, "nomortipe");
    }

    public function bentuk()
    {
        return $this->belongsTo(BentukBarang::class, "nomorbentuk");
    }

    public function tebal()
    {
        return $this->belongsTo(TebalBarang::class, "nomortebal");
    }

    public function ukuran()
    {
        return $this->belongsTo(UkuranBarang::class, "nomorukuran");
    }

    public function grade()
    {
        return $this->belongsTo(GradeBarang::class, "nomorgrade");
    }

    public function motif()
    {
        return $this->belongsTo(MotifBarang::class, "nomormotif");
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBarang::class, "nomorjenis");
    }

    public function surface()
    {
        return $this->belongsTo(SurfaceBarang::class, "nomorsurface");
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, "nomorsatuan");
    }

    /**
     * @var array
     */
    protected $fillable = ['kode', 'nama', 'namajual', 'custom', 'barangtambang', 'barangimport', 'nomorkategori', 'kodekategori', 'nomortipe', 'kodetipe', 'nomorbentuk', 'kodebentuk', 'nomorukuran', 'kodeukuran', 'nomortebal', 'kodetebal', 'nomorgrade', 'kodegrade', 'nomormotif', 'kodemotif', 'nomorsurface', 'kodesurface', 'nomorjenis', 'kodejenis', 'nomorsatuan', 'kodesatuan', 'status', 'printed', 'pembuat', 'keterangan', 'aktif', 'minimumstok', 'hargadasaridr', 'hargajualidr', 'hpp', 'panjang', 'lebar', 'tebal', 'namamanual', 'nomorlama', 'kodelama', 'proses'];
}
