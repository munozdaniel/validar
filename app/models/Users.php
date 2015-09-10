<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $active;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            ),
            new \Phalcon\Mvc\Model\Validator\PresenceOf(
                array(
                    'field'    => 'name',

                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }
    /*
       * @desc - personalizamos los mensajes para cada caso
       */
    public function getMessages($filter = NULL)
    {
        $messages = array();
        foreach (parent::getMessages() as $message)
        {
            switch ($message->getType())
            {

                case 'PresenceOf':
                    $messages[] = 'El campo ' . $message->getField() . ' es obligatorio.';
                    break;
                case 'Email':
                    $messages[] = 'El campo ' . $message->getField() . ' no tiene un formato válido.';
                    break;
                case 'Unique':
                    $messages[] = 'El campo ' . $message->getField() . ' ya está en uso.';
                    break;
                case 'TooShort':
                    $messages[] = 'El campo ' . $message->getField() . ' es demasiado corto(min 2 chars).';
                    break;
                case 'TooLong':
                    $messages[] = 'El campo ' . $message->getField() . ' es demasiado largo(max 30 chars).';
                    break;
            }
        }
        return $messages;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
