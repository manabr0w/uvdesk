<?php

namespace ContainerVDbHL46;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        if ($this->valueHolder2308b === $returnValue = $this->valueHolder2308b->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer8cb99 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2308b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder2308b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__get', ['name' => $name], $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        if (isset(self::$publicProperties70ed4[$name])) {
            return $this->valueHolder2308b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
