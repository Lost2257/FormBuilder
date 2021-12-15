<?php

namespace App\Forms;
use App\Rules\MinWordsRule;
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
                'rules' => 'required|gt:1899|lt:2022' 
            ])
            ->add('Savininko_vardas','text', [
                'label' => 'Savininko vardas ir pavarde',
                'rules' => [new MinWordsRule(),]
            ]);
            

            $this->add('submit', 'submit', [
                'label' => 'Saugot'
            ]);
    }
}
