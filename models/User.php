<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{	
	const ESTUDIANTE = 0;
    const DOCENTE = 1;
	const ADMINISTRATIVO = 2;
	const JEFEDECARRERA = 3;
	const SUPERPRACTICA = 4;
	
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
	public $role;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
			'role'=>User::ESTUDIANTE,
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
			'role'=>User::ESTUDIANTE,
        ],
		
		'102' => [
            'id' => '102',
            'username' => '179764598',
            'password' => 'estudiante',
            'authKey' => 'test102key',
            'accessToken' => '102-token',
			'role'=>User::ESTUDIANTE,
        ],
		
		'103' => [
            'id' => '103',
            'username' => '177559202',
            'password' => 'docente',
            'authKey' => 'test103key',
            'accessToken' => '103-token',
			'role'=>User::DOCENTE,
        ],
		
		'104' => [
            'id' => '104',
            'username' => '182677779',
            'password' => 'administrativo',
            'authKey' => 'test104key',
            'accessToken' => '104-token',
			'role'=>User::ADMINISTRATIVO,
        ],
    ];


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
