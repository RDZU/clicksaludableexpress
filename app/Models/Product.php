<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use \DateTimeInterface;

class Product extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'products';

    const VISIBLE_HOME_SELECT = [
        '1' => 'Si',
        '0' => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STOCK_SELECT = [
        '1' => 'Disponible',
        '0' => 'No Disponible',
    ];



    public const PHOTO_MIN_FRONTAL_LINK_SELECT = [
        '1' => 'Vertical',
        '2' => 'Rectangular',
        '3' => 'Horizontal',
    ];


    protected $appends = [
        'photo',
        'photo_reverso',
        'photo_min_reverso',
        'photo_min_frontal',
    ];

    protected $fillable = [
        'name',
        'description',
        'marca_id',
        'tipo_presentacion',
        'slug',
        'envase',
        'cantidad',
        'largo',
        'ancho',
        'alto',
        'peso',
        'visible_home',
        'descripcion_home',
        'stock',
        'price',
        'image_frontal_link',
        'image_frontal_title',
        'image_frontal_alt',
        'image_reverso_link',
        'image_reverso_title',
        'image_reverso_alt',
        'photo_min_reverso_link',
        'photo_link_reverso_title',
        'photo_link_reverso_alt',
        'photo_min_frontal_link',
        'photo_link_frontal_title',
        'photo_link_frontal_alt',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function etiquetas()
    {
        return $this->belongsToMany(ProductTag::class);
    }

    public function getEtiquetas(){
        
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getPhotoReversoAttribute()
    {
        $file = $this->getMedia('photo_reverso')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getPhotoMinReversoAttribute()
    {
        $file = $this->getMedia('photo_min_reverso')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getPhotoMinFrontalAttribute()
    {
        $file = $this->getMedia('photo_min_frontal')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
public function getProductosDestacados(){
  //  $get_id= DB::table('products')->where('slug',$slug)->value('id');

    return (\DB::table('products')->where('visible_home',1));
}

}
