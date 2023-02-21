<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $tipe
 * @property boolean $printed
 * @property boolean $status
 * @property boolean $aktif
 * @property string $pembuat
 * @property boolean $stok
 */
class TipeBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ttipebarang';

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomortipe");
    }

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
    protected $fillable = ['kode', 'tipe', 'printed', 'status', 'aktif', 'pembuat', 'stok'];
}
