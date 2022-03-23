<?php

public function getCMSFields()
{
    $fields = parent::getCMSFields();

    $fields->addFieldsToTab(
        'Root.Main',
        [
            ColorPickerField::create(
                'MyColorField',
                _t(
                    __CLASS__ . '.MyColorField',
                    'My Color Field'
                ),
                [
                    [
                        'Title' => 'Red',
                        'CSSClass' => 'red',
                        'Color' => '#E51016',
                    ],
                    [
                        'Title' => 'Blue',
                        'CSSClass' => 'blue',
                        'Color' => '#1F6BFE',
                    ],
                    [
                        'Title' => 'Green',
                        'CSSClass' => 'green',
                        'Color' => '#298436',
                    ]
                ]
            )
        ]
    );

    return $fields;
}

?>