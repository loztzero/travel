<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Validator;
use App\Libraries\Helpers;
use Uuid;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mst001';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public static function boot()
    {
        parent::boot();

        // static::creating(function($post)
        // {
        //     $post->id = Helpers::mysqlID();;
        // });

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });

    }

	public static function rules($data)
	{
		$error = array();
		$rules = array(
			'email'      	=> 'required|email',
            'password'      => 'required|min:6',
            'repassword'    => 'required|same:password'
        );

		$messages = array(
            'password.required'		=> 'Sandi harus diisi',
            'password.min'			=> 'Sandi minimal harus :min karakter',
            'repassword.required'	=> 'Konfirmasi sandi harus diisi',
            'repassword.same'		=> 'Konfirmasi sandi harus bernilai sama dengan sandi',
			'email.required'		=> 'Email harus diisi'
		);
		
        $v = Validator::make($data, $rules, $messages);
        if($v->fails()){
    		$error = $v->errors()->all();
        }

		return $error;
	}

	public function generateNewId()
    {
        return Uuid::generate(4);
    }

}
