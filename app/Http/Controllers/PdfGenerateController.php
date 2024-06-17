<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfGenerateController extends Controller
{
    public function generatePDF(int $id): \Illuminate\Http\Response
    {
        $game = Game::query()->findOrFail($id);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdf', compact('game'));
        return $pdf->stream($game->title . '.pdf');
    }
}
