<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CarForm;
use App\Car;

class CarController extends Controller
{

    public function index(Car $car)
    {
        $cars = $car->sortable()->paginate(10);
        return view('test',compact('cars'));
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
    }

    public function getForm(?Car $car = null)
    {
        $car = $car ?: new Car();
        return $this->formBuilder->create(CarForm::class, [
            'model' => $car,
        ]);
    }

}
