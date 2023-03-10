<?php

namespace Proxies\__CG__\Beon\IntranetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Timetracking extends \Beon\IntranetBundle\Entity\Timetracking implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'id', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'user', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'customer', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'task', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'day', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'hours', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'tariff', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'note', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'campaign');
        }

        return array('__isInitialized__', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'id', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'user', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'customer', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'task', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'day', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'hours', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'tariff', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'note', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\Timetracking' . "\0" . 'campaign');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Timetracking $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDay($day)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDay', array($day));

        return parent::setDay($day);
    }

    /**
     * {@inheritDoc}
     */
    public function getDay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDay', array());

        return parent::getDay();
    }

    /**
     * {@inheritDoc}
     */
    public function setHours($hours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHours', array($hours));

        return parent::setHours($hours);
    }

    /**
     * {@inheritDoc}
     */
    public function getHours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHours', array());

        return parent::getHours();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', array($note));

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', array());

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Beon\IntranetBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', array());

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function getParentCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentCustomer', array());

        return parent::getParentCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Beon\IntranetBundle\Entity\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', array($customer));

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function setTariff($tariff)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTariff', array($tariff));

        return parent::setTariff($tariff);
    }

    /**
     * {@inheritDoc}
     */
    public function getTariff()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTariff', array());

        return parent::getTariff();
    }

    /**
     * {@inheritDoc}
     */
    public function setTask(\Beon\IntranetBundle\Entity\Task $task = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTask', array($task));

        return parent::setTask($task);
    }

    /**
     * {@inheritDoc}
     */
    public function getTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTask', array());

        return parent::getTask();
    }

    /**
     * {@inheritDoc}
     */
    public function checkConsitency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkConsitency', array());

        return parent::checkConsitency();
    }

    /**
     * {@inheritDoc}
     */
    public function setCampaign(\Beon\IntranetBundle\Entity\Campaign $campaign = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampaign', array($campaign));

        return parent::setCampaign($campaign);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampaign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampaign', array());

        return parent::getCampaign();
    }

}
