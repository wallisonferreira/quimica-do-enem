<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descricao
 * @property string $created_at
 * @property string $updated_at
 * @property Questao[] $questoes
 */
class Conteudo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'conteudos';

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
    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }
}
