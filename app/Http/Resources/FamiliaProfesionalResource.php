<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FamiliaProfesionalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         $familiaProfesional = parent::toArray($request);
         $familiaProfesional['ciclos'] = CicloResource::collection($this->ciclos);
         unset($fammiliaProfesional['created_at'], $fammiliaProfesional['updated_at']);
         return $familiaProfesional;
       
    }
}
