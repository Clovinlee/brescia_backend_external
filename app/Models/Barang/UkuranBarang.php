<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $ukuran
 * @property boolean $printed
 * @property boolean $status
 * @property boolean $aktif
 * @property string $pembuat
 */
class UkuranBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tukuranbarang';

    protected $primaryKey = 'nomor';

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomorukuran");
    }
    // namespace App\Models\Barang
    /**
     * @var array
     */
    protected $fillable = ['nomor', 'kode', 'ukuran', 'printed', 'status', 'aktif', 'pembuat'];
}
