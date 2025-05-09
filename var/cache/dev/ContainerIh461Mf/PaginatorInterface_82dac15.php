<?php

namespace ContainerIh461Mf;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        if ($this->valueHolder2bbeb === $returnValue = $this->valueHolder2bbeb->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer8cc4b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2bbeb) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder2bbeb = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__get', ['name' => $name], $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        if (isset(self::$publicPropertiesaa8bb[$name])) {
            return $this->valueHolder2bbeb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
