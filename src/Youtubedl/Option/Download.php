<?php

namespace Youtubedl\Option;

class Download extends AbstractOption
{
    protected $bufferSize;
    protected $noResizeBuffer;
    protected $rateLimit;
    protected $retries;

    /**
     * Sets the value of rateLimit.
     *
     * @param mixed $rateLimit the rate limit
     *
     * @return self
     */
    public function setRateLimit($rateLimit)
    {
        $this->rateLimit = $rateLimit;

        return $this;
    }

    /**
     * Sets the value of retries.
     *
     * @param mixed $retries the retries
     *
     * @return self
     */
    public function setRetries($retries)
    {
        $this->retries = $retries;

        return $this;
    }

    /**
     * Sets the value of bufferSize.
     *
     * @param mixed $bufferSize the buffer size
     *
     * @return self
     */
    public function setBufferSize($bufferSize)
    {
        $this->bufferSize = $bufferSize;

        return $this;
    }

    /**
     * Sets the value of noResizeBuffer.
     *
     * @param mixed $noResizeBuffer the no resize buffer
     *
     * @return self
     */
    public function setNoResizeBuffer($bool=true)
    {
        $this->noResizeBuffer = $bool;

        return $this;
    }
}
