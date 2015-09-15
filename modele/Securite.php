<?php
/*
 * Definission d'une classe contenant des methodes de securité contre les injections SQL etc.
 */
class Securite
{
    // Données entrantes
    public static function strEscape($link, $string)
    {
        // On regarde si le type de string est un nombre entier (int)
        if(ctype_digit($string)) {
                $string = intval($string);
        }
        // Pour tous les autres types
        else {
                $string = mysqli_real_escape_string($link, $string);
                $string = addcslashes($string, '%_');
        }
        
        return $string;
    }
    // Données sortantes
    public static function toHtml($string)
    {
            return htmlentities($string);
    }
}