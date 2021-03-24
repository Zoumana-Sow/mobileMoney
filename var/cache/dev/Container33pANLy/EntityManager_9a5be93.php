<?php

namespace Container33pANLy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0114 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd85d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa018e = [
        
    ];

    public function getConnection()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getConnection', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getMetadataFactory', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getExpressionBuilder', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'beginTransaction', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getCache', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'transactional', array('func' => $func), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->transactional($func);
    }

    public function commit()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'commit', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->commit();
    }

    public function rollback()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'rollback', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getClassMetadata', array('className' => $className), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'createQuery', array('dql' => $dql), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'createNamedQuery', array('name' => $name), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'createQueryBuilder', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'flush', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'clear', array('entityName' => $entityName), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->clear($entityName);
    }

    public function close()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'close', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->close();
    }

    public function persist($entity)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'persist', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'remove', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'refresh', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'detach', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'merge', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'contains', array('entity' => $entity), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getEventManager', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getConfiguration', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'isOpen', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getUnitOfWork', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getProxyFactory', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'initializeObject', array('obj' => $obj), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'getFilters', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'isFiltersStateClean', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'hasFilters', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return $this->valueHolderf0114->hasFilters();
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

        $instance->initializerd85d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0114) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0114 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0114->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, '__get', ['name' => $name], $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        if (isset(self::$publicPropertiesa018e[$name])) {
            return $this->valueHolderf0114->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0114;

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

        $targetObject = $this->valueHolderf0114;
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
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0114;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0114;
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
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, '__isset', array('name' => $name), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0114;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0114;
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
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, '__unset', array('name' => $name), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0114;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0114;
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
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, '__clone', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        $this->valueHolderf0114 = clone $this->valueHolderf0114;
    }

    public function __sleep()
    {
        $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, '__sleep', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;

        return array('valueHolderf0114');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd85d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd85d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd85d0 && ($this->initializerd85d0->__invoke($valueHolderf0114, $this, 'initializeProxy', array(), $this->initializerd85d0) || 1) && $this->valueHolderf0114 = $valueHolderf0114;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0114;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0114;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
