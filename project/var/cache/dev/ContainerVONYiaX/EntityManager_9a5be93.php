<?php

namespace ContainerVONYiaX;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59c0e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc749a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93798 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getConnection', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getMetadataFactory', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getExpressionBuilder', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'beginTransaction', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getCache', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'transactional', array('func' => $func), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->transactional($func);
    }

    public function commit()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'commit', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->commit();
    }

    public function rollback()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'rollback', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getClassMetadata', array('className' => $className), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'createQuery', array('dql' => $dql), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'createNamedQuery', array('name' => $name), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'createQueryBuilder', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'flush', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'clear', array('entityName' => $entityName), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->clear($entityName);
    }

    public function close()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'close', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->close();
    }

    public function persist($entity)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'persist', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'remove', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'refresh', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'detach', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'merge', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'contains', array('entity' => $entity), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getEventManager', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getConfiguration', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'isOpen', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getUnitOfWork', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getProxyFactory', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'initializeObject', array('obj' => $obj), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'getFilters', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'isFiltersStateClean', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'hasFilters', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return $this->valueHolder59c0e->hasFilters();
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

        $instance->initializerc749a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59c0e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59c0e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59c0e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, '__get', ['name' => $name], $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        if (isset(self::$publicProperties93798[$name])) {
            return $this->valueHolder59c0e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59c0e;

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

        $targetObject = $this->valueHolder59c0e;
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
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59c0e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59c0e;
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
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, '__isset', array('name' => $name), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59c0e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59c0e;
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
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, '__unset', array('name' => $name), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59c0e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59c0e;
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
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, '__clone', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        $this->valueHolder59c0e = clone $this->valueHolder59c0e;
    }

    public function __sleep()
    {
        $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, '__sleep', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;

        return array('valueHolder59c0e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc749a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc749a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc749a && ($this->initializerc749a->__invoke($valueHolder59c0e, $this, 'initializeProxy', array(), $this->initializerc749a) || 1) && $this->valueHolder59c0e = $valueHolder59c0e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59c0e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59c0e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
