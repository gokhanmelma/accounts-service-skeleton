<?php declare(strict_types=1);

namespace App\Users\Delivery\Api\V1\Users\Forms;

use Adamsafr\FormRequestBundle\Http\FormRequest;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UpdateAccountRequest
 *
 * @package    App\Users\Delivery\Api\V1\Users\Forms
 * @subpackage App\Users\Delivery\Api\V1\Users\Forms\UpdateAccountRequest
 */
class UpdateAccountRequest extends FormRequest
{

    /**
     * @return Constraint|Constraint[]|Assert\Collection|null
     */
    public function rules()
    {
        return new Assert\Collection([
            'fields' => [
                'account_id' => new Assert\Required([
                    new Assert\NotNull(),
                    new Assert\NotBlank(),
                    new Assert\Uuid(),
                ]),
            ],
        ]);
    }
}
