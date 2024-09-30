<?php

namespace App\Services;

use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleTranslationService
{
    protected $translator;

    public function __construct()
    {
        $this->translator = new GoogleTranslate();
    }

    public function translate($text, $target = 'en', $source = null)
    {
        if ($source) {
            $this->translator->setSource($source);
        }
        $this->translator->setTarget($target);

        return $this->translator->translate($text);
    }

    public function translateToAmharic($text)
    {
        return $this->translate($text, 'am');
    }
}
