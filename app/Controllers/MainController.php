<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{
    public function update($id = null)
    {
        $u = new MainModel();

        // $studentID = $this->request->getVar('studentID');
        // $fullname = $this->request->getVar('fullname');
        // $yearLevel = $this->request->getVar('yearLevel');
        // $program = $this->request->getVar('program');
       
        // $data = [
        //     'studentID' => $studentID,
        //     'fullname' => $fullname, 
        //     'yearLevel' => $yearLevel,
        //     'program' => $program, 
        // ];

        // $u->where('id', $id);
        // $u->update($data);




        // $data['u'] = $u->where('id', $id)->first();
        // return view('main', $data);
        // var_dump($r);
        // var_dump($data['r']);   
    }

    public function delete($id)
    {
        $d = new MainModel();
        $d->delete(['id'=>$id]);
        return redirect()->to('main');
    }
    public function save()
    {
        $main = new MainModel();
        $studentID = $this->request->getVar('studentID');
        $fullname = $this->request->getVar('fullname');
        $yearLevel = $this->request->getVar('yearLevel');
        $program = $this->request->getVar('program');

        $data = [
            'studentID' => $studentID,
            'fullname' => $fullname, 
            'yearLevel' => $yearLevel,
            'program' => $program, 
        ];

        $main->save($data);
        return redirect()->to('/main');
    }
    
    public function mainPage()
    {
        $r = new MainModel();
      
        $data['r'] = $r->findAll();
        return view('main', $data);
    }
    public function index()
    {
        //
    }

}
