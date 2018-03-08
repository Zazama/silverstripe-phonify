<?php

namespace Zazama\Phonify;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Admin\Forms\LinkFormFactory;

class EditorPhoneLinkFormFactory extends LinkFormFactory
{
    protected function getFormFields($controller, $name, $context)
    {
        $fields = FieldList::create([
            TextField::create(
                'Link',
                _t(__CLASS__.'.EMAIL', 'Phone Number')
            ),
            TextField::create(
                'Description',
                _t(__CLASS__.'.LINKDESCR', 'Description')
            )
        ]);
        if ($context['RequireLinkText']) {
            $fields->insertAfter('Link', TextField::create('Text', _t(__CLASS__.'.LINKTEXT', 'Link text')));
        }
        return $fields;
    }
    protected function getValidator($controller, $name, $context)
    {
        if ($context['RequireLinkText']) {
            return RequiredFields::create('Text');
        }
        return null;
    }
}