<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:100',
            'description'    => 'string',
            'thumb'   => 'required|string|max:300',
            'price'     => 'required|numeric',
            'series'     => 'required|string|max:50',
            'sale_date' => 'date',
            'type'   => 'string',
        ]);
        $formData = $request->all();
        // dump($request);
        // dd($formData);

        //Opzione 1
        // $comic = new comic();
        // $comic->title = $formData['title'];
        // $comic->price = $formData['price'];
        // $comic->description = $formData['description'];
        // $comic->thumb = $formData['thumb'];
        // $comic->sale_date = $formData['sale_date'];
        // $comic->series = $formData['series'];
        // $comic->type = $formData['type'];
        // // TODO: validare i dati prima di inviarli al database
        // $comic->save();

        //Opzione 2 (se abbiamo definito $fillable nel model)
        $comic = comic::create($formData);

        // return redirect()->route('comics.index');
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $comics = Comic::all();

        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// ----------------------------------------------------------


// {
//     // TODO: personalizzare la pagina 404

//     public function index()
//     {
//         $houses = House::all();
//         // dump($houses);
//         // TODO: implementare la paginazione dei risultati
//         return view('admin.houses.index', compact('houses'));
//     }


//     public function create()
//     {
//         return view('admin.houses.create');
//     }


//     public function store(Request $request)
//     {
//         $request->validate([
//             'city'      => 'required|string|max:50',
//             'price'     => 'numeric',
//             'street'    => 'required|string|max:100',
//             'is_rent'   => 'boolean',
//             'free_from' => 'date',
//             'rooms'     => 'integer|max:20',
//             'surface'   => 'numeric',
//         ]);
//         $formData = $request->all();
//         // dump($request);
//         // dd($formData);

//         //Opzione 1
//         // $house = new House();
//         // $house->city = $formData['city'];
//         // $house->price = $formData['price'];
//         // $house->street = $formData['street'];
//         // $house->is_rent = $formData['is_rent'];
//         // $house->free_from = $formData['free_from'];
//         // $house->rooms = $formData['rooms'];
//         // $house->surface = $formData['surface'];
//         // // TODO: validare i dati prima di inviarli al database
//         // $house->save();

//         //Opzione 2 (se abbiamo definito $fillable nel model)
//         $house = House::create($formData);

//         // return redirect()->route('houses.index');
//         return redirect()->route('houses.show', ['house' => $house]);
//     }


//     //SENZA DEPENDENCY INJECTION
//     // public function show($id)
//     // {
//     //     // $house = House::find($id);
//     //     // if (!$house) abort(404);

//     //     $house = House::findOrFail($id);

//     //     return view('admin.houses.show', compact('house'));
//     // }
//     //CON DEPENDENCY INJECTION
//     public function show(House $house)
//     {
//         // dump($house);
//         return view('admin.houses.show', compact('house'));
//     }


//     public function edit(House $house)
//     {
//         return view('admin.houses.edit', compact('house'));
//     }


//     public function update(Request $request, House $house)
//     {
//         $formData = $request->all();
//         $house->update($formData); //(se abbiamo definito $fillable nel model)

//         return redirect()->route('houses.show', ['house' => $house]);
//     }


//     public function destroy(House $house)
//     {
//         // TODO: inplement soft deleting
//         $house->delete();

//         return redirect()->route('houses.index');
//     }
// }