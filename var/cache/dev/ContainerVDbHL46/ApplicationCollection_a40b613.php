<?php

namespace ContainerVDbHL46;
include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Utils/ApplicationCollection.php';

class ApplicationCollection_a40b613 extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2308b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8cb99 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties70ed4 = [
        
    ];

    public function organizeCollection()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'organizeCollection', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->organizeCollection();
    }

    public function getCollection()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getCollection', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getCollection();
    }

    public function findApplicationsByVendor($vendor)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'findApplicationsByVendor', array('vendor' => $vendor), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->findApplicationsByVendor($vendor);
    }

    public function findApplicationsByPackage(\Webkul\UVDesk\ExtensionFrameworkBundle\Definition\Package\PackageInterface $package)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'findApplicationsByPackage', array('package' => $package), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->findApplicationsByPackage($package);
    }

    public function findApplicationByFullyQualifiedName($vendorName, $packageName, $applicationQualifiedName) : ?\Webkul\UVDesk\ExtensionFrameworkBundle\Definition\Application\ApplicationInterface
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'findApplicationByFullyQualifiedName', array('vendorName' => $vendorName, 'packageName' => $packageName, 'applicationQualifiedName' => $applicationQualifiedName), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->findApplicationByFullyQualifiedName($vendorName, $packageName, $applicationQualifiedName);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection $instance) {
            unset($instance->applications, $instance->fullyQualifiedApplicationNames, $instance->applicationsByFullyQualifiedName, $instance->applicationsByQualifiedPackageName, $instance->isOrganized);
        }, $instance, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection')->__invoke($instance);

        $instance->initializer8cb99 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource, \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $packageCollection)
    {
        static $reflection;

        if (! $this->valueHolder2308b) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');
            $this->valueHolder2308b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection $instance) {
            unset($instance->applications, $instance->fullyQualifiedApplicationNames, $instance->applicationsByFullyQualifiedName, $instance->applicationsByQualifiedPackageName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection')->__invoke($this);

        }

        $this->valueHolder2308b->__construct($container, $mappingResource, $packageCollection);
    }

    public function & __get($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__get', ['name' => $name], $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        if (isset(self::$publicProperties70ed4[$name])) {
            return $this->valueHolder2308b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2308b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2308b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2308b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2308b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__isset', array('name' => $name), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2308b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2308b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__unset', array('name' => $name), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2308b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2308b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__clone', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        $this->valueHolder2308b = clone $this->valueHolder2308b;
    }

    public function __sleep()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__sleep', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return array('valueHolder2308b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\ApplicationCollection $instance) {
            unset($instance->applications, $instance->fullyQualifiedApplicationNames, $instance->applicationsByFullyQualifiedName, $instance->applicationsByQualifiedPackageName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer8cb99 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8cb99;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'initializeProxy', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2308b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2308b;
    }
}

if (!\class_exists('ApplicationCollection_a40b613', false)) {
    \class_alias(__NAMESPACE__.'\\ApplicationCollection_a40b613', 'ApplicationCollection_a40b613', false);
}
