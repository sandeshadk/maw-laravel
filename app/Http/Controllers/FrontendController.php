<?php
namespace App\Http\Controllers;
use App\Mail\ApplyNotifiable;
use App\Mail\HireNotifiable;
use App\Mail\InquiryNotifiable;
use App\Mail\PartnerNotifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Page;
use App\Models\News;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Team;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Post;
use App\Models\Download;
use App\Models\Program;
use App\Models\Form;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Traininglocation;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use App\Models\Image;
use App\Models\Menu;


class FrontendController extends Controller
{
	public function homepage()
	{
		$program= Service::where('is_published',1)->limit(3)->get();
		$history = Page::where('title','History')->where('is_featured',1)->first();
		$post =  Post::where('is_published',1)->get();
		$slider = Slider::where('is_published', 1)->get();
        $setting = Setting::where('slug', '=', 'logo')->get();
        $client = Photo::where('view','client')->get();
        $popuphome = Photo::where('view', 'popup image')->where('is_published', 1)->orderBy('id','DESC')->get();
		return view('frontend.home',compact('setting','popuphome','slider','post','history','program','client'));
	}

	public function history()
	{
		$history = Page::where('title','History')->first();
		return view('frontend.about.history',compact('history'));

	}

	public function hiregraduates()
	{
		$page = Page:: where('title','Hire Graduates')->first();
		$hireform = Form::where('view','hire-graduates')->get();
		return view ('frontend.employers.hire',compact('page','hireform'));

	}

	public function overview()
	{

		$text =Page::where('title','Overview')->first();
		$logo =Photo::where('view','employers')->get();
		return view('frontend.employers.empoverview',compact('text','logo'));

	}


	public function document()
	{
		$document =Download::where('is_published','1')->get();
		return view('frontend.brochure.document',compact('document'));
	}

	public function partnerwithacademy()
	{
		$page =Page::where('slug','partner-with-academy')->first();
		return view ('frontend.employers.partnerwithacademy',compact('page'));

	}

	public function partners()
	{
		$logogovernment =Photo::where('view','government partner')->get();
		$logoimplement = Photo::where('view','implementing partner')->get();
		$logofund = Photo::where('view','funding partner')->get();
		return view('frontend.partners.partner',compact('logofund','logoimplement','logogovernment'));

	}


	public function album()
    {
        $albums = Album::with('Photos')->get();
        $gallery = Photo::where('view', 'gallery')->get();
        return view('frontend.album.album', compact('gallery', 'albums'));
    }

    public function gallery($id)
    {
        $album = Album::with('Photos')->find($id);
        $albums = Album::with('Photos')->get();
        return view('frontend.album.gallery', compact( 'album', 'albums'));
    }



	public function leadership()
	{
		$leadership = Team::where('view','leadership')->get();

		return view('frontend.about.leadership',compact('leadership'));
	}


	public function team()
	{
		$team = Team::where('view','team')->get();

		return view('frontend.about.team',compact('team'));
	}

	public function industrial()
	{
		$industrial = Page::where('view','industrial-advisory')->first();
		$teamindustrial = Team::where('view','industrial-advisory')->get();
		$indlogo = Photo::where('view','industrial-advisory')->get();

		return view('frontend.about.industrial',compact('teamindustrial','industrial','indlogo'));
	}

	public function technical()
	{
		$technical = Page::where('view','technical-advisory')->first();
		$teamtechnical = Team::where('view','technical-advisory')->get();

		return view('frontend.about.technical',compact('teamtechnical','technical'));
	}
	public function messageofgreeting()
	{
		$messageofmd =Page::where('slug','message-from-md')->first();
		$messageofceo =Page::where('slug','message-from-ceo')->first();
		return view('frontend.about.messageofgreetings',compact('messageofmd','messageofceo'));
	}


	public function programs($slug=null)
	{
		if($slug){

            $service = Service::where('slug', $slug)->first();
            $services = Service::where('is_published', 1)->limit(4)->whereNotIn('id',[$service->id])->get();
            return view('frontend.programs.program-detail',compact('services','service'));
		}
		else
		{
			$services = Service::where('is_published', 1)->get();
			return view('frontend.programs.program',compact('services'));
		}

	}
	public function trainings($brand=null,$slug=null)
	{

		if($brand){


			if ($slug)
				{
					$brands =  Brand::where('brand', $brand)->first();
		            $service = Service::where('slug', $slug)->where('brand_id',[$brands->id])->first();
		            $services = Service::where('is_published', 1)->whereIn('brand_id',[$brands->id])->limit(4)->whereNotIn('id',[$service->id])->get();
		            return view('frontend.service.service-detail',compact('services','service','brands'));
				}

				else{
					$brands =  Brand::where('brand', $brand)->first();
					$servicelist = Service::where('is_published', 1)->where('brand_id',[$brands->id])->get();
					return view('frontend.service.service-list',compact('servicelist','brands'));


				}


		}

		else
		{
			return view('frontend.partials.errors');


		}


	}
	public function news($slug=null)
	{
		if($slug){

            $news = News::where('slug', $slug)->first();
            $newses = News::where('is_published', 1)->limit(4)->whereNotIn('id',[$news->id])->get();
            return view('frontend.news.news-detail',compact('news','newses'));
		}
		else
		{
			$newses = News::where('is_published', 1)->get();
			return view('frontend.news.news-list',compact('newses'));
		}

	}

	public function employers()
	{
		$employer =Page::where('view','employerstestimonials')->get();
		return view ('frontend.testimonial.employers',compact('employer'));

	}

	public function learners()
	{
		$learner = Page::where('view','learnerstestimonials')->get();
		return view ('frontend.testimonial.learners',compact('learner'));

	}
	public function success()
	{
		$success = Page::where('view','success-story')->get();
		return view ('frontend.testimonial.success',compact('success'));

	}

	public function locations()
	{
        $training = Traininglocation::where('is_published',1)->get();

		return view('frontend.about.traininglocation',compact('training'));
	}

    public function inquiry(Request $request)
    {
        $mailParam = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('masd@mawnepal.com')->send(new InquiryNotifiable($mailParam));
        return redirect()->back();
    }

    public function apply(Request $request)
    {
        $mailParam = [
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'course' => $request->course,
            'location' => $request->location
        ];

        Mail::to('masd@mawnepal.com')->send(new ApplyNotifiable($mailParam));
        return redirect()->back();

    }

    public function hire(Request $request)
    {
        $mailParam = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'businessName' => $request->businessName,
            'businessAddress' => $request->businessAddress,
            'email' => $request->email,
            'phone' => $request->phone,
            'graduatesNumber' => $request->graduatesNumber,
            'graduate' => $request->graduate
        ];

        Mail::to('masd@mawnepal.com')->send(new HireNotifiable($mailParam));
        return redirect()->back();

    }

    public function partner(Request $request)
    {
        $mailParam = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'businessName' => $request->businessName,
            'businessAddress' => $request->businessAddress,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to('masd@mawnepal.com')->send(new PartnerNotifiable($mailParam));
        return redirect()->back();

    }


	public function contact()
	{
        $setting = Setting::where('slug', '=', 'logo')->first();

		return view('frontend.contact.contact',compact('setting'));
	}

 public function page($slug = null)
    {
        if ($slug) {
            $page = Page::where('slug', '=', $slug)->where('is_published', 1)->first();
            if ($page) {

                    return view('frontend.default', compact('page'));
                }
            } else {
                return view('frontend.partials.errors');
            }


    }


}





 ?>
