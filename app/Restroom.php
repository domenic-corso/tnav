<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restroom extends Model
{
    public function photos() : HasMany {
        return $this->hasMany('App\RestroomPhoto');
    }
    
    public static function getValidationRules() : array {
        $textRegex = '/^[\w\s\,\d\']+$/';
        $descRegex = '/^[\w\s\,\d\'!]+$/';
        $latLngRegex = '/^-?\d+\.\d+$/';

        return [
            'rr_name' => 'required|max:255|min:5|regex:'.$textRegex,
            'rr_desc' => 'nullable|max:255|min:10|regex:'.$descRegex,
            'rr_lat' => 'required|max:50|regex:'.$latLngRegex,
            'rr_lng' => 'required|max:50|regex:'.$latLngRegex,
            'rr_floor' => 'nullable|max:20|regex:'.$textRegex,
            'rr_added_by' => 'nullable|max:70|min:2|regex:'.$textRegex,
            'rr_photos.*' => 'mimes:jpg,jpeg,png'
        ];
    }
    
    public static function getPhotoFileName($originalName) {
        /* Use crc32 hash for shorter name */
        return hash('crc32', $originalName.rand(0, 1000));
    }
    
}
