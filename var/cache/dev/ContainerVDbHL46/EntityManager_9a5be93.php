<?php

namespace ContainerVDbHL46;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getConnection', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getMetadataFactory', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getExpressionBuilder', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'beginTransaction', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getCache', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'transactional', array('func' => $func), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'commit', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->commit();
    }

    public function rollback()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'rollback', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getClassMetadata', array('className' => $className), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'createQuery', array('dql' => $dql), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'createNamedQuery', array('name' => $name), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'createQueryBuilder', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'flush', array('entity' => $entity), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'clear', array('entityName' => $entityName), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->clear($entityName);
    }

    public function close()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'close', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->close();
    }

    public function persist($entity)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'persist', array('entity' => $entity), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'remove', array('entity' => $entity), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'detach', array('entity' => $entity), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'merge', array('entity' => $entity), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'contains', array('entity' => $entity), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getEventManager', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getConfiguration', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'isOpen', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getUnitOfWork', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getProxyFactory', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'initializeObject', array('obj' => $obj), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'getFilters', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'isFiltersStateClean', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, 'hasFilters', array(), $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        return $this->valueHolder2308b->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8cb99 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder2308b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2308b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2308b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8cb99 && ($this->initializer8cb99->__invoke($valueHolder2308b, $this, '__get', ['name' => $name], $this->initializer8cb99) || 1) && $this->valueHolder2308b = $valueHolder2308b;

        if (isset(self::$publicProperties70ed4[$name])) {
            return $this->valueHolder2308b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
