<?php

namespace FarmaProm\TranslatableException;

interface TranslatableExceptionInterface
{
    /**
     * @return string translation key
     */
    public function getTranslationKey();

    /**
     * @return string translation domain
     */
    public function getTranslationDomain();

    /**
     * @returnstring translation parameters
     */
    public function getTranslationParams();
}
