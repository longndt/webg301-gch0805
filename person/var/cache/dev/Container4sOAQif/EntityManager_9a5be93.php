<?php

namespace Container4sOAQif;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder759b4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3a14 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f129 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getConnection', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getMetadataFactory', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getExpressionBuilder', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'beginTransaction', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getCache', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'transactional', array('func' => $func), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'commit', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->commit();
    }

    public function rollback()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'rollback', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'createQuery', array('dql' => $dql), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'createQueryBuilder', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'flush', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'clear', array('entityName' => $entityName), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'close', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->close();
    }

    public function persist($entity)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'persist', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'remove', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'refresh', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'detach', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'merge', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'contains', array('entity' => $entity), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getEventManager', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getConfiguration', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'isOpen', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getUnitOfWork', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getProxyFactory', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'getFilters', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'isFiltersStateClean', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'hasFilters', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return $this->valueHolder759b4->hasFilters();
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

        $instance->initializerc3a14 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder759b4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder759b4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder759b4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, '__get', ['name' => $name], $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        if (isset(self::$publicProperties2f129[$name])) {
            return $this->valueHolder759b4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder759b4;

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

        $targetObject = $this->valueHolder759b4;
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
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder759b4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder759b4;
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
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, '__isset', array('name' => $name), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder759b4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder759b4;
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
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, '__unset', array('name' => $name), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder759b4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder759b4;
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
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, '__clone', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        $this->valueHolder759b4 = clone $this->valueHolder759b4;
    }

    public function __sleep()
    {
        $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, '__sleep', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;

        return array('valueHolder759b4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3a14 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3a14;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3a14 && ($this->initializerc3a14->__invoke($valueHolder759b4, $this, 'initializeProxy', array(), $this->initializerc3a14) || 1) && $this->valueHolder759b4 = $valueHolder759b4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder759b4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder759b4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
