<?php

namespace Youtubedl\Option;

class General extends Base
{
    protected $abortOnError;
    protected $cacheDir;
    protected $dumpUserAgent;
    protected $extractorDescriptions;
    protected $help;
    protected $ignoreErrors;
    protected $listExtractors;
    protected $noCacheDir;
    protected $noCheckCertificate;
    protected $proxy;
    protected $referer;
    protected $userAgent;

    public function __toString()
    {
        return parent::format($this);
    }

    /**
     * Sets the value of help.
     *
     * @param mixed $help the help
     *
     * @return self
     */
    public function setHelp($bool=true)
    {
        $this->help = $bool;

        return $this;
    }

    /**
     * Sets the value of ignoreErrors.
     *
     * @param mixed $ignoreErrors the ignore errors
     *
     * @return self
     */
    public function setIgnoreErrors($bool=true)
    {
        $this->ignoreErrors = $bool;

        return $this;
    }

    /**
     * Sets the value of abortOnError.
     *
     * @param mixed $abortOnError the abort on error
     *
     * @return self
     */
    public function setAbortOnError($bool=true)
    {
        $this->abortOnError = $bool;

        return $this;
    }

    /**
     * Sets the value of dumpUserAgent.
     *
     * @param mixed $dumpUserAgent the dump user agent
     *
     * @return self
     */
    public function getUserAgent()
    {
        $this->dumpUserAgent = true;

        return $this;
    }

    /**
     * Sets the value of userAgent.
     *
     * @param mixed $userAgent the user agent
     *
     * @return self
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Sets the value of referer.
     *
     * @param mixed $referer the referer
     *
     * @return self
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Sets the value of listExtractors.
     *
     * @param mixed $listExtractors the list extractors
     *
     * @return self
     */
    public function getExtractors()
    {
        $this->listExtractors = true;

        return $this;
    }

    /**
     * Sets the value of extractorDescriptions.
     *
     * @param mixed $extractorDescriptions the extractor descriptions
     *
     * @return self
     */
    public function getExtractorDescriptions()
    {
        $this->extractorDescriptions = true;

        return $this;
    }

    /**
     * Sets the value of proxy.
     *
     * @param mixed $proxy the proxy
     *
     * @return self
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;

        return $this;
    }

    /**
     * Sets the value of noCheckCertificate.
     *
     * @param mixed $noCheckCertificate the no check certificate
     *
     * @return self
     */
    public function setNoCheckCertificate($bool=true)
    {
        $this->noCheckCertificate = $bool;

        return $this;
    }

    /**
     * Sets the value of cacheDir.
     *
     * @param mixed $cacheDir the cache dir
     *
     * @return self
     */
    public function setCacheDir($cacheDir)
    {
        $this->cacheDir = $cacheDir;

        return $this;
    }

    /**
     * Sets the value of noCacheDir.
     *
     * @param mixed $noCacheDir the no cache dir
     *
     * @return self
     */
    public function setNoCacheDir($bool=true)
    {
        $this->noCacheDir = $bool;

        return $this;
    }
}
