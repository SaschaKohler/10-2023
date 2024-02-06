<?php

namespace App\Models;

use App\Enums\DocumentType;
use App\Models\Setting\DocumentDefault;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'personal_company' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'street',
        'zip',
        'country',
        'phone1',
        'city',
        'fax1',
        'phone2',
        'konto',
        'blz',
        'bank',
        'uident',
        'iban',
        'bic',
        'banknr',
    ];

    public function defaultBill(): HasOne
    {
        return $this->hasOne(DocumentDefault::class, 'company_id')
            ->where('type', DocumentType::Bill);
    }

    public function defaultInvoice(): HasOne
    {
        return $this->hasOne(DocumentDefault::class, 'company_id')
            ->where('type', DocumentType::Invoice);
    }
}
