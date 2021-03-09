<?php

namespace ContainerK5nHf61;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e8d1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerccb7e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties668ca = [
        
    ];

    public function getConnection()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getConnection', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getMetadataFactory', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getExpressionBuilder', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'beginTransaction', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getCache', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'transactional', array('func' => $func), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->transactional($func);
    }

    public function commit()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'commit', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->commit();
    }

    public function rollback()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'rollback', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getClassMetadata', array('className' => $className), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'createQuery', array('dql' => $dql), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'createNamedQuery', array('name' => $name), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'createQueryBuilder', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'flush', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'clear', array('entityName' => $entityName), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->clear($entityName);
    }

    public function close()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'close', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->close();
    }

    public function persist($entity)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'persist', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'remove', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'refresh', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'detach', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'merge', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'contains', array('entity' => $entity), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getEventManager', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getConfiguration', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'isOpen', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getUnitOfWork', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getProxyFactory', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'initializeObject', array('obj' => $obj), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'getFilters', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'isFiltersStateClean', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'hasFilters', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return $this->valueHolder2e8d1->hasFilters();
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

        $instance->initializerccb7e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2e8d1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e8d1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e8d1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, '__get', ['name' => $name], $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        if (isset(self::$publicProperties668ca[$name])) {
            return $this->valueHolder2e8d1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8d1;

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

        $targetObject = $this->valueHolder2e8d1;
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
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8d1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e8d1;
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
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, '__isset', array('name' => $name), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8d1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2e8d1;
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
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, '__unset', array('name' => $name), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8d1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2e8d1;
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
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, '__clone', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        $this->valueHolder2e8d1 = clone $this->valueHolder2e8d1;
    }

    public function __sleep()
    {
        $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, '__sleep', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;

        return array('valueHolder2e8d1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerccb7e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerccb7e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerccb7e && ($this->initializerccb7e->__invoke($valueHolder2e8d1, $this, 'initializeProxy', array(), $this->initializerccb7e) || 1) && $this->valueHolder2e8d1 = $valueHolder2e8d1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e8d1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e8d1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
