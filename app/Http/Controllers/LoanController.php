<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
    
public function index()
{
    $loans = Loan::all();
    return response()->json($loans);
}

public function store(Request $request)
{
return Loan::create($request->all());
}

public function show($id)
{
return Loan::findOrFail($id);
}

public function update(Request $request, $id)
{
$loan = Loan::findOrFail($id);
$loan->update($request->all());
return $loan;
}

public function destroy($id)
{
$loan = Loan::findOrFail($id);
$loan->delete();
return 204;
}
}
