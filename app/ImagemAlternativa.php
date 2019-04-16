<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $questao_id
 * @property string $path
 * @property string $created_at
 * @property string $updated_at
 * @property Questo $questo
 */
class ImagemAlternativa extends Model
{
    protected $table = 'imagem_alternativas';
    /**
     * @var array
     */
    protected $fillable = ['questao_id', 'path', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questao()
    {
        return $this->belongsTo('App\Questao', 'questao_id');
    }
}
