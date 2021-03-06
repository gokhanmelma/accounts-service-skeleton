<?php declare(strict_types=1);

namespace App\Users\Domain\Events;

use Somnambulist\Domain\Events\AbstractEvent;

/**
 * Class UserActivated
 *
 * @package    App\Users\Domain\Events
 * @subpackage App\Users\Domain\Events\UserActivated
 */
class UserActivated extends AbstractEvent
{
    protected string $group = 'user';
}
