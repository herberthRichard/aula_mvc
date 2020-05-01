<?php

namespace Src\Interfaces;

interface InterfaceView
{
    public function getDir()
    {
        return $this->Dir;
    }
    public function setDir($Dir)
    {
        $this->Dir = $Dir;
    }
    public function getTitle()
    {
        return $this->Title;
    }
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
    public function getKeywords()
    {
        return $this->Keywords;
    }
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
    }
}
