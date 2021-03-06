<?php declare(strict_types=1);

namespace App\Users\Domain\Events;

use Somnambulist\Domain\Events\AbstractEvent;

/**
 * Class UserAuthenticationCredentialsChanged
 *
 * @package    App\Users\Domain\Events
 * @subpackage App\Users\Domain\Events\UserAuthenticationCredentialsChanged
 */
class UserAuthenticationCredentialsChanged extends AbstractEvent
{
    protected string $group = 'user';
}
