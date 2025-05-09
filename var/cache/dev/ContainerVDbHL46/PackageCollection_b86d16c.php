<?php

namespace ContainerVDbHL46;
include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Utils/PackageCollection.php';

class PackageCollection_b86d16c extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection|null wrapped object, if the proxy is initialized
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

    public function getQualifiedPackageReference($class) : ?string
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getQualifiedPackageReference', array('class' => $class), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getQualifiedPackageReference($class);
    }

    public function getPackageQualifiedName($id) : ?string
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getPackageQualifiedName', array('id' => $id), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getPackageQualifiedName($id);
    }

    public function getPackageReferenceByQualifiedName($name) : ?string
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getPackageReferenceByQualifiedName', array('name' => $name), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getPackageReferenceByQualifiedName($name);
    }

    public function getCollection()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getCollection', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getCollection();
    }

    public function getPackageByAttributes($vendor, $package)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getPackageByAttributes', array('vendor' => $vendor, 'package' => $package), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getPackageByAttributes($vendor, $package);
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

        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $instance, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($instance);

        $instance->initializer8cb99 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource)
    {
        static $reflection;

        if (! $this->valueHolder2308b) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');
            $this->valueHolder2308b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);

        }

        $this->valueHolder2308b->__construct($container, $mappingResource);
    }

    public function & __get($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__get', ['name' => $name], $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        if (isset(self::$publicProperties70ed4[$name])) {
            return $this->valueHolder2308b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

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

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

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

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

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

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

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
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);
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

if (!\class_exists('PackageCollection_b86d16c', false)) {
    \class_alias(__NAMESPACE__.'\\PackageCollection_b86d16c', 'PackageCollection_b86d16c', false);
}
