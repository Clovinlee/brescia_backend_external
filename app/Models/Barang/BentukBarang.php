<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nomor
 * @property string $kode
 * @property string $bentuk
 * @property boolean $printed
 * @property boolean $status
 * @property boolean $aktif
 * @property string $pembuat
 * @property boolean $random
 * @property boolean $packing
 * @property boolean $tambang
 */
class BentukBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbentukbarang';

    protected $primaryKey = 'nomor';

    public function barang()
    {
        return $this->hasMany(Barang::class, "nomorbentuk");
    }

    /**
     * @var array
     */
    protected $fillable = ['nomor', 'kode', 'bentuk', 'printed', 'status', 'aktif', 'pembuat', 'random', 'packing', 'tambang'];
}
