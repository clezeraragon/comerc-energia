<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 24 Feb 2018 22:31:34 +0000.
 */

namespace ComercEnergia\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OptionGestaoNumero
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $gestao_numeros
 *
 * @package ComercEnergia\Models
 */
class OptionGestaoNumero extends Eloquent
{
	protected $table = 'option_gestao_numero';

	protected $fillable = [
		'name'
	];

	public function gestao_numeros()
	{
		return $this->hasMany(\ComercEnergia\Models\GestaoNumero::class, 'option_gestao_id');
	}

	public static function getComboxGetao()
    {
        return self::pluck('name','id');
    }
}
