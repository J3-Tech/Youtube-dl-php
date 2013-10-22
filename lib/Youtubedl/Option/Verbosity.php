<?php

namespace Youtubedl\Option;

class Verbosity extends Base
{
    protected $consoleTitle;
    protected $dumpIntermediatePages;
    protected $getFilename;
    protected $getFormat;
    protected $getId;
    protected $getThumbnail;
    protected $getTitle;
    protected $getUrl;
    protected $newline;
    protected $noprogress;
    protected $quiet;
    protected $simulate;
    protected $skipDownload;
    protected $verbose;

    public function __toString()
    {
        return parent::format($this);
    }

    /**
     * Sets the value of quiet.
     *
     * @param mixed $quiet the quiet
     *
     * @return self
     */
    public function setQuiet($bool=true)
    {
        $this->quiet = $bool;

        return $this;
    }

    /**
     * Sets the value of simulate.
     *
     * @param mixed $simulate the simulate
     *
     * @return self
     */
    public function setSimulate($bool=true)
    {
        $this->simulate = $bool;

        return $this;
    }

    /**
     * Sets the value of skipDownload.
     *
     * @param mixed $skipDownload the skip download
     *
     * @return self
     */
    public function setSkipDownload($bool=true)
    {
        $this->skipDownload = $bool;

        return $this;
    }

    /**
     * Sets the value of getUrl.
     *
     * @param mixed $getUrl the get url
     *
     * @return self
     */
    public function getUrl($bool=true)
    {
        $this->getUrl = $bool;

        return $this;
    }

    /**
     * Sets the value of getTitle.
     *
     * @param mixed $getTitle the get title
     *
     * @return self
     */
    public function getTitle($bool=true)
    {
        $this->getTitle = $bool;

        return $this;
    }

    /**
     * Sets the value of getId.
     *
     * @param mixed $getId the get id
     *
     * @return self
     */
    public function getId($bool=true)
    {
        $this->getId = $bool;

        return $this;
    }

    /**
     * Sets the value of getThumbnail.
     *
     * @param mixed $getThumbnail the get thumbnail
     *
     * @return self
     */
    public function getThumbnail($bool=true)
    {
        $this->getThumbnail = $bool;

        return $this;
    }

    /**
     * Sets the value of getFilename.
     *
     * @param mixed $getFilename the get filename
     *
     * @return self
     */
    public function getFilename($bool=true)
    {
        $this->getFilename = $bool;

        return $this;
    }

    /**
     * Sets the value of getFormat.
     *
     * @param mixed $getFormat the get format
     *
     * @return self
     */
    public function getFormat($bool=true)
    {
        $this->getFormat = $bool;

        return $this;
    }

    /**
     * Sets the value of newline.
     *
     * @param mixed $newline the newline
     *
     * @return self
     */
    public function setNewline($bool=true)
    {
        $this->newline = $bool;

        return $this;
    }

    /**
     * Sets the value of noprogress.
     *
     * @param mixed $noprogress the noprogress
     *
     * @return self
     */
    public function setNoprogress($bool=true)
    {
        $this->noprogress = $bool;

        return $this;
    }

    /**
     * Sets the value of consoleTitle.
     *
     * @param mixed $consoleTitle the console title
     *
     * @return self
     */
    public function setConsoleTitle($bool=true)
    {
        $this->consoleTitle = $bool;

        return $this;
    }

    /**
     * Sets the value of verbose.
     *
     * @param mixed $verbose the verbose
     *
     * @return self
     */
    public function setVerbose($bool=true)
    {
        $this->verbose = $bool;

        return $this;
    }

    /**
     * Sets the value of dumpIntermediatePages.
     *
     * @param mixed $dumpIntermediatePages the dump intermediate pages
     *
     * @return self
     */
    public function setDumpIntermediatePages($bool=true)
    {
        $this->dumpIntermediatePages = $bool;

        return $this;
    }
}
