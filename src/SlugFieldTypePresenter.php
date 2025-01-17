<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class SlugFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\SlugFieldType
 */
class SlugFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return the humanized string.
     *
     * @return string
     */
    public function humanized()
    {
        return ucwords(str_replace(array_get($this->object->getConfig(), 'type'), ' ', $this->object->getValue()));
    }
}
