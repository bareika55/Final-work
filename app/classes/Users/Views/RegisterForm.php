<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Name:',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ],
                    ],
                ],
                'surname' => [
                    'label' => 'Surname:',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
//                            'validate_is_not_number'
                        ],
                    ],
                ],
                'email' => [
                    'label' => 'Email:',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail',
                        ],
                    ],
                ],
                'password' => [
                    'label' => 'Password:',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ],
                    ],
                ],
                'password2' => [
                    'label' => 'Repeat password:',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ],
                    ],
                ],
                'telephone' => [
                    'label' => 'Telephone:',
                    'type' => 'text',
                ],
                'address' => [
                    'label' => 'Address:',
                    'type' => 'email',
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                    'extra' => [
                        'attr' => [
                            'class' => 'red-btn'
                        ],
                    ],
                ],
                'delete' => [
                    'title' => 'Ištrinti laukelius',
                    'extra' => [
                        'attr' => [
                            'class' => 'blue-btn'
                        ],
                    ],
                ],
            ],

            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password2'
                ],
            ],
        ];
    }

}
