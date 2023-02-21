<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $tebal
 * @property float $berat
 * @property boolean $status
 * @property boolean $printed
 * @property string $pembuat
 * @property string $keterangan
 * @property boolean $aktif
 */
class TebalBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ttebalbarang';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'nomor';

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomortebal");
    }

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['kode', 'tebal', 'berat', 'status', 'printed', 'pembuat', 'keterangan', 'aktif'];
}
