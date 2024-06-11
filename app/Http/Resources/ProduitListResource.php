<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProduitListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //Request: quelque chose qui doit venir du front
        return [
            'CodePdt' => $this->CodePdt,
            'DesignPdt' => $this->DesignPdt,
            'ActifPdt' => $this->ActifPdt,
            'PrixAchat' => $this->PrixAchat,
            'PrixVente1' => $this->PrixVente1,
            'PrixVente2' => $this->PrixVente2
        ];

    }
}
