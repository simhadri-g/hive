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

class ThriftHiveMetastore_alter_partitions_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'db_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tbl_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'new_parts',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\Partition',
                ),
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
     * @var \metastore\Partition[]
     */
    public $new_parts = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['db_name'])) {
                $this->db_name = $vals['db_name'];
            }
            if (isset($vals['tbl_name'])) {
                $this->tbl_name = $vals['tbl_name'];
            }
            if (isset($vals['new_parts'])) {
                $this->new_parts = $vals['new_parts'];
            }
        }
    }

    public function getName()
    {
        return 'ThriftHiveMetastore_alter_partitions_args';
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
                        $this->new_parts = array();
                        $_size1772 = 0;
                        $_etype1775 = 0;
                        $xfer += $input->readListBegin($_etype1775, $_size1772);
                        for ($_i1776 = 0; $_i1776 < $_size1772; ++$_i1776) {
                            $elem1777 = null;
                            $elem1777 = new \metastore\Partition();
                            $xfer += $elem1777->read($input);
                            $this->new_parts []= $elem1777;
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
        $xfer += $output->writeStructBegin('ThriftHiveMetastore_alter_partitions_args');
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
        if ($this->new_parts !== null) {
            if (!is_array($this->new_parts)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('new_parts', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->new_parts));
            foreach ($this->new_parts as $iter1778) {
                $xfer += $iter1778->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
