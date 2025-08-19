<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('home');
});

/*
Route::get('/home', function () {
    return view('/home');
});*/

Route::post('/enviar-contato', function (Request $request) {
    $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'mensagem' => 'required',
    ]);

    $data = [
        'nome' => $request->input('nome'),
        'email' => $request->input('email'),
        'telefone' => $request->input('telefone'),
        'mensagem' => $request->input('mensagem')
    ];

    $fromEmail = !empty($data['email']) ? $data['email'] : 'julianocardoso2611@gmail.com';
    $fromName = !empty($data['nome']) ? $data['nome'] : 'Anônimo';

    Mail::raw(view('emails.contato', ['data' => $data])->render(), function ($message) use ($fromEmail, $fromName) {
        $message->to('julianocardoso2611@gmail.com', 'Gestão de Rodagem')
            ->subject('Novo Contato do Site');
        $message->from($fromEmail, $fromName);
    });

    return back()->with('success', 'Mensagem enviada com sucesso! Em breve entraremos em contato.');
});
