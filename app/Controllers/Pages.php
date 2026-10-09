<?php

namespace App\Controllers;
use App\Models\TaskModel;
use App\Models\UserModel;
class Pages extends BaseController
{
    public function index(){
        $taskModel = new TaskModel();
        $data = [
            'pageTitle' => 'Tasks for Today',
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('id', 'ASC')
                ->findAll()
        ];
        return view('welcome_page', $data);
    }

    public function tasks(){
        $taskModel = new TaskModel();
        $data = [
            'pageTitle' => 'All Tasks',
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];
        return view('tasks', $data);
    }

    public function profile(){
        $userModel = new UserModel();

        $data = [
            'pageTitle' => 'User Profile',
            'user' => $userModel->first()
        ];
        return view('profile', $data);
    }

    public function about(){
        $data = [
            'pageTitle' => 'About',
            'developer' => 'Renz Carlo Mejia'
        ];
        return view('about', $data);
    }
}