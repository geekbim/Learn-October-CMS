<?php namespace AbimanyuGatyaDhaneswara\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Flash;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form'
        ];
    }

    public function onSend()
    {

        $data = post();

        $rules = [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:users'
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            // return Redirect::back()->withErrors($validator);
            throw new ValidationException($validator);
        } else {
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];
            Mail::send('abimanyugatyadhaneswara.contact::mail.message', $vars, function($message) {
                $message->to('manyuabim9@gmail.com', 'Abimanyu Gatya Dhaneswara');
                $message->subject('This is email from contact form');
            });
        }
        Flash::success('Pesan Telah Terkirim!');
    }
}
