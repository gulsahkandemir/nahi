<?php

use \Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use \Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ApiController extends BaseController {
    /** @var null */
    protected $layout = NULL;

    public function getRequestParameter($key, $required = false) {
        try {
            return parent::getRequestParameter($key, $required);
        } catch(MissingMandatoryParametersException $e) {
            throw new BadRequestHttpException($e->getMessage(), $e);
        }
    }
}