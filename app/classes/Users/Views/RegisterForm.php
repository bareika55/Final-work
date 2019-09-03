<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
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
//                    'validate_length',
//                    'validate_not_int',
                        ],
                        'attr' => [
                            'required'
                        ],
                    ],
                ],
                'surname' => [
                    'label' => 'Surname:',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
//                    'validate_length',
//                    'validate_not_int',
                        ],
                    ],
                ],
                'email' => [
                    'label' => 'Email:',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
//                            'validate_mail',
                            'validate_email',
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
