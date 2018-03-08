<?php

namespace Zazama\Phonify;

use Silverstripe\Core\Extension;
use SilverStripe\View\Requirements;
use Zazama\Phonify\EditorPhoneLinkFormFactory;

class EditorPhoneLink extends Extension
{

    private static $allowed_actions = array(
        'EditorExternalLink',
        'EditorEmailLink',
        'EditorPhoneLink'
    );

    public function EditorPhoneLink() {
        $factory = EditorPhoneLinkFormFactory::singleton();
        return $factory->getForm(
            $this->getOwner()->controller,
            "{$this->getOwner()->name}/EditorPhoneLink",
            [ 'RequireLinkText' => false ]
        );
    }
}
