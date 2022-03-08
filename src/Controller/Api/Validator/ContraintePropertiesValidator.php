<?php

namespace App\Controller\Api\Validator;

use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 */
final class ContraintePropertiesValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint): void
    {

    }
}