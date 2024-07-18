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

class InsertEventRequestData
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'replace',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        2 => array(
            'var' => 'filesAdded',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        3 => array(
            'var' => 'filesAddedChecksum',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'subDirectoryList',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        5 => array(
            'var' => 'partitionVal',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var bool
     */
    public $replace = null;
    /**
     * @var string[]
     */
    public $filesAdded = null;
    /**
     * @var string[]
     */
    public $filesAddedChecksum = null;
    /**
     * @var string[]
     */
    public $subDirectoryList = null;
    /**
     * @var string[]
     */
    public $partitionVal = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['replace'])) {
                $this->replace = $vals['replace'];
            }
            if (isset($vals['filesAdded'])) {
                $this->filesAdded = $vals['filesAdded'];
            }
            if (isset($vals['filesAddedChecksum'])) {
                $this->filesAddedChecksum = $vals['filesAddedChecksum'];
            }
            if (isset($vals['subDirectoryList'])) {
                $this->subDirectoryList = $vals['subDirectoryList'];
            }
            if (isset($vals['partitionVal'])) {
                $this->partitionVal = $vals['partitionVal'];
            }
        }
    }

    public function getName()
    {
        return 'InsertEventRequestData';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->replace);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->filesAdded = array();
                        $_size890 = 0;
                        $_etype893 = 0;
                        $xfer += $input->readListBegin($_etype893, $_size890);
                        for ($_i894 = 0; $_i894 < $_size890; ++$_i894) {
                            $elem895 = null;
                            $xfer += $input->readString($elem895);
                            $this->filesAdded []= $elem895;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->filesAddedChecksum = array();
                        $_size896 = 0;
                        $_etype899 = 0;
                        $xfer += $input->readListBegin($_etype899, $_size896);
                        for ($_i900 = 0; $_i900 < $_size896; ++$_i900) {
                            $elem901 = null;
                            $xfer += $input->readString($elem901);
                            $this->filesAddedChecksum []= $elem901;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->subDirectoryList = array();
                        $_size902 = 0;
                        $_etype905 = 0;
                        $xfer += $input->readListBegin($_etype905, $_size902);
                        for ($_i906 = 0; $_i906 < $_size902; ++$_i906) {
                            $elem907 = null;
                            $xfer += $input->readString($elem907);
                            $this->subDirectoryList []= $elem907;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->partitionVal = array();
                        $_size908 = 0;
                        $_etype911 = 0;
                        $xfer += $input->readListBegin($_etype911, $_size908);
                        for ($_i912 = 0; $_i912 < $_size908; ++$_i912) {
                            $elem913 = null;
                            $xfer += $input->readString($elem913);
                            $this->partitionVal []= $elem913;
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
        $xfer += $output->writeStructBegin('InsertEventRequestData');
        if ($this->replace !== null) {
            $xfer += $output->writeFieldBegin('replace', TType::BOOL, 1);
            $xfer += $output->writeBool($this->replace);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->filesAdded !== null) {
            if (!is_array($this->filesAdded)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('filesAdded', TType::LST, 2);
            $output->writeListBegin(TType::STRING, count($this->filesAdded));
            foreach ($this->filesAdded as $iter914) {
                $xfer += $output->writeString($iter914);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->filesAddedChecksum !== null) {
            if (!is_array($this->filesAddedChecksum)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('filesAddedChecksum', TType::LST, 3);
            $output->writeListBegin(TType::STRING, count($this->filesAddedChecksum));
            foreach ($this->filesAddedChecksum as $iter915) {
                $xfer += $output->writeString($iter915);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->subDirectoryList !== null) {
            if (!is_array($this->subDirectoryList)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('subDirectoryList', TType::LST, 4);
            $output->writeListBegin(TType::STRING, count($this->subDirectoryList));
            foreach ($this->subDirectoryList as $iter916) {
                $xfer += $output->writeString($iter916);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partitionVal !== null) {
            if (!is_array($this->partitionVal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('partitionVal', TType::LST, 5);
            $output->writeListBegin(TType::STRING, count($this->partitionVal));
            foreach ($this->partitionVal as $iter917) {
                $xfer += $output->writeString($iter917);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
