<?php

namespace Proxies\__CG__\Beon\IntranetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FacebookUrl extends \Beon\IntranetBundle\Entity\FacebookUrl implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'id', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'url', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'alias', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'facebooklikecounts', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'customerfacebookurls', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'last_post', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'page_id', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'warning_mail_sent');
        }

        return array('__isInitialized__', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'id', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'url', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'alias', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'facebooklikecounts', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'customerfacebookurls', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'last_post', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'page_id', '' . "\0" . 'Beon\\IntranetBundle\\Entity\\FacebookUrl' . "\0" . 'warning_mail_sent');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FacebookUrl $proxy) {
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
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', array($alias));

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', array());

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebooklikecounts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebooklikecounts', array());

        return parent::getFacebooklikecounts();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebooklikecounts($facebooklikecounts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebooklikecounts', array($facebooklikecounts));

        return parent::setFacebooklikecounts($facebooklikecounts);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerfacebookurls()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerfacebookurls', array());

        return parent::getCustomerfacebookurls();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerfacebookurls($customerfacebookurls)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerfacebookurls', array($customerfacebookurls));

        return parent::setCustomerfacebookurls($customerfacebookurls);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function cleanUpFbUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cleanUpFbUrl', array($url));

        return parent::cleanUpFbUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPost', array());

        return parent::getLastPost();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastPost($last_post)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastPost', array($last_post));

        return parent::setLastPost($last_post);
    }

    /**
     * {@inheritDoc}
     */
    public function getPageId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageId', array());

        return parent::getPageId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPageId($page_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPageId', array($page_id));

        return parent::setPageId($page_id);
    }

    /**
     * {@inheritDoc}
     */
    public function setWarningMailSent($warning_mail_sent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWarningMailSent', array($warning_mail_sent));

        return parent::setWarningMailSent($warning_mail_sent);
    }

    /**
     * {@inheritDoc}
     */
    public function getWarningMailSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarningMailSent', array());

        return parent::getWarningMailSent();
    }

    /**
     * {@inheritDoc}
     */
    public function addFacebooklikecount(\Beon\IntranetBundle\Entity\FacebookLikecount $facebooklikecounts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFacebooklikecount', array($facebooklikecounts));

        return parent::addFacebooklikecount($facebooklikecounts);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFacebooklikecount(\Beon\IntranetBundle\Entity\FacebookLikecount $facebooklikecounts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFacebooklikecount', array($facebooklikecounts));

        return parent::removeFacebooklikecount($facebooklikecounts);
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomerfacebookurl(\Beon\IntranetBundle\Entity\CustomerFacebookUrl $customerfacebookurls)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomerfacebookurl', array($customerfacebookurls));

        return parent::addCustomerfacebookurl($customerfacebookurls);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomerfacebookurl(\Beon\IntranetBundle\Entity\CustomerFacebookUrl $customerfacebookurls)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomerfacebookurl', array($customerfacebookurls));

        return parent::removeCustomerfacebookurl($customerfacebookurls);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikeCountDiff()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikeCountDiff', array());

        return parent::getLikeCountDiff();
    }

}
