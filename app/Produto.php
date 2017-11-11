<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Criar table
	protected $table = 'produtos';
	public $timestamps = false;

	protected $fillable = array('nome', 'valor', 'descricao', 'quantidade');

	protected $guarded = ['id'];
}
