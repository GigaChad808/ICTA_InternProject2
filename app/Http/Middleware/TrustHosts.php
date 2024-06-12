<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}




// namespace App\Http\Middleware;

// use Illuminate\Http\Middleware\TrustHosts as Middleware;

// class TrustHosts extends Middleware
// {
//     /**
//      * Get the host patterns that should be trusted.
//      *
//      * @return array<int, string|null>
//      */
//     public function hosts(): array
//     {
//         return [
//             $this->allSubdomainsOfApplicationUrl(),
//         ];
//     }
// }
