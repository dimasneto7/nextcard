<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CardVideo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'card_id',
        'font_id',
        'video_align',
        'video_title_text',
        'video_title_text_font_size',
        'video_title_text_color',
        'video_title_text_background_color',
        'video_description_text',
        'video_description_text_font_size',
        'video_description_text_color',
        'video_description_text_background_color',
        'video_cover_image_path',
        'video_url',
        'position'
    ];

    // Relationships

    public function card()
    {
        return $this->belongsTo(Card::class, 'card_id');
    }

    public function font()
    {
        return $this->belongsTo(Font::class, 'font_id');
    }
}
