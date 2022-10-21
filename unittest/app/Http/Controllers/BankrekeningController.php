<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bankrekening;

class BankrekeningController extends Controller
{
    public function index()
    {
        $account = new Bankrekening(0.00);
        session(['Saldo' => $account->GetSaldo()]);
        session(['Bevroren' => false]);
        return view('bankrekening',
            array('saldo'=>$account->GetSaldo(), 'bevroren'=>$account->frozen));
    }
    public function bevroren()
    {
        $account = new Bankrekening(session('Saldo'));
        $account->frozen = !session('Bevroren');
        session(['Saldo' => $account->GetSaldo()]);
        session(['Bevroren' => $account->frozen]);
        return view('bankrekening',
            array('saldo'=>$account->GetSaldo(), 'bevroren'=>$account->frozen));
    }
    public function storten(Request $request)
    {
        $account = new Bankrekening(session('Saldo'));
        $account->frozen = session('Bevroren');
        $amount = $request->input('amount');
        $account->Storten($amount);
        session(['Saldo' => $account->GetSaldo()]);
        session(['Bevroren' => $account->frozen]);
        return view('bankrekening',
            array('saldo'=>$account->GetSaldo(), 'bevroren'=>$account->frozen));
    }
    public function opnemen(Request $request)
    {
        $account = new Bankrekening(session('Saldo'));
        $account->frozen = session('Bevroren');
        $amount = $request->input('amount');
        $account->Opnemen($amount);
        session(['Saldo' => $account->GetSaldo()]);
        session(['Bevroren' => $account->frozen]);
        return view('bankrekening',
            array('saldo'=>$account->GetSaldo(), 'bevroren'=>$account->frozen));
    }
}
