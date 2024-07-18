<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.16.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class NotificationEventsCountRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'fromEventId',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'dbName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'catName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'toEventId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'limit',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        6 => array(
            'var' => 'tableNames',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var int
     */
    public $fromEventId = null;
    /**
     * @var string
     */
    public $dbName = null;
    /**
     * @var string
     */
    public $catName = null;
    /**
     * @var int
     */
    public $toEventId = null;
    /**
     * @var int
     */
    public $limit = null;
    /**
     * @var string[]
     */
    public $tableNames = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['fromEventId'])) {
                $this->fromEventId = $vals['fromEventId'];
            }
            if (isset($vals['dbName'])) {
                $this->dbName = $vals['dbName'];
            }
            if (isset($vals['catName'])) {
                $this->catName = $vals['catName'];
            }
            if (isset($vals['toEventId'])) {
                $this->toEventId = $vals['toEventId'];
            }
            if (isset($vals['limit'])) {
                $this->limit = $vals['limit'];
            }
            if (isset($vals['tableNames'])) {
                $this->tableNames = $vals['tableNames'];
            }
        }
    }

    public function getName()
    {
        return 'NotificationEventsCountRequest';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->fromEventId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dbName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->catName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->toEventId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->limit);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->tableNames = array();
                        $_size883 = 0;
                        $_etype886 = 0;
                        $xfer += $input->readListBegin($_etype886, $_size883);
                        for ($_i887 = 0; $_i887 < $_size883; ++$_i887) {
                            $elem888 = null;
                            $xfer += $input->readString($elem888);
                            $this->tableNames []= $elem888;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('NotificationEventsCountRequest');
        if ($this->fromEventId !== null) {
            $xfer += $output->writeFieldBegin('fromEventId', TType::I64, 1);
            $xfer += $output->writeI64($this->fromEventId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dbName !== null) {
            $xfer += $output->writeFieldBegin('dbName', TType::STRING, 2);
            $xfer += $output->writeString($this->dbName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->catName !== null) {
            $xfer += $output->writeFieldBegin('catName', TType::STRING, 3);
            $xfer += $output->writeString($this->catName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->toEventId !== null) {
            $xfer += $output->writeFieldBegin('toEventId', TType::I64, 4);
            $xfer += $output->writeI64($this->toEventId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->limit !== null) {
            $xfer += $output->writeFieldBegin('limit', TType::I64, 5);
            $xfer += $output->writeI64($this->limit);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tableNames !== null) {
            if (!is_array($this->tableNames)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tableNames', TType::LST, 6);
            $output->writeListBegin(TType::STRING, count($this->tableNames));
            foreach ($this->tableNames as $iter889) {
                $xfer += $output->writeString($iter889);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
