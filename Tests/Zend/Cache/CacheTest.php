<?php
namespace Tests\Zend\Cache;

class CacheTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Cache',
        '\Zend_Cache_Backend',
        '\Zend_Cache_Core',
        '\Zend_Cache_Exception',
        '\Zend_Cache_Manager',
        '\Zend_Cache_Backend_ZendServer_Disk',
        '\Zend_Cache_Backend_ZendServer_ShMem',
        '\Zend_Cache_Backend_Apc',
        '\Zend_Cache_Backend_BlackHole',
        '\Zend_Cache_Backend_ExtendedInterface',
        '\Zend_Cache_Backend_File',
        '\Zend_Cache_Backend_Interface',
        '\Zend_Cache_Backend_Libmemcached',
        '\Zend_Cache_Backend_Memcached',
        '\Zend_Cache_Backend_Sqlite',
        '\Zend_Cache_Backend_Static',
        '\Zend_Cache_Backend_Test',
        '\Zend_Cache_Backend_TwoLevels',
        '\Zend_Cache_Backend_WinCache',
        '\Zend_Cache_Backend_Xcache',
        '\Zend_Cache_Backend_ZendPlatform',
        '\Zend_Cache_Backend_ZendServer',
        '\Zend_Cache_Frontend_Capture',
        '\Zend_Cache_Frontend_Class',
        '\Zend_Cache_Frontend_File',
        '\Zend_Cache_Frontend_Function',
        '\Zend_Cache_Frontend_Output',
        '\Zend_Cache_Frontend_Page'
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}