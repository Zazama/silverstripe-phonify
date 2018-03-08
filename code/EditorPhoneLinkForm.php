<?php

namespace Zazama\Phonify;

use Silverstripe\Core\Extension;
use SilverStripe\View\Requirements;

class EditorPhoneLinkForm extends Extension {
    public function updateClientConfig(&$clientConfig)
    {
        $clientConfig['form']['EditorPhoneLink'] = [
            'schemaUrl' => $this->getOwner()->Link('methodSchema/Modals/EditorPhoneLink')
        ];
    }

}