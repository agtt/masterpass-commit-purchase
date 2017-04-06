<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitPurchaseResponse StructType
 * @subpackage Structs
 */
class CommitPurchaseResponse extends AbstractStructBase
{
    /**
     * The CommitPurchaseResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult
     */
    public $CommitPurchaseResult;
    /**
     * Constructor method for CommitPurchaseResponse
     * @uses CommitPurchaseResponse::setCommitPurchaseResult()
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult $commitPurchaseResult
     */
    public function __construct(\Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult $commitPurchaseResult = null)
    {
        $this
            ->setCommitPurchaseResult($commitPurchaseResult);
    }
    /**
     * Get CommitPurchaseResult value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult|null
     */
    public function getCommitPurchaseResult()
    {
        return $this->CommitPurchaseResult;
    }
    /**
     * Set CommitPurchaseResult value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult $commitPurchaseResult
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponse
     */
    public function setCommitPurchaseResult(\Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult $commitPurchaseResult = null)
    {
        $this->CommitPurchaseResult = $commitPurchaseResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
