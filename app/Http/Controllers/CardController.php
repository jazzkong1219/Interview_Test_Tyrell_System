<?php

namespace App\Http\Controllers;

use Throwable;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $ouput = [];

        return view('home', compact('ouput'));
    }

    public function assignCards(Request $request)
    {
        session()->forget('error');

        try {
            $request->validate([
                'number_people' => 'required|numeric|digits_between:1,52'
            ]);
    
            $hands = array();
    
            $cardsOnHand = 52 / $request->number_people;
    
            if ($request->number_people * $cardsOnHand > 52) return view('home', compact('hands'));
            
            $temp = array_slice ($this->cards(), 0, $request->number_people * $cardsOnHand);
            $hands = array_chunk($temp, $cardsOnHand);
            $ouput = array_slice($hands, 0 , $request->number_people);

        } catch (Throwable $e) {
            session()->flash('error', $e->getMessage());
        }

        return view('home', compact('ouput'));
    }

    protected function cards(): array
    {
        $suits = array('C', 'D', 'H', 'S');
        $cards = array('A', 2, 3, 4, 5, 6, 7, 8, 9, 'X', 'J', 'Q', 'K');

        $deck = $this->arrayShuffle(range(0, 51));

        while (!is_null($draw = array_pop($deck))) {
            $values[] = $suits[$draw % 4] . '-' . $cards[$draw / 4];
        }

        return $values;
    }

    protected function arrayShuffle($array): array 
    {
        $i = count($array);
    
        while(--$i) {
            $j = mt_rand(0, $i);
    
            if ($i != $j) {
                // swap elements
                $tmp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $tmp;
            }
        }
    
        return $array;
    }
}
