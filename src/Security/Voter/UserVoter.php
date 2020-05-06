<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class UserVoter extends Voter
{
    const AUTHORIZE = 'SAME_USER';

    protected function supports($attribute, $subject)
    {
        return in_array($attribute, [self::AUTHORIZE])
            && $subject instanceof User;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::AUTHORIZE:
                return
                    $subject === $user
                    || $this->security->isGranted('ROLE_ADMIN');
        }

        return false;
    }
}
