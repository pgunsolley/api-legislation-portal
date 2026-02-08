<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\JwtService;
use Cake\Http\Exception\UnauthorizedException;
use Cake\Validation\Validator;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authorization\Controller\Component\AuthorizationComponent $Authorization
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['generateToken']);
    }

    public function generateToken(JwtService $jwtService)
    {
        ['email' => $email, 'password' => $password] = $this->request->getData();
        $validator = (new Validator())->email('email')->requirePresence('email')->notEmptyString('email');
        $errors = $validator->validate(compact('email'));
        if (!empty($errors)) {
            throw new UnauthorizedException('Invalid email');
        }

        $user = $this->Users->findByEmail($email)->first();
        if (empty($user) || !$user->checkPassword($password)) {
            throw new UnauthorizedException();
        }

        // TODO: Return response body with signed JWT.
        // TODO: Use a JWT service
    }
}
