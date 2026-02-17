<?php
declare(strict_types=1);

namespace App\Mailer;

use App\Model\Entity\User;
use Cake\Mailer\Mailer;

class UserMailer extends Mailer
{
    public function verification(User $user)
    {

    }
}
