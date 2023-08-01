<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Edukasi
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $imageUrl
 * @property string $materi
 * @property string $konten
 * @property string $tipe
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereKonten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereMateri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereTipe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edukasi whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Edukasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $nullable = [
        'imageUrl2',
        'imageUrl3',
        'imageUrl4',
        'imageUrl5',
    ];
}
