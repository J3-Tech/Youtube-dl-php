<?php

namespace Youtubedl\Option;

class Subtitle extends AbstractOption
{
    protected $allSub;
    protected $listSubs;
    protected $subFormat;
    protected $subLangs;
    protected $writeAutoSub;
    protected $writeSub;

    /**
     * Sets the value of writeSub.
     *
     * @param mixed $writeSub the write sub
     *
     * @return self
     */
    public function setWriteSub($bool=true)
    {
        $this->writeSub = $bool;

        return $this;
    }

    /**
     * Sets the value of writeAutoSub.
     *
     * @param mixed $writeAutoSub the write auto sub
     *
     * @return self
     */
    public function setWriteAutoSub($bool=true)
    {
        $this->writeAutoSub = $bool;

        return $this;
    }

    /**
     * Sets the value of allSub.
     *
     * @param mixed $allSub the all sub
     *
     * @return self
     */
    public function setAllSub($bool=true)
    {
        $this->allSub = $bool;

        return $this;
    }

    /**
     * Sets the value of listSubs.
     *
     * @param mixed $listSubs the list subs
     *
     * @return self
     */
    public function setListSubs($bool=true)
    {
        $this->listSubs = $bool;

        return $this;
    }

    /**
     * Sets the value of subFormat.
     *
     * @param mixed $subFormat the sub format
     *
     * @return self
     */
    public function setSubFormat($subFormat)
    {
        $this->subFormat = $subFormat;

        return $this;
    }

    /**
     * Sets the value of subLangs.
     *
     * @param mixed $subLangs the sub langs
     *
     * @return self
     */
    public function setSubLangs($subLangs)
    {
        $this->subLangs = $subLangs;

        return $this;
    }
}
