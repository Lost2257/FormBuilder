<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CarForm;
use App\Car;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all()
        ->sortBy('Marke');
        return view('test',['cars'=>$cars]);

    }

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    public function create()
    {
        $form = $this->getForm();
        return view('car.create', compact('form'));
    }

    public function store()
    {
        $car = new Car();
        $form = $this->getForm();
        $form->redirectIfNotValid();
        $form->getModel()->save();
        return redirect()->route('cars.index');
        // if (!$form->isValid()) {
        //     return redirect()->back()->withErrors($form->getErrors())->withInput();
        // }
    }

    public function getForm(?Car $car = null)
    {
        $car = $car ?: new Car();
        return $this->formBuilder->create(CarForm::class, [
            'model' => $car,
        ]);
    }

}
