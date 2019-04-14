<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $descricao
 * @property string $created_at
 * @property string $updated_at
 * @property Questao[] $questoes
 */
class Competencia extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'competencias';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'descricao',
        'ordem', //H1, H2, H3...
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }

}
