<?php

namespace App\Http\Controllers\User;
use App\Answer;
use App\Booking;
use App\Cars;
use App\Event;
use App\Feedback;
use App\Http\Requests\UpdateAccountValidation;
use App\User;
use App\Http\Requests\AnswerValidation;
use App\Http\Requests\BookingValidation;
use App\Http\Requests\Car\AddCarValidation;
use App\Http\Requests\FeedbackValidation;
use App\Http\Requests\QuestionValidation;
use App\Notifications\CarNotification;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function addCar()
    {
        return view('user.addCar');
    }

    public function feedback()
    {
        return view('user.feedback');
    }
    public function storeFeedback(FeedbackValidation $request)
    {
        $user = Auth::user()->email;
        Feedback::create([
            'feedbacks' => $request->get('feedbacks'),
            'addedby' => $user,
        ]);
        $request->session()->flash('success_message', 'Thankyou for your feedback :)');
        return redirect()->route('user.feedback');
    }
    public function storeCar(AddCarValidation $request)
    {
        $user = Auth::user()->email;
        $image = null;
        if ($request->hasFile('carimage')) {
            $file = $request->file('carimage');
            $image = mt_rand(0, 9999) . "_" . $file->getClientOriginalName();

            //uploading image name in folder
            $file->move('images', $image);
        }
        Cars::create([
            'carimage' => $image,
            'carname' => $request->get('carname'),
            'cartype' => $request->get('cartype'),
            'cardescription' => $request->get('cardescription'),
            'carprice' => $request->get('carprice'),
            'carusedfor' => $request->get('carusedfor'),
            'addedby' => $user,


        ]);

        $request->session()->flash('success_message', 'Car added  Successfully');
        return redirect()->route('user.index.home');
    }

    public function carList()
    {
        $data = [];
        $data['rows'] =Cars::orderBy('id','desc')
            ->join('users','cars.addedby','=','users.email')
            ->select('cars.id', 'cars.carimage', 'cars.carname', 'cars.cartype', 'cars.cardescription',
                'cars.carprice',
                'cars.carusedfor', 'cars.addedby','cars.created_at','users.firstname','users.lastname','users.address','users.phonenumber')
            ->paginate(3);

        return view('user.index', compact('data'));
    }

    public function showMyCar()
    {
        $data =[];
        $data['rows'] =Cars::select('id','carimage','carname','cardescription','cartype','carprice',
            'carusedfor','addedby','created_at','updated_at')
            ->where('addedby','=',Auth::user()->email)
            ->orderby('id','desc')
            ->get();
        return view('user.cars',compact('data'));
    }

    public  function editCar($id){
        $data=Cars::find($id);
        return view('user.editcars',['data'=>$data]);
    }

    public function updateCar(AddCarValidation $request,$id)
    {
        $data=Cars::find($id);
        $user = Auth::user()->email;
        if ($request->hasFile('carimage')) {
            $file = $request->file('carimage');
            $image = mt_rand(0, 9999) . "_" . $file->getClientOriginalName();

            //uploading image name in folder
            $file->move('images', $image);
            if($data->carimage)
            {
                unlink('images/'.$data->carimage);
            }
            $data->carimage=$image;

        }
        $data->update([
            'carimage' => $image,
            'carname' => $request->get('carname'),
            'cartype' => $request->get('cartype'),
            'cardescription' => $request->get('cardescription'),
            'carprice' => $request->get('carprice'),
            'carusedfor' => $request->get('carusedfor'),
            'addedby' => $user,
        ]);

        $request->session()->flash('success_message', 'Car updated  Successfully');
        return redirect()->route('user.mycar.edit',$id);
    }

    public function carDetail($id)
    {
        $data=Cars::find($id);
        return view('user.cardetail',['data'=>$data]);
    }

    public  function deleteCar(Request $request, $id) {
        $data=Cars::find($id);
        $data->status=0;
        $data->update([
            'status'=>$data->status,
            ]);
        $request->session()->flash('success_message', 'deleted successfully ');
        return redirect()->route('user.index.home');

    }

    public function events()
    {
        $data=[];
        $data['rows']=Event::select('id','image','eventsname','eventsdescription','eventslocation','eventsdatetime','created_at')
            ->orderby('updated_at')
            ->paginate(1);
        return view('user.events',compact('data'));
    }

    public function onlineForum()

    {
        return view('user.onlineforum');
    }

    public function askQuestion(QuestionValidation $request)
    {
        $user=Auth::user()->email;
        Question::create([
            'questiondescription'=>$request->get('questiondescription'),
            'addedby' => $user,
        ]);
        $request->session()->flash('success_message', 'Question posted successfully');
        return redirect()->route('user.onlineforum');

    }

    public function viewQuestion()
    {
        $data=[];
        $data['rows']=Question::select('id','questiondescription','addedby','created_at')
                                ->orderby('id','desc')
                                ->paginate(5);

        return view('user.onlineforum',compact('data'));

    }

    public function answer($id)
    {
        $data=Question::find($id);
        return view('user.answer',compact('data'));
    }

    public function giveAnswer(AnswerValidation $request)
    {
        $user=Auth::user()->email;
       //$qid=Question::find($id);
        Answer::create([
            'answerdescription'=>$request->get('answerdescription'),
            'addedby' => $user,
            'question_id'=>$request->get('qid'),
        ]);
        $request->session()->flash('success_message', 'Answer posted successfully');
        return redirect()->route('user.onlineforum');

    }
    public function viewReply($id)
    {
        $answers =Answer::orderby('answers.id','desc')
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->select('answers.id','questions.questiondescription','questions.addedby','questions.created_at',
                'answers.id','answers.answerdescription',
                'answers.addedby','answers.created_at')
            ->where('questions.id','=',$id)
            ->get();

        $questions=Question::orderby('questions.id','desc')
            ->select('questions.id','questions.questiondescription','questions.addedby','questions.created_at')
            ->where('questions.id','=',$id)
             ->get();

        return view('user.viewreply',['answers'=>$answers,'questions'=>$questions]);

    }
    public function buyForm($id)
    {
        $data=Cars::find($id);
        return view('user.carbooking',['data'=>$data]);
    }

    public function buyCar(BookingValidation $request ,$id )
    {
        $data=Cars::find($id);
        $user=Auth::user()->email;
        Booking::create([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'addedby' => $user,
            'phonenumber'=>$request->get('phonenumber'),
            'address'=>$request->get('address'),
            'carname'=>$request->get('carname'),
            'carprice'=>$request->get('carprice'),
            'cardescription'=>$request->get('cardescription'),
        ]);
        $data1=Cars::find($id);
        $data1->notify(new CarNotification);
        $request->session()->flash('success_message', 'Car Purchased Successfully');
        return view('user.carbooking',['data'=>$data]);
    }

    public function search(Request $request)
    {
        $car=$request->get('search');
        $option1=$request->get('option1');
        if($option1=='Name')
        {

            $data =[];
            $data['rows'] =Cars::select('id','carimage','carname','cardescription','cartype','carprice',
                'carusedfor','addedby','created_at','updated_at')
                //->where('addedby','<>',Auth::user()->email)
                ->where('cars.carname','like','%'.$car.'%')
                ->orderby('id','asc')
                ->get();

            return view('user.search',compact('data'));
        }

        if($option1=='Price')
        {

            $data =[];
            $data['rows'] =Cars::select('id','carimage','carname','cardescription','cartype','carprice',
                'carusedfor','addedby','created_at','updated_at')
                ->where('cars.carprice','like','%'.$car.'%')
                ->orderby('id','asc')
                ->get();

            return view('user.search',compact('data'));
        }

    }

    public function  account()
    {
        $data =User::find(Auth::user()->id);
        return view('user.account',compact('data'));
    }

    public function updateAccount(UpdateAccountValidation $request)
    {
        $data =User::find(Auth::user()->id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = mt_rand(0, 9999) . "_" . $file->getClientOriginalName();

            //uploading image name in folder
            $file->move('images', $image);
            if($data->image)
            {
                unlink('images/'.$data->image);
            }
            $data->image=$image;

            $data->update([
                'firstname'=>$request->get('firstname'),
                'lastname'=>$request->get('lastname'),
                'username'=>$request->get('username'),
                'address'=>$request->get('address'),
                'phonenumber'=>$request->get('phonenumber'),
                'email'=>$request->get('email'),
                'password'=>bcrypt($request->get('password')),

                'image'=>$data->image,

            ]);
            if(!$data)
            {
                $request->session()->flash('success_message', 'Account Update Failed');
            }
            $request->session()->flash('success_message', 'Account Update Successfully');
            return redirect()->route('user.accountsetting');

        }

    }

    public function  aboutus()
    {
        return view('user.aboutus');

    }
}
