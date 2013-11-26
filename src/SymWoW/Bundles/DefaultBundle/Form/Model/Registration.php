<?php

namespace Symwow\Bundles\DefaultBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Symwow\Bundles\DefaultBundle\Entity\Auth\Account;

class Registration
{
    /**
     * @Assert\Type(type="Symwow\Bundles\DefaultBundle\Entity\Auth\Account")
     * @Assert\Valid()
     */
    protected $account;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setAccount(Account $account)
    {
        $this->account = $account;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}