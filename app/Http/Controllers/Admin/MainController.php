<?php

namespace App\Http\Controllers\Admin;

use App\Answer;
use App\Cars;
use App\Event;
use App\Feedback;
use App\Http\Requests\EventValidation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MainController extends Controller
{
    protected $path ='admin.main';
    public function  __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $data=[];
        $data['rows']=User::select('id','firstname','lastname','username','address','phonenumber','email','image')
            ->get();
        return view($this->path.'.index',compact('data'));
    }

    public function cars()
    {
        $data =[];
        $data['rows'] =Cars::select('id','carimage','carname','cardescription','cartype','carprice','carusedfor','addedby','created_at','updated_at')->get();
    	return view($this->path.'.cars',compact('data'));
    }

    public function events()
    {
        return view($this->path.'.events');
    }



    public function storeEvent(EventValidation $request)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = mt_rand(0, 9999) . "_" . $file->getClientOriginalName();

            //uploading image name in folder
            $file->move('images', $image);
        }
        Event::create([
            'image' => $image,
            'eventsname' => $request->get('eventsname'),
            'eventsdescription' => $request->get('eventsdescription'),
            'eventslocation' => $request->get('eventslocation'),
            'eventsdatetime' => $request->get('eventsdatetime'),
        ]);

        $request->session()->flash('success_message', 'Events added successfully');
        return redirect()->route('admin.events');


    }
    public function viewEvent()
    {
        $data=[];
        $data['rows']=Event::select('id','image','eventsname','eventsdescription','eventslocation','eventsdatetime','created_at')
            ->orderby('updated_at')
            ->get();
        return view('admin.main.viewevents',compact('data'));
    }

    public function Feedbacks()
    {
        $data =[];
        $data['rows']=Feedback::select('feedbacks','addedby','created_at')->get();
        return view($this->path.'.feedbacks',compact('data'));

    }

    public function deleteEvent( Request $request, $id)
    {
        $data=Cars::find($id);
        $data->delete();

        $request->session()->flash('success_message', 'deleted successfully ');
        return view('admin.main.viewevents',compact('data',$id));
    }




}
