<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyBreweryUpdate;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreweriesController extends Controller
{

    public function details($id)
    {       
            $user = Auth::user();
            if ($user && $user->is_Admin){
                $brewery = Brewery::find($id);
            } else {
                $brewery = Brewery::where('visible' , true)
                ->where('id', $id)->first();
            }

            if ($brewery == null){
                return "Birreria non trovata";
            }
            return view('brewery.details',compact(('brewery')));

    }


    public function update($id, NotifyBreweryUpdate $request)
    {
        $brewery = Brewery::find($id);

        $img = $request->file('img');
        if ($img != null){
            $img = $img->store('public/img');
            $brewery->img = $img;
        }

        $brewery->name = $request->input('name');;
        $brewery->description = $request->input('description');
        $brewery->lat = $request ->input('lat');
        $brewery->lon = $request ->input('lon');
        $brewery->save();

        return redirect(route('brewery.details', ['id' => $brewery->id]));
    }


    public function destroy($id)
    {
        $user = Auth::user();
        if ($user && $user->is_Admin){
            Brewery::destroy($id);
        }

        return redirect('breweries');
    }


    public function approved($id)
    {   
        $user = Auth::user();
        if($user && $user->is_Admin){
            $brewery = Brewery::find($id);
            $brewery->visible = true;
            $brewery->save();
        }

        return redirect(route('brewery.breweries'));
    }
    

    public function addComment($id, Request $request)
    {   
        $user = Auth::user();
        $brewery = Brewery::find($id);

        $brewery->comments()->create([
            'comment'=>$request->input('comment'),
            'user_id'=>$user->id
        ]);

        return redirect(route('brewery.details', ['id'=>$id]));
    }


}
