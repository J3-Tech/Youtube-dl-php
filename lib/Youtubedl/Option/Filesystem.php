<?php

namespace Youtubedl\Option;

class Filesystem extends Base
{
    protected $autoNumber;
    protected $autoNumberSize;
    protected $batchFile;
    protected $continue;
    protected $cookie;
    protected $id;
    protected $noContinue;
    protected $noMtime;
    protected $noOverwrites;
    protected $noPart;
    protected $output;
    protected $restrictFilenames;
    protected $title;
    protected $writeAnnotations;
    protected $writeDescription;
    protected $writeInfoJson;
    protected $writeThumnail;

    public function __toString()
    {
        return parent::format($this);
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($bool=true)
    {
        $this->title = $bool;

        return $this;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($bool=true)
    {
        $this->id = $bool;

        return $this;
    }

    /**
     * Sets the value of autoNumber.
     *
     * @param mixed $autoNumber the auto number
     *
     * @return self
     */
    public function setAutoNumber($bool=true)
    {
        $this->autoNumber = $bool;

        return $this;
    }

    /**
     * Sets the value of output.
     *
     * @param mixed $output the output
     *
     * @return self
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Sets the value of autoNumberSize.
     *
     * @param mixed $autoNumberSize the auto number size
     *
     * @return self
     */
    public function setAutoNumberSize($autoNumberSize)
    {
        $this->autoNumberSize = $autoNumberSize;

        return $this;
    }

    /**
     * Sets the value of restrictFilenames.
     *
     * @param mixed $restrictFilenames the restrict filenames
     *
     * @return self
     */
    public function setRestrictFilenames($restrictFilenames)
    {
        $this->restrictFilenames = $restrictFilenames;

        return $this;
    }

    /**
     * Sets the value of batchFile.
     *
     * @param mixed $batchFile the batch file
     *
     * @return self
     */
    public function setBatchFile($batchFile)
    {
        $this->batchFile = $batchFile;

        return $this;
    }

    /**
     * Sets the value of noOverwrites.
     *
     * @param mixed $noOverwrites the no overwrites
     *
     * @return self
     */
    public function setNoOverwrites($bool=true)
    {
        $this->noOverwrites = $bool;

        return $this;
    }

    /**
     * Sets the value of continue.
     *
     * @param mixed $continue the continue
     *
     * @return self
     */
    public function setContinue($bool=true)
    {
        $this->continue = $bool;

        return $this;
    }

    /**
     * Sets the value of noContinue.
     *
     * @param mixed $noContinue the no continue
     *
     * @return self
     */
    public function setNoContinue($bool=true)
    {
        $this->noContinue = $bool;

        return $this;
    }

    /**
     * Sets the value of cookie.
     *
     * @param mixed $cookie the cookie
     *
     * @return self
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;

        return $this;
    }

    /**
     * Sets the value of noPart.
     *
     * @param mixed $noPart the no part
     *
     * @return self
     */
    public function setNoPart($bool=true)
    {
        $this->noPart = $bool;

        return $this;
    }

    /**
     * Sets the value of noMtime.
     *
     * @param mixed $noMtime the no mtime
     *
     * @return self
     */
    public function setNoMtime($bool=true)
    {
        $this->noMtime = $bool;

        return $this;
    }

    /**
     * Sets the value of writeDescription.
     *
     * @param mixed $writeDescription the write description
     *
     * @return self
     */
    public function setWriteDescription($bool=true)
    {
        $this->writeDescription = $bool;

        return $this;
    }

    /**
     * Sets the value of writeInfoJson.
     *
     * @param mixed $writeInfoJson the write info json
     *
     * @return self
     */
    public function setWriteInfoJson($bool=true)
    {
        $this->writeInfoJson = $bool;

        return $this;
    }

    /**
     * Sets the value of writeAnnotations.
     *
     * @param mixed $writeAnnotations the write annotations
     *
     * @return self
     */
    public function setWriteAnnotations($bool=true)
    {
        $this->writeAnnotations = $bool;

        return $this;
    }

    /**
     * Sets the value of writeThumnail.
     *
     * @param mixed $writeThumnail the write thumnail
     *
     * @return self
     */
    public function setWriteThumnail($bool=true)
    {
        $this->writeThumnail = $bool;

        return $this;
    }
}
