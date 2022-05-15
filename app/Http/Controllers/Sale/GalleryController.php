<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\StoreGalleryRequest;
use App\Models\Sale\Sale;
use Inertia\Inertia;
use Inertia\Response;

class GalleryController extends Controller
{
    public function index(Sale $sale): Response
    {
        return self::renderInertia($sale->id);
    }

    public function store(Sale $sale, StoreGalleryRequest $storeGalleryRequest): Response
    {
        $sale->addMultipleMediaFromRequest(['medias'])->each(function ($fileAdder) {
            $fileAdder->toMediaCollection('car');
        });

        return CrashController::renderInertia($sale->id);
    }

    public static function renderInertia(int $saleId): Response
    {
        return Inertia::render('Car/Sale/Gallery', [
            'saleId' => $saleId
        ]);
    }
}
