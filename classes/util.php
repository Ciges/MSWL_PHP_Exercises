<?php

//    This program is free software; you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation; version 2 of the License.
 
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.


/**
 * This class contains utilities for development. It's used as static class.
 *
 * @author      Xavier Castañ'o <xcastanho@igalia.com>
 * @package MasterPractices
 * @link link to the source code
 */
class Util {


    /**
     * Loads all files we instantiate in app
     *
     * @param       string          $classname
     * @return      void
     * @access public
     */
    public static function __autoload($classname)
    {
        $classfile = strtolower($classname);
        if  (file_exists("./$classfile.php")) {
            require_once("./$classfile.php");
        }
        else if  (file_exists("./classes/$classfile.php")) {
            require_once("./classes/$classfile.php");
        }
        else if (file_exists("./user/$classfile.php")) {
            require_once("./user/$classfile.php");
        }
        else if (file_exists("./Smarty/libs/sysplugins/$classfile.php")) {
        	require_once("./Smarty/libs/sysplugins/$classfile.php");
        }
        else {
            throw new Exception("Unable to find required file to load $classname");
        }
    }

}

?>