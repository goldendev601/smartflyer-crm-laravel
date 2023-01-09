<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Responses\OkResponse;
use App\Http\Responses\UnauthorizedResponse;
use App\ModelsExtended\PersonalAccessToken;
use App\ModelsExtended\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout()
    {
        PersonalAccessToken::logoutAllUserPasswordTokens( auth()->user() );

        return new OkResponse(message('Successfully logged out'));
    }

    /**
     * Login User if user is approved
     *
     * @return JsonResponse|OkResponse|UnauthorizedResponse
     * @throws ValidationException
     */
    public function login(Request $request): UnauthorizedResponse|JsonResponse|OkResponse
    {
        $this->validatedRules(
            [
                'email' => 'required|email|max:200|exists:users,email',
                'password' => 'required|string|max:200',
            ]);

        // Try Login Credential
        if (!  auth()->attempt($request->only(['email', 'password']))  ) {
            return new UnauthorizedResponse(message("Invalid Login Details!"));
        }

        //  Return logged in details
        return $this->respondWithLoginToken(  $request->input( 'email' ) );
    }

    /**
     * Get the token array structure.
     *
     * @param string $email
     * @return JsonResponse|OkResponse
     */
    protected function respondWithLoginToken(string $email): JsonResponse|OkResponse
    {
        $user = User::getByEmail($email);
        return  $this->respondWithToken(
            $user,
            $user->createToken(PersonalAccessToken::PASSWORD_AUTHENTICATED_TOKEN )->plainTextToken
        );
    }

    /**
     * Get the token array structure.
     *
     * @param User $user
     * @param string $plainTextToken
     * @return JsonResponse|OkResponse
     */
    protected function respondWithToken(User|Authenticatable $user, string $plainTextToken): JsonResponse|OkResponse
    {
        return new OkResponse([

            'user' => $user,

            'access_token' => $plainTextToken,
            'token_type' => 'bearer',
//            'expires_in_seconds' => auth()->factory()->getTTL() * 60    // return in seconds
        ]);
    }
}
