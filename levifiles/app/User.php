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
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

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
            'UserCode'      => 'required',
            'Password'      => 'required|min:6',
            'RePassword'    => 'required|same:Password',
			'Email'      	=> 'required|email'
        );

		$messages = array(
			'UserCode.required'		=> 'BoardingPassKu ID harus diisi',
            'Password.required'		=> 'Sandi harus diisi',
            'Password.min'			=> 'Sandi minimal harus :min karakter',
            'RePassword.required'	=> 'Konfirmasi sandi harus diisi',
            'RePassword.same'		=> 'Konfirmasi sandi harus bernilai sama dengan sandi',
			'Email.required'		=> 'Email harus diisi'
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
