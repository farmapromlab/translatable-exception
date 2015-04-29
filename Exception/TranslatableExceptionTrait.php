<?php

namespace FarmaProm\TranslatableException;

trait TranslatableExceptionTrait
{
    /**
     * Parameters for translation
     * @var array
     */
    protected $translationParams;

    /**
     *
     * @param array $params
     * @return \FarmaProm\TranslatableException\TranslatableExceptionTrait
     */
    public function setTranslationParams($params)
    {
        $this->translationParams = $params;

        return $this;
    }

    /**
     * @return array
     */
    public function getTranslationParams()
    {
        return $this->translationParams;
    }
}
