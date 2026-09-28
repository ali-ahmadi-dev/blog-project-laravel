<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Translation\PotentiallyTranslatedString;

class GoogleCaptchaV3 implements ValidationRule
{



     public function __construct(private ?string $action=null , private ?float $minScore=null){

     }


    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //

        $siteVerify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[

            'secret' =>config('services.google_recaptcha_v3.site_key'),
            'response' => $value,

           


        ]);
        //  dd($siteVerify);
    }
}