<?php

namespace Youtubedl\Option;

class PostProcessing extends AbstractOption
{
    protected $addMetadata;
    protected $audioFormat;
    protected $audioQuality;
    protected $embedSubs;
    protected $extractAudio;
    protected $keepVideo;
    protected $noPostOverwrites;
    protected $recodeVideo;

    /**
     * Sets the value of extractAudio.
     *
     * @param mixed $extractAudio the extract audio
     *
     * @return self
     */
    public function setExtractAudio($bool=true)
    {
        $this->extractAudio = $bool;

        return $this;
    }

    /**
     * Sets the value of audioFormat.
     *
     * @param mixed $audioFormat the audio format
     *
     * @return self
     */
    public function setAudioFormat($audioFormat)
    {
        if (in_array($audioFormat,array('best','aac','vorbis','mp3','m4a','opus','wav'))) {
            $this->audioFormat = $audioFormat;
        }

        return $this;
    }

    /**
     * Sets the value of audioQuality.
     *
     * @param mixed $audioQuality the audio quality
     *
     * @return self
     */
    public function setAudioQuality($audioQuality)
    {
        if ($audioQuality>=0||$audioQuality<=9) {
            $this->audioQuality = $audioQuality;
        }

        return $this;
    }

    /**
     * Sets the value of recodeVideo.
     *
     * @param mixed $recodeVideo the recode video
     *
     * @return self
     */
    public function setRecodeVideo($format)
    {
        if (in_array($format,array('mp4','flv','ogg','webm'))) {
            $this->recodeVideo = $format;
        }

        return $this;
    }

    /**
     * Sets the value of keepVideo.
     *
     * @param mixed $keepVideo the keep video
     *
     * @return self
     */
    public function setKeepVideo($bool=true)
    {
        $this->keepVideo = $bool;

        return $this;
    }

    /**
     * Sets the value of noPostOverwrites.
     *
     * @param mixed $noPostOverwrites the no post overwrites
     *
     * @return self
     */
    public function setNoPostOverwrites($bool=true)
    {
        $this->noPostOverwrites = $bool;

        return $this;
    }

    /**
     * Sets the value of embedSubs.
     *
     * @param mixed $embedSubs the embed subs
     *
     * @return self
     */
    public function setEmbedSubs($bool=true)
    {
        $this->embedSubs = $bool;

        return $this;
    }

    /**
     * Sets the value of addMetadata.
     *
     * @param mixed $addMetadata the add metadata
     *
     * @return self
     */
    public function setAddMetadata($bool=true)
    {
        $this->addMetadata = $bool;

        return $this;
    }
}
