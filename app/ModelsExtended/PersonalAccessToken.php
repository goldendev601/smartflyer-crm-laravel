<?php

namespace App\ModelsExtended;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string|null $abilities
 * @property Carbon|null $last_used_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 */
class PersonalAccessToken extends \Laravel\Sanctum\PersonalAccessToken
{
    const PASSWORD_AUTHENTICATED_TOKEN = "PASSWORD_AUTHENTICATED_TOKEN";
    const API_AUTHENTICATED_TOKEN = "API_AUTHENTICATED_TOKEN";

    /**
     * @param User|Authenticatable $user
     * @return void
     */
    public static function logoutAllUserPasswordTokens($user)
    {
        self::query()
            ->where("tokenable_id", $user->id )
            ->where("name", self::PASSWORD_AUTHENTICATED_TOKEN )
            ->delete();
    }
//
//    /**
//     * @param Authenticatable|User $user
//     * @return void
//     */
//    public static function deleteAllUserApiTokens(User|Authenticatable $user)
//    {
//        self::query()
//            ->where("tokenable_id", $user->id )
//            ->where("name", self::API_AUTHENTICATED_TOKEN )
//            ->delete();
//    }

//    /**
//     * @param Authenticatable|User $user
//     * @return PersonalAccessToken|Model
//     */
//    public static function getUserApiKey(User|Authenticatable $user)
//    {
//        return self::query()
//            ->where("tokenable_id", $user->id )
//            ->where("name", self::API_AUTHENTICATED_TOKEN )
//            ->first();
//    }
//
//    /**
//     * Check if this is API_AUTHENTICATED_TOKEN
//     *
//     * @param PersonalAccessToken $currentAccessToken
//     * @return bool
//     */
//    public static function isApiLoginToken(PersonalAccessToken $currentAccessToken): bool
//    {
//        return $currentAccessToken->name === self::API_AUTHENTICATED_TOKEN;
//    }
//
//    /**
//     * @param Authenticatable|User $user
//     * @return string
//     */
//    public static function createApiToken(Authenticatable|User $user): string
//    {
//        self::deleteAllUserApiTokens( $user );
//        return $user->createToken(PersonalAccessToken::API_AUTHENTICATED_TOKEN )->plainTextToken;
//    }
}
