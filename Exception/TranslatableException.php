<?php

namespace FarmaProm\TranslatableException;

abstract class TranslatableException extends \Exception implements TranslatableExceptionInterface
{
    use TranslatableExceptionTrait;
}
