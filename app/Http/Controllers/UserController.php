<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Models\Blog;
use App\Models\About;
use App\Models\Translate;
use App\Models\TermsCondition;
use App\Models\PrivacyPolicy;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class UserController extends Controller
{

    public function index()
    {
        $blogs = new Blog();
        $posts = $blogs->limit(3)->orderBy('created_at', 'desc')->get();
        $translate = Translate::where('translate_type', 'english to bangla translator')->first();
        return view('index', compact('posts', 'translate'));
    }

    public function english_to_bangla()
    {
        $translate = Translate::where('translate_type', 'english to bangla translator')->first();
        return view('users.english_to_bangla', compact('translate'));
    }

    public function bangla_to_english()
    {
        $translate = Translate::where('translate_type', 'bangla to english translator')->first();
        return view('users.bangla_to_english', compact('translate'));
    }

    public function english_to_arabic()
    {
        $translate = Translate::where('translate_type', 'english to arabic translator')->first();
        return view('users.english_to_arabic', compact('translate'));
    }

    public function arabic_to_english()
    {
        $translate = Translate::where('translate_type', 'arabic to english translator')->first();
        return view('users.arabic_to_english', compact('translate'));
    }

    public function english_to_spanish()
    {
        $translate = Translate::where('translate_type', 'english to spanish translator')->first();
        return view('users.english_to_spanish', compact('translate'));
    }

    public function spanish_to_english()
    {
        $translate = Translate::where('translate_type', 'spanish to english translator')->first();
        return view('users.spanish_to_english', compact('translate'));
    }

    public function english_to_hindi()
    {
        $translate = Translate::where('translate_type', 'english to hindi translator')->first();
        return view('users.english_to_hindi', compact('translate'));
    }

    public function hindi_to_english()
    {
        $translate = Translate::where('translate_type', 'hindi to english translator')->first();
        return view('users.hindi_to_english', compact('translate'));
    }




    // Translate Language Function
    public function translate(Request $request)
    {

        if ($request->ajax()) {
            // $tr = new GoogleTranslate(); // Translates into English
            // $output = $tr->translate($request->source, $request->traget, $request->input_data);
            $output = GoogleTranslate::trans($request->input_data, $request->target, $request->source);
            return Response($output);
        }
    }


    public function blogs()
    {
        $blogs = new Blog();
        $posts = $blogs->orderBy('created_at', 'desc')->simplePaginate(10);
        return view('users.blogs', compact('posts'));
    }

    public function single($id)
    {
        $single_post = Blog::find($id);
        return view('users.single', compact('single_post'));
    }

    public function about()
    {
        $about = About::first();
        return view('users.about', compact('about'));
    }

    public function contact()
    {

        return view('users.contact');
    }

    public function terms_condition()
    {
        $termsCondition = TermsCondition::first();
        return view('users.terms-condition', compact('termsCondition'));
    }

    public function privacy_policy()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('users.privacy-policy', compact('privacyPolicy'));
    }

    public function sendmail(Request $request)
    {

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 1;   //Enable verbose debug output
            $mail->isSMTP();   //Send using SMTP
            $mail->Mailer = 'smtp';
            $mail->Host       = 'smtp.googlemail.com';   //Set the SMTP server to send through
            $mail->SMTPAuth   = true;   //Enable SMTP authentication
            $mail->Username   = 'tarikulislamakash@gmail.com';   //SMTP username
            $mail->Password   = 'odcbwxzpbngaittm';   //SMTP password
            $mail->SMTPSecure = 'ssl';   //Enable implicit TLS encryption
            $mail->Port       = 465;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($request->email);
            $mail->addAddress('tarikulislamakash@gmail.com');

            //Content
            $mail->isHTML(true);   //Set email format to HTML
            $mail->Subject = 'Contact Info';
            $mail->Body    = "<b>Title</b> : " . $request->title . "<br><b>Message</b> : " . $request->content;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->send();
            return redirect()->route('contact')->with("mail_success", "Email Send Successfully.");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
