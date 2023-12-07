<?php
/**
 * Member class
 *
 * @author      Stanley Sie <swookon@gmail.com>
 * @access      public
 * @version     Release: 1.0
 */

namespace Stanleysie\MmMember;

use \Exception as Exception;

class Member
{
    /**
     * database
     *
     * @var object
     */
    private $database;

    /**
     * initialize
     */
    public function __construct($db = null)
    {
        $this->database = $db;
    }

    /**
     * register
     * 
     * @param 
     * @return bool
     */
    public function register()
    {
        try {
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return true;
    }

    /**
     * login
     * 
     * @param 
     * @return bool
     */
    public function login()
    {
        try {
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return true;
    }

}