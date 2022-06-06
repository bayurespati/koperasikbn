<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        try {

            $data = array('name' => "Thanos");

            Mail::send(['text' => 'mail'], $data, function ($message) {
                $message->to('senyummarli@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
                $message->from('dimaswpratama.dev@gmail.com', 'Bayu Respati');
            });
            return response()->json('Success send email', 200);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
