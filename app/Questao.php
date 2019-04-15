<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $descricao_problema
 * @property int $competencia_id
 * @property string $created_at
 * @property string $updated_at
 */
class Questao extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'questoes';

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
        'descricao_problema', 
        'competencia_id',
        'conteudo_id',
        'user_id',
    ];

    public $with = [
        'competencia',
        'conteudo',
        'user',
        'imagens',
        'enunciados',
        'alternativas',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function conteudo()
    {
        return $this->belongsTo(Conteudo::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function imagens()
    {
        return $this->hasMany(imagem::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function enunciados()
    {
        return $this->hasMany(Enunciado::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function alternativas()
    {
        return $this->hasMany(Alternativa::class);
    }

}
