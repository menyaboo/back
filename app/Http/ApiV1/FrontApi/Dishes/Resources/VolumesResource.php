<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Resources;

use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\Volume;
use App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource\Pages\CreateVolume;
use App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource\Pages\EditVolume;
use App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource\Pages\ListVolumes;
use App\Http\ApiV1\FrontApi\Support\Resources\BaseJsonResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/** @mixin Volume */
class VolumesResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cost' => $this->cost,
            'meaning' => $this->meaning,
        ];
    }
}
