<?php

namespace Volc\Service\Vod;

class VodOption
{
    public static $VOD_TPL_OBJ = 'tplv-vod-obj';
    public static $VOD_TPL_NOOP = 'tplv-vod-noop';
    public static $VOD_TPL_RESIZE = 'tplv-vod-rs';
    public static $VOD_TPL_CENTER_CROP = 'tplv-vod-cc';
    public static $VOD_TPL_SMART_CROP = 'tplv-vod-cs';
    public static $VOD_TPL_SIG = 'tplv-bd-sig';

    public static $FORMAT_JPEG     = 'jpeg';
    public static $FORMAT_PNG      = 'png';
    public static $FORMAT_WEBP     = 'webp';
    public static $FORMAT_AWEBP    = 'awebp';
    public static $FORMAT_GIF      = 'gif';
    public static $FORMAT_HEIC     = 'heic';
    public static $FORMAT_ORIGINAL = 'image';

    public static $HTTP = 'http';
    public static $HTTPS = 'https';

    public $isHttps;
    public $format;
    public $sigKey;
    public $tpl;
    public $w;
    public $h;
    public $kv;

    public function setHttps(bool $isHttps)
    {
        $this->isHttps = $isHttps;
    }

    public function getHttps()
    {
        return $this->isHttps;
    }

    public function setFormat(string $format)
    {
        $this->format = $format;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setSig(string $sig)
    {
        $this->sigKey = $sig;
    }

    public function getSig()
    {
        return $this->sigKey;
    }

    public function setKV(array $kv)
    {
        $this->kv = $kv;
    }

    public function getKV()
    {
        return $this->kv;
    }

    public function setVodTplObj()
    {
        $this->tpl = VodOption::$VOD_TPL_OBJ;
    }

    public function setVodNoop()
    {
        $this->tpl = VodOption::$VOD_TPL_NOOP;
    }

    public function setVodSig()
    {
        $this->tpl = VodOption::$VOD_TPL_SIG;
    }

    public function setVodTplCenterCrop(int $weight, int $height)
    {
        $this->tpl = VodOption::$VOD_TPL_CENTER_CROP;
        $this->w = $weight;
        $this->h = $height;
    }

    public function setVodTplSmartCrop(int $weight, int $height)
    {
        $this->tpl = VodOption::$VOD_TPL_SMART_CROP;
        $this->w = $weight;
        $this->h = $height;
    }

    public function setVodTplResize(int $weight, int $height)
    {
        $this->tpl = VodOption::$VOD_TPL_RESIZE;
        $this->w = $weight;
        $this->h = $height;
    }

    public function getTpl()
    {
        return $this->tpl;
    }

    public function getW()
    {
        return $this->w;
    }

    public function getH()
    {
        return $this->h;
    }
}
