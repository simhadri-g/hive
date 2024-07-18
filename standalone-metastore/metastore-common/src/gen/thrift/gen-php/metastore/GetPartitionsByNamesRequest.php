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

class GetPartitionsByNamesRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'db_name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tbl_name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'names',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'get_col_stats',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        5 => array(
            'var' => 'processorCapabilities',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        6 => array(
            'var' => 'processorIdentifier',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'engine',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'validWriteIdList',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'getFileMetadata',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        10 => array(
            'var' => 'id',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        11 => array(
            'var' => 'skipColumnSchemaForPartition',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        12 => array(
            'var' => 'includeParamKeyPattern',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        13 => array(
            'var' => 'excludeParamKeyPattern',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $db_name = null;
    /**
     * @var string
     */
    public $tbl_name = null;
    /**
     * @var string[]
     */
    public $names = null;
    /**
     * @var bool
     */
    public $get_col_stats = null;
    /**
     * @var string[]
     */
    public $processorCapabilities = null;
    /**
     * @var string
     */
    public $processorIdentifier = null;
    /**
     * @var string
     */
    public $engine = "hive";
    /**
     * @var string
     */
    public $validWriteIdList = null;
    /**
     * @var bool
     */
    public $getFileMetadata = null;
    /**
     * @var int
     */
    public $id = -1;
    /**
     * @var bool
     */
    public $skipColumnSchemaForPartition = null;
    /**
     * @var string
     */
    public $includeParamKeyPattern = null;
    /**
     * @var string
     */
    public $excludeParamKeyPattern = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['db_name'])) {
                $this->db_name = $vals['db_name'];
            }
            if (isset($vals['tbl_name'])) {
                $this->tbl_name = $vals['tbl_name'];
            }
            if (isset($vals['names'])) {
                $this->names = $vals['names'];
            }
            if (isset($vals['get_col_stats'])) {
                $this->get_col_stats = $vals['get_col_stats'];
            }
            if (isset($vals['processorCapabilities'])) {
                $this->processorCapabilities = $vals['processorCapabilities'];
            }
            if (isset($vals['processorIdentifier'])) {
                $this->processorIdentifier = $vals['processorIdentifier'];
            }
            if (isset($vals['engine'])) {
                $this->engine = $vals['engine'];
            }
            if (isset($vals['validWriteIdList'])) {
                $this->validWriteIdList = $vals['validWriteIdList'];
            }
            if (isset($vals['getFileMetadata'])) {
                $this->getFileMetadata = $vals['getFileMetadata'];
            }
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['skipColumnSchemaForPartition'])) {
                $this->skipColumnSchemaForPartition = $vals['skipColumnSchemaForPartition'];
            }
            if (isset($vals['includeParamKeyPattern'])) {
                $this->includeParamKeyPattern = $vals['includeParamKeyPattern'];
            }
            if (isset($vals['excludeParamKeyPattern'])) {
                $this->excludeParamKeyPattern = $vals['excludeParamKeyPattern'];
            }
        }
    }

    public function getName()
    {
        return 'GetPartitionsByNamesRequest';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->db_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tbl_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->names = array();
                        $_size644 = 0;
                        $_etype647 = 0;
                        $xfer += $input->readListBegin($_etype647, $_size644);
                        for ($_i648 = 0; $_i648 < $_size644; ++$_i648) {
                            $elem649 = null;
                            $xfer += $input->readString($elem649);
                            $this->names []= $elem649;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->get_col_stats);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->processorCapabilities = array();
                        $_size650 = 0;
                        $_etype653 = 0;
                        $xfer += $input->readListBegin($_etype653, $_size650);
                        for ($_i654 = 0; $_i654 < $_size650; ++$_i654) {
                            $elem655 = null;
                            $xfer += $input->readString($elem655);
                            $this->processorCapabilities []= $elem655;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->processorIdentifier);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->engine);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->validWriteIdList);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->getFileMetadata);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->skipColumnSchemaForPartition);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->includeParamKeyPattern);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->excludeParamKeyPattern);
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
        $xfer += $output->writeStructBegin('GetPartitionsByNamesRequest');
        if ($this->db_name !== null) {
            $xfer += $output->writeFieldBegin('db_name', TType::STRING, 1);
            $xfer += $output->writeString($this->db_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tbl_name !== null) {
            $xfer += $output->writeFieldBegin('tbl_name', TType::STRING, 2);
            $xfer += $output->writeString($this->tbl_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->names !== null) {
            if (!is_array($this->names)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('names', TType::LST, 3);
            $output->writeListBegin(TType::STRING, count($this->names));
            foreach ($this->names as $iter656) {
                $xfer += $output->writeString($iter656);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->get_col_stats !== null) {
            $xfer += $output->writeFieldBegin('get_col_stats', TType::BOOL, 4);
            $xfer += $output->writeBool($this->get_col_stats);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->processorCapabilities !== null) {
            if (!is_array($this->processorCapabilities)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('processorCapabilities', TType::LST, 5);
            $output->writeListBegin(TType::STRING, count($this->processorCapabilities));
            foreach ($this->processorCapabilities as $iter657) {
                $xfer += $output->writeString($iter657);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->processorIdentifier !== null) {
            $xfer += $output->writeFieldBegin('processorIdentifier', TType::STRING, 6);
            $xfer += $output->writeString($this->processorIdentifier);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->engine !== null) {
            $xfer += $output->writeFieldBegin('engine', TType::STRING, 7);
            $xfer += $output->writeString($this->engine);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->validWriteIdList !== null) {
            $xfer += $output->writeFieldBegin('validWriteIdList', TType::STRING, 8);
            $xfer += $output->writeString($this->validWriteIdList);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->getFileMetadata !== null) {
            $xfer += $output->writeFieldBegin('getFileMetadata', TType::BOOL, 9);
            $xfer += $output->writeBool($this->getFileMetadata);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::I64, 10);
            $xfer += $output->writeI64($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->skipColumnSchemaForPartition !== null) {
            $xfer += $output->writeFieldBegin('skipColumnSchemaForPartition', TType::BOOL, 11);
            $xfer += $output->writeBool($this->skipColumnSchemaForPartition);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->includeParamKeyPattern !== null) {
            $xfer += $output->writeFieldBegin('includeParamKeyPattern', TType::STRING, 12);
            $xfer += $output->writeString($this->includeParamKeyPattern);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->excludeParamKeyPattern !== null) {
            $xfer += $output->writeFieldBegin('excludeParamKeyPattern', TType::STRING, 13);
            $xfer += $output->writeString($this->excludeParamKeyPattern);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
