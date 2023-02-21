<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $satuan
 * @property int $konversi
 * @property boolean $printed
 * @property string $pembuat
 * @property boolean $status
 * @property boolean $aktif
 */
class Satuan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tsatuan';

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomorsatuan");
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
    protected $fillable = ['kode', 'satuan', 'konversi', 'printed', 'pembuat', 'status', 'aktif'];
}
