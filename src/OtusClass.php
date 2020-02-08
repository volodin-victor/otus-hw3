<?php


namespace OtusTestModule;

/**
 * Class OtusClass
 * @package OtusTestModule
 */
class OtusClass
{
    /**
     * @return string
     */
    public function getMessage() : string
    {
        return 'It is a test message from test module. Home work # 3';
    }

    /**
     * Returns test phpinfo() output. Just for test purpose
     * @param null $arg
     * @return mixed
     */
    public function getPhpInfo($arg = null)
    {
        return phpinfo($arg);
    }

}