<?php

namespace App\Forms;


class CarForm extends Form
{
    public function buildForm()
    {
        $this->formOptions = [
            'method' => 'POST',
            'url' => route('cars.store')
        ];

        $this
            ->add('Marke', 'select', [
                'choices'=> ['Volvo', 'VAZ', 'Mercedes', 'GAZ'],
                'label' => 'Masinos marke',
                'rules' => 'required'
            ])
            ->add('Gamybos_metai', 'number', [
                'label' => 'Metai',
                'rules' => 'required|' 
            ])
            ->add('Savininko_vardas','text');

            $this->add('submit', 'submit', [
                'label' => 'Saugot'
            ]);
    }
}
