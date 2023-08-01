<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pralogin
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $imageUrl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pralogin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pralogin extends Model
{
    use HasFactory;
    protected $guarded = [];
}
