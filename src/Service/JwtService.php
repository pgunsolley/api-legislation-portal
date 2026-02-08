<?php
declare(strict_types=1);

namespace App\Service;

use App\Model\Entity\User;
use Cake\Core\Configure;
use Firebase\JWT\JWT;

class JwtService
{
    public function signUser(User $user): string
    {
        $privateKey = Configure::readOrFail('Authentication.jwt.privateKey');
        $algorithm = Configure::read('Authentication.jwt.algorithm', 'RS256');
        $expiration = Configure::read('Authentication.jwt.expiration', time() + 60);
        
        $payload = [
            'iss' => 'api-legislation-portal',
            'sub' => $user->id,
            'exp' => $expiration,
        ];

        return JWT::encode($payload, $privateKey, $algorithm);
    }
}