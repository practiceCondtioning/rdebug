<?php
namespace Midi\Koala\Replayed;

/**
 * Autogenerated by Disf-CodeGen (0.1.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */    

/** 
    * @property string ActionType 
    * @property int OccurredAt 
    * @property string ActionId 
    * @property ReturnValue ReturnValue 
    * @property string CallFunctionId 
*/ 
class ReturnFunction extends \ArrayObject {

    public static $SCHEMA = array( 
        'disfSchemaFormatVersion' => 1003,
        'isUnion' => false,
        'classObject' => ReturnFunction::class,
        'className' => 'Midi\Koala\Replayed\ReturnFunction',
        'annotations' => array(),
        'fields' => array(
            "ActionType" => array(
                "fieldId" => 3, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "OccurredAt" => array(
                "fieldId" => 2, 
                "thriftType" => 'I64',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "ActionId" => array(
                "fieldId" => 1, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "ReturnValue" => array(
                "fieldId" => 5, 
                "thriftType" => 'STRUCT',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => ReturnValue::class, 
            ),
            "CallFunctionId" => array(
                "fieldId" => 4, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
        ),
    );

    public function __construct($array = null) 
    {
        if (!isset($array)) { 
            parent::__construct(array(), \ArrayObject::ARRAY_AS_PROPS);
            return;
        }

        parent::__construct($array, \ArrayObject::ARRAY_AS_PROPS); 

        if(isset($array["ActionType"])) { 
            $this->setActionType($array["ActionType"]);
        }

        if(isset($array["OccurredAt"])) { 
            $this->setOccurredAt($array["OccurredAt"]);
        }

        if(isset($array["ActionId"])) { 
            $this->setActionId($array["ActionId"]);
        }

        if(isset($array["ReturnValue"])) { 
            $this->setReturnValue($array["ReturnValue"]);
        }

        if(isset($array["CallFunctionId"])) { 
            $this->setCallFunctionId($array["CallFunctionId"]);
        }

    }

    /** 
     * @return string 
    */ 
    public function getActionType()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["ActionType"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setActionType(/* string */ $val) {
        $this["ActionType"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return int 
    */ 
    public function getOccurredAt()/* : int */ {
        return \Midi\Koala\Common\TypeConverter::to_int($this["OccurredAt"]);
    }

    /** 
     * @param int $val 
    */ 
    public function setOccurredAt(/* int */ $val) {
        $this["OccurredAt"] = \Midi\Koala\Common\TypeConverter::to_int($val);
    }

    /** 
     * @return string 
    */ 
    public function getActionId()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["ActionId"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setActionId(/* string */ $val) {
        $this["ActionId"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return ReturnValue 
    */ 
    public function getReturnValue()/* : ReturnValue */ {
        return \Midi\Koala\Common\TypeConverter::to_struct($this["ReturnValue"], ReturnValue::class);
    }

    /** 
     * @param ReturnValue $val 
    */ 
    public function setReturnValue(/* ReturnValue */ $val) {
        $this["ReturnValue"] = \Midi\Koala\Common\TypeConverter::to_struct($val, ReturnValue::class);
    }

    /** 
     * @return string 
    */ 
    public function getCallFunctionId()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["CallFunctionId"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setCallFunctionId(/* string */ $val) {
        $this["CallFunctionId"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }
}

/* THRIFT IDL
namespace php koala.replayed

union ReturnValue {
}

struct ReturnFunction {
    1: string ActionId
    2: i64 OccurredAt
    3: string ActionType
    4: string CallFunctionId
    5: ReturnValue ReturnValue
}
*/