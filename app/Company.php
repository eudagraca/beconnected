<?php
namespace App;
use App\Http\Traits\Hashidable;
use Illuminate\Database\Eloquent\Model;
class Company extends Model
{

/*     use Hashidable;
    protected $fillable = [
        'company_name', 'email', 'phone', 'alternative_phone', 'classification',
        'about_company', 'main_services', 'address', 'province', 'district',
        'license', 'segment_area', 'logo', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    } */
  use Hashidable;
  protected $fillable = [
      'company_name', 'email', 'phone', 'alternative_phone', 'classification',
      'about_company', 'main_services', 'address',
      'license', 'segment_area', 'user_id', 'logo', 'banner','distrito_id', 'provincia_id'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function search($filter = null, $Provincia_id = null, $distrito_id = null )
  {
      $results = $this->where(function ($query) use($filter) {
          if ($filter) {
              $query->where('segment_area', 'LIKE', "%{$filter}%");
              $query->where('Provincia_id', 'LIKE', "%{$filter}%");
              $query->where('distrito_id', 'LIKE', "%{$filter}%");
          }
      })//->tosql();
      ->paginate();
      return $results;
  }
}
