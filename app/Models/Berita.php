<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Berita
 *
 * @property int $id
 * @property string $mitra
 * @property string $judul
 * @property string $imageUrl
 * @property string $deskripsi
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Berita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Berita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Berita query()
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereMitra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereUrl($value)
 * @mixin \Eloquent
 */
class Berita extends Model
{
    use HasFactory;
    protected $guarded = [];
}
