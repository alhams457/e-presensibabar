<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\JwtHelper;
use App\Models\Userphl;
use App\Models\Userpns;
use App\Traits\ResponseTrait;
use Carbon\Carbon;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtMiddleware
{
    use ResponseTrait;

    public function handle($request, Closure $next)
    {
        try {
            $token = $request->bearerToken();
            if (!$token) {
                return $this->formatResponse(401, 'Unauthorized');
            }

            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS512'));

            $timestamp = Carbon::now()->timestamp;
            if ($timestamp > $decoded->exp) {
                return $this->formatResponse(401, 'Unauthorized');
            }

            $userAsn = Userpns::where('uuid', $decoded->uuid)->first();
            if ($userAsn) {
                return $next($request);
            }

            $userPhl = Userphl::where('uuid', $decoded->uuid)->first();
            if ($userPhl) {
                return $next($request);
            }
            return $this->formatResponse(401, 'Unauthorized');

        } catch (Exception $e) {
            return $this->formatResponse(401, 'Unauthorized');
        }

        return $next($request);
    }
}
