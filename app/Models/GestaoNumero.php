<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 25 Feb 2018 00:11:13 +0000.
 */

namespace ComercEnergia\Models;
use ComercEnergia\Util\Util;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GestaoNumero
 * 
 * @property int $id
 * @property int $option_gestao_id
 * @property float $valor
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \ComercEnergia\Models\OptionGestaoNumero $option_gestao_numero
 *
 * @package ComercEnergia\Models
 */
class GestaoNumero extends Eloquent
{
	protected $table = 'gestao_numero';

	protected $casts = [
		'option_gestao_id' => 'int',
		'valor' => 'float'
	];

	protected $fillable = [
		'option_gestao_id',
		'valor'
	];

	public function option_gestao_numero()
	{
		return $this->belongsTo(\ComercEnergia\Models\OptionGestaoNumero::class, 'option_gestao_id');
	}
    public static function getMetrica()
    {

        $im_disponivel = self::where('option_gestao_id', 3)->orderBy('created_at', 'desc')->first();
        $im_vendido = self::where('option_gestao_id', 2)->orderBy('created_at', 'desc')->first();
        $im_alugado = self::where('option_gestao_id', 1)->orderBy('created_at', 'desc')->first();

        return [
            'disponivel' => (isset($im_disponivel->valor)) ? Util::formatViewValor($im_disponivel->valor) : 0,
            'vendido' => (isset($im_vendido->valor)) ? Util::formatViewValor($im_vendido->valor) : 0,
            'alugado' => (isset($im_alugado->valor)) ? Util::formatViewValor($im_alugado->valor) : 0
        ];
    }

}
