<?php if ( ! defined('BASEPATH')) die ('No direct script access allowed');

class SwiftMailer
{
    // base
    var $CI = FALSE;
    var $spark_path = FALSE;

    // state
    var $initialized = FALSE;

    // constructor
    public function __construct()
    {
        // initialize base member variables
        $this->CI =& get_instance();
        $this->spark_path = dirname(__FILE__) . '/';

        // initialize SwiftMailer class
        $this->initialize();
    }

    public function initialize()
    {
        // find SwiftMailer include class
        $swift_required_path = $this->spark_path . '../vendor/swift-mailer/swift_required.php';
        if(!file_exists($swift_required_path))
        {
            $this->CI->log->write_log('error', 'The swift-mailer spark could not find the swift-mailer vendor class.');
            return false;
        }

        // include SwiftMailer
        require_once $swift_required_path;

        // initialization complete
        $this->CI->log->write_log('info', 'The swift-mailer spark has been initialized.');
        $this->initialized = TRUE;
    }
}