<?php

namespace ContainerIh461Mf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getConnection', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getMetadataFactory', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getExpressionBuilder', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'beginTransaction', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getCache', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'transactional', array('func' => $func), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'commit', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->commit();
    }

    public function rollback()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'rollback', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getClassMetadata', array('className' => $className), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'createQuery', array('dql' => $dql), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'createNamedQuery', array('name' => $name), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'createQueryBuilder', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'flush', array('entity' => $entity), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'clear', array('entityName' => $entityName), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->clear($entityName);
    }

    public function close()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'close', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->close();
    }

    public function persist($entity)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'persist', array('entity' => $entity), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'remove', array('entity' => $entity), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'detach', array('entity' => $entity), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'merge', array('entity' => $entity), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'contains', array('entity' => $entity), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getEventManager', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getConfiguration', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'isOpen', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getUnitOfWork', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getProxyFactory', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'initializeObject', array('obj' => $obj), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'getFilters', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'isFiltersStateClean', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, 'hasFilters', array(), $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        return $this->valueHolder2bbeb->hasFilters();
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

        $instance->initializer8cc4b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder2bbeb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2bbeb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2bbeb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8cc4b && ($this->initializer8cc4b->__invoke($valueHolder2bbeb, $this, '__get', ['name' => $name], $this->initializer8cc4b) || 1) && $this->valueHolder2bbeb = $valueHolder2bbeb;

        if (isset(self::$publicPropertiesaa8bb[$name])) {
            return $this->valueHolder2bbeb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
