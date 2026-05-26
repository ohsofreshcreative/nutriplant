<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Support\SectionClasses;

class Contact extends Block
{
    public $name = 'Kontakt';
    public $description = 'Contact';
    public $slug = 'contact';
    public $category = 'formatting';
    public $icon = 'email';
    public $keywords = ['formularz', 'kontakt'];
    public $mode = 'edit';
    public $supports = [
        'align' => false,
        'mode' => false,
        'jsx' => true,
        'anchor' => true,
        'customClassName' => true,
    ];

    public function fields()
    {
        $contact = new FieldsBuilder('contact');

        $contact
            ->setLocation('block', '==', 'acf/contact')
			->addAccordion('accordion1', [
                'label' => 'Kontakt', 
                'open' => false,      
                'multi_expand' => true,
            ])

            /* --- TAB: Dane --- */
            ->addTab('Dane', ['placement' => 'top'])

            ->addGroup('g_contact_1', ['label' => ''])
                ->addText('subtitle', [
                    'label' => 'Nagłówek mały',
                ])
                ->addText('header', [
                    'label' => 'Tytuł',
                ])
                ->addTextarea('description', [
                    'label' => 'Opis',
                    'rows' => 3,
                ])
                ->addImage('bottom_image', [
                    'label' => 'Zdjęcie',
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                ])
            ->endGroup()

            /* --- TAB: Formularz --- */
            ->addTab('Formularz', ['placement' => 'top'])

            ->addGroup('g_contact_2', ['label' => ''])
                ->addTextarea('shortcode', [
                    'label' => 'Kod formularza',
                    'default_value' => '[contact-form-7 id="f12c470" title="Contact form 1"]',
                ])
            ->endGroup()

            /* --- USTAWIENIA BLOKU --- */
            ->addTab('Ustawienia bloku', ['placement' => 'top'])

            ->addText('section_id', [
                'label' => 'ID',
            ])
            ->addText('section_class', [
                'label' => 'Dodatkowe klasy CSS',
            ])
            ->addTrueFalse('flip', [
                'label' => 'Odwrotna kolejność',
                'ui' => 1,
            ])
            ->addTrueFalse('wide', [
                'label' => 'Szeroka kolumna',
                'ui' => 1,
            ])
            ->addTrueFalse('nomt', [
                'label' => 'Bez marginesu górnego',
                'ui' => 1,
            ])
            ->addTrueFalse('gap', [
                'label' => 'Większy odstęp',
                'ui' => 1,
            ])
            ->addSelect('background', [
                'label' => 'Kolor tła',
                'choices' => [
                    'none' => 'Domyślne',
                    'section-white' => 'Białe',
                    'section-light' => 'Jasne',
                    'section-gray' => 'Szare',
                    'section-brand' => 'Brand',
                    'section-gradient' => 'Gradient',
                    'section-dark' => 'Ciemne',
                ],
                'default_value' => 'none',
            ]);

        return $contact;
    }

    public function with(): array
    {
        $fields = [
            'g_contact_1' => get_field('g_contact_1') ?: [],
            'g_contact_2' => get_field('g_contact_2') ?: [],

            'section_id' => get_field('section_id'),
            'section_class' => get_field('section_class'),

            'flip' => (bool) get_field('flip'),
            'wide' => (bool) get_field('wide'),
            'nomt' => (bool) get_field('nomt'),
            'gap' => (bool) get_field('gap'),

            'background' => get_field('background') ?: 'none',
        ];

        $fields['sectionClass'] = SectionClasses::fromMap($fields, [
            'flip' => 'order-flip',
            'wide' => 'wide',
            'nomt' => '!mt-0',
            'gap' => 'wider-gap',
        ]);

        return $fields;
    }
}