<?php


namespace OtusTestModule;


use Lucinda\Templating\ConfigurationException;
use Lucinda\Templating\Wrapper;

/**
 * Class WraperUse
 * It only demonstrates test using of custom packages.
 * Not for productions and even not for dev or test
 *
 * @package OtusTestModule
 */
class WraperUse
{
    /**
     * @param $arg
     * @return Wrapper
     * @throws ConfigurationException
     */
    public static function LucindaWrap($arg)
    {
        try {
            return new Wrapper(simplexml_load_file($arg));
        } catch (ConfigurationException $e) {
            throw $e;
        }
    }
}