<?php

namespace App\Helpers;


class PasswordGeneratorHelper
{
    public static function generateRandomPassword($passwordLength = 10)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%&*';

        // Shuffle the characters randomly
        $shuffledChars = str_shuffle($characters);

        // Generate the random password by taking the first $passwordLength characters
        $password = substr($shuffledChars, 0, $passwordLength);

        return $password;
    }
}
