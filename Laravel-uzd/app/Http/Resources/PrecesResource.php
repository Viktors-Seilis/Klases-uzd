<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class PrecesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'nosaukums' => $this->nosaukums,
          'apraksts' => $this->apraksts,
          'cena' => $this->cena,
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
