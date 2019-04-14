<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $descricao_enunciado
 * @property int $questao_id
 * @property string $created_at
 * @property string $updated_at
 */
class Enunciado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'enunciados';

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
        'descricao_enunciado', 
        'questao_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function questao()
    {
        return $this->belongsTo(Questao::class);
    }
}
