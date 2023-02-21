<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $surface
 * @property boolean $printed
 * @property boolean $status
 * @property boolean $aktif
 * @property string $pembuat
 */
class SurfaceBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tsurfacebarang';

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomorsurface");
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
    protected $fillable = ['kode', 'surface', 'printed', 'status', 'aktif', 'pembuat'];
}
