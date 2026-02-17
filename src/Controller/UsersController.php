<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\JwtService;
use Cake\Event\EventInterface;
use Cake\Http\Exception\UnauthorizedException;
use Cake\Mailer\MailerAwareTrait;
use Cake\Validation\Validator;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authorization\Controller\Component\AuthorizationComponent $Authorization
 */
class UsersController extends AppController
{
    use MailerAwareTrait;

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['add', 'generateToken']);
        $this->loadComponent('Crud.Crud', [
            'actions' => ['Crud.Add'],
            'listeners' => ['Crud.Api', 'Crud.ApiPagination'],
        ]);
    }

    public function add(JwtService $jwtService)
    {
        $this->Crud->on('afterSave', function (EventInterface $event) {
            $mailer = $this->getMailer('User');
            // TODO: Define method/action on UserMailer for sending verification email
        });

        $this->Crud->execute();
    }

    public function verifyEmailToken(JwtService $jwtService)
    {
        // TODO: Add logic to find user using jwt, update email_verified to true, and respond with new jwt
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
        if (empty($user) || !$user->checkPassword($password) || !$user->email_verified) {
            throw new UnauthorizedException();
        }

        $token = $jwtService->signUser($user);
        $data = compact('token');
        $this->viewBuilder()->setOption('serialize', 'data');
        $this->set(compact('data'));
    }
}
