Translatable Exception
==========

Example usage
----------

```php
<?php

use FarmaProm\TranslatableException\TranslatableException;

require_once __DIR__ . '/vendor/autoload.php';


class MyException extends TranslatableException
{
    public function getTranslationKey()
    {
        return 'my_key';
    }

    public function getTranslationDomain()
    {
        return 'my_domain';
    }
}

try {

    throw (new MyException())->setTranslationParams(['param' => 'test']);
} catch (TranslatableException $e) {
    var_export($e);

    // Example usage with translator
//     $translator->trans($e->getTranslationKey(), $e->getTranslationParams(), $e->getTranslationDomain());
}

```
