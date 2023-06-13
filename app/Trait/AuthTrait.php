<?php
namespace App\Trait;


trait AuthTrait
{
    public function responseToken($token): array
    {   
      
        return [
            'access_token' => $token->accessToken,
            'token_type' => 'Bearer',
            // 'expires_at' => $token->token->expires_at->timestamp
        ];
    }
}
