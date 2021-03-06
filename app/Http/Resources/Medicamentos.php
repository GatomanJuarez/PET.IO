<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Medicamentos extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'nombre' => $this->nombre,
            'cantidad' => $this->cantidad,
            'aplicacion' => $this->aplicacion,
            'fabricante' => $this->fabricante,
            'existencia' => $this->existencia
        ];
    }
}
