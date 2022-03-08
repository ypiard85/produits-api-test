<?php

namespace App\Controller\Api\Validator;

use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContrainteProperties extends Constraint
{
    public $message = "Violation des droits, les champs ne sont pas bien";
}