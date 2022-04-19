<?php

class ValidationEmail extends Exception{}

class Valid
{
    public static function validEmail($email)
    {
        $regexp = "/[0-9a-z]+@[a-z]/";

        if ($email === '') {
            throw new ValidationEmail('E-mail не указан');
        }elseif (!preg_match($regexp, $email)) {
            throw new ValidationEmail('E-mail указан неправильно');
        }elseif (mb_strlen($email) > 255) {
            throw new ValidationEmail('Слишком длинный e-mail');
        } else{
            return true;
        }
    }
}

try {
    Valid::validEmail('111@');
} catch (ValidationEmail $e) {
    echo $e->getMessage();
}
