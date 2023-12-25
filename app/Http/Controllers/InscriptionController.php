<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\PdfFile;

class InscriptionController extends Controller
{

    function choose(Request $request) {
        $request->validate([
            "typeSaisir"=>"required",
        ]);
        session(['choose' => $request->typeSaisir]);
        return redirect("inscription");
    }

    public function inscription() {
        return view("inscription");
    }
    
    public function inscriptionInfo(Request $request) {
        $validation = $request->validate([
            "nom" => "required|max:15|min:5",
            "prenom" => "required",
            "dateDeNaissance" => "required|date|before:2005-00-00",
            "addresse" => "required",
            "telephone" => "required",
            "diplome" => "required",
            "email" => ["required", "email:strict"],
        ], [
            "nom.required" => "ce champ et obligatoire",
        ]);

        return $request;
    }

    public function inscriptionCv(Request $request) {
        $request->validate([
            "cv" => ['required', new PdfFile],
        ], [
            "cv.required" => "ce champ est obligatoire",
            "cv.mimes" => "le format de fichier doit etre pdf"
        ]);

        if($request->hasFile("cv")) {
            $cv = $request->file("cv");
            $cvName = time() . "." . $cv->getClientOriginalExtension();
            $cv->move(public_path("Cvs"), $cvName);
        };

        return $request;
    }
}
