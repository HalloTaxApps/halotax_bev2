<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Iklan
 *
 * @property int $id
 * @property string $mitra
 * @property string $judul
 * @property string $imageUrl1
 * @property string|null $imageUrl2
 * @property string|null $imageUrl3
 * @property string|null $imageUrl4
 * @property string|null $imageUrl5
 * @property string $deskripsi
 * @property string $info
 * @property string $syarat
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereImageUrl1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereImageUrl2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereImageUrl3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereImageUrl4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereImageUrl5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereMitra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereSyarat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan whereUrl($value)
 * @mixin \Eloquent
 */
class Iklan extends Model
{
    use HasFactory;
    protected $guarded = [];
}
