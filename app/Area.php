<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descricao
 * @property string $created_at
 * @property string $updated_at
 * @property Competencia[] $competencias
 */
class Area extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'areas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * @var array
     */
    protected $fillable = [
        'descricao',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function competencias()
    {
        return $this->hasMany('App\Competencia');
    }
}
