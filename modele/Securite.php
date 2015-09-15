<?php
/*
 * Definission d'une classe contenant des methodes de securité contre les injections SQL etc.
 */
class Securite
{
    // Données entrantes
    public static function beforeInsert($string)
    {
        // On regarde si le type de string est un nombre entier (int)
        if(ctype_digit($string)) {
                $string = intval($string);
        }
        // Pour tous les autres types
        else {
                $string = mysql_real_escape_string($string);
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