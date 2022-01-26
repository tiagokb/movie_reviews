<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    protected $database;

    public function __construct()
    {
        $this->database = app('firebase.database');
    }

    public function setReference()
    {
        $this->database->getReference('todos')
            ->set([
                'task' => 'Example Task',
                'is_done' => false
            ]);

        $this->database->getReference('todos/tasks')->set('New Task Name');
    }
}
