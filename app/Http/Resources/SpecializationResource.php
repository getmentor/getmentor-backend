<?php

namespace App\Http\Resources;

use App\Models\GroupSpecializations;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecializationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sponsor' => $this->sponsor,
            'name' => $this->name,
            'group_specializations_id' => $this->getGroupName(),       ];
    }
}
