<?php

namespace Youtubedl\Option;

class Video extends AbstractOption
{
    protected $ageLimit;
    protected $date;
    protected $dateafter;
    protected $datebefore;
    protected $downloadArchive;
    protected $matchTitle;
    protected $maxDownloads;
    protected $maxFilesize;
    protected $minFilesize;
    protected $noPlaylist;
    protected $playlistEnd;
    protected $playlistStart;
    protected $rejectTitle;

    /**
     * Sets the value of playlistStart.
     *
     * @param mixed $playlistStart the playlist start
     *
     * @return self
     */
    public function setPlaylistStart($playlistStart)
    {
        $this->playlistStart = $playlistStart;

        return $this;
    }

    /**
     * Sets the value of playlistEnd.
     *
     * @param mixed $playlistEnd the playlist end
     *
     * @return self
     */
    public function setPlaylistEnd($playlistEnd)
    {
        $this->playlistEnd = $playlistEnd;

        return $this;
    }

    /**
     * Sets the value of matchTitle.
     *
     * @param mixed $matchTitle the match title
     *
     * @return self
     */
    public function setMatchTitle($matchTitle)
    {
        $this->matchTitle = $matchTitle;

        return $this;
    }

    /**
     * Sets the value of rejectTitle.
     *
     * @param mixed $rejectTitle the reject title
     *
     * @return self
     */
    public function setRejectTitle($rejectTitle)
    {
        $this->rejectTitle = $rejectTitle;

        return $this;
    }

    /**
     * Sets the value of maxDownloads.
     *
     * @param mixed $maxDownloads the max downloads
     *
     * @return self
     */
    public function setMaxDownloads($maxDownloads)
    {
        $this->maxDownloads = $maxDownloads;

        return $this;
    }

    /**
     * Sets the value of minFilesize.
     *
     * @param mixed $minFilesize the min filesize
     *
     * @return self
     */
    public function setMinFilesize($minFilesize)
    {
        $this->minFilesize = $minFilesize;

        return $this;
    }

    /**
     * Sets the value of maxFilesize.
     *
     * @param mixed $maxFilesize the max filesize
     *
     * @return self
     */
    public function setMaxFilesize($maxFilesize)
    {
        $this->maxFilesize = $maxFilesize;

        return $this;
    }

    /**
     * Sets the value of date.
     *
     * @param mixed $date the date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Sets the value of datebefore.
     *
     * @param mixed $datebefore the datebefore
     *
     * @return self
     */
    public function setDatebefore($datebefore)
    {
        $this->datebefore = $datebefore;

        return $this;
    }

    /**
     * Sets the value of dateafter.
     *
     * @param mixed $dateafter the dateafter
     *
     * @return self
     */
    public function setDateafter($dateafter)
    {
        $this->dateafter = $dateafter;

        return $this;
    }

    /**
     * Sets the value of noPlaylist.
     *
     * @param mixed $noPlaylist the no playlist
     *
     * @return self
     */
    public function setNoPlaylist($bool=true)
    {
        $this->noPlaylist = $bool;

        return $this;
    }

    /**
     * Sets the value of ageLimit.
     *
     * @param mixed $ageLimit the age limit
     *
     * @return self
     */
    public function setAgeLimit($ageLimit)
    {
        $this->ageLimit = $ageLimit;

        return $this;
    }

    /**
     * Sets the value of downloadArchive.
     *
     * @param mixed $downloadArchive the download archive
     *
     * @return self
     */
    public function setDownloadArchive($downloadArchive)
    {
        $this->downloadArchive = $downloadArchive;

        return $this;
    }
}
