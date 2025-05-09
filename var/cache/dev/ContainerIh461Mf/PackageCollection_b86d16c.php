<?php

namespace ContainerIh461Mf;
include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Utils/PackageCollection.php';

class PackageCollection_b86d16c extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2bbeb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8cc4b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa8bb = [
        
    ];

    public function organizeCollection()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'organizeCollection', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->organizeCollection();
    }

    public function getQualifiedPackageReference($class) : ?string
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getQualifiedPackageReference', array('class' => $class), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getQualifiedPackageReference($class);
    }

    public function getPackageQualifiedName($id) : ?string
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getPackageQualifiedName', array('id' => $id), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getPackageQualifiedName($id);
    }

    public function getPackageReferenceByQualifiedName($name) : ?string
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getPackageReferenceByQualifiedName', array('name' => $name), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getPackageReferenceByQualifiedName($name);
    }

    public function getCollection()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getCollection', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getCollection();
    }

    public function getPackageByAttributes($vendor, $package)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getPackageByAttributes', array('vendor' => $vendor, 'package' => $package), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getPackageByAttributes($vendor, $package);
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

        $instance->initializer8cc4b = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource)
    {
        static $reflection;

        if (! $this->valueHolder2bbeb) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');
            $this->valueHolder2bbeb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);

        }

        $this->valueHolder2bbeb->__construct($container, $mappingResource);
    }

    public function & __get($name)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__get', ['name' => $name], $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        if (isset(self::$publicPropertiesaa8bb[$name])) {
            return $this->valueHolder2bbeb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bbeb;

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

        $targetObject = $this->valueHolder2bbeb;
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
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bbeb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2bbeb;
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
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__isset', array('name' => $name), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bbeb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2bbeb;
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
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__unset', array('name' => $name), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bbeb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2bbeb;
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
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__clone', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        $this->valueHolder2bbeb = clone $this->valueHolder2bbeb;
    }

    public function __sleep()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__sleep', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return array('valueHolder2bbeb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer8cc4b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8cc4b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'initializeProxy', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2bbeb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2bbeb;
    }
}

if (!\class_exists('PackageCollection_b86d16c', false)) {
    \class_alias(__NAMESPACE__.'\\PackageCollection_b86d16c', 'PackageCollection_b86d16c', false);
}
