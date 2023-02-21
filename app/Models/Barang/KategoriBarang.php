<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $kategori
 * @property boolean $printed
 * @property boolean $status
 * @property boolean $aktif
 * @property string $pembuat
 */
class KategoriBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tkategoribarang';

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

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomorkategori");
    }

    /**
     * @var array
     */
    protected $fillable = ['kode', 'kategori', 'printed', 'status', 'aktif', 'pembuat'];
}
