<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getZones() 获取分片节点可用区分布，最多可填两个可用区。当分片规格为一主两从时，其中两个节点在第一个可用区。
 * @method void setZones(array $Zones) 设置分片节点可用区分布，最多可填两个可用区。当分片规格为一主两从时，其中两个节点在第一个可用区。
 * @method integer getCount() 获取欲购买实例的数量，目前只支持购买1个实例
 * @method void setCount(integer $Count) 设置欲购买实例的数量，目前只支持购买1个实例
 * @method integer getPeriod() 获取欲购买的时长，单位：月。
 * @method void setPeriod(integer $Period) 设置欲购买的时长，单位：月。
 * @method integer getProjectId() 获取项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
 * @method string getVpcId() 获取虚拟私有网络 ID，不传或传空表示创建为基础网络
 * @method void setVpcId(string $VpcId) 设置虚拟私有网络 ID，不传或传空表示创建为基础网络
 * @method string getSubnetId() 获取虚拟私有网络子网 ID，VpcId不为空时必填
 * @method void setSubnetId(string $SubnetId) 设置虚拟私有网络子网 ID，VpcId不为空时必填
 * @method integer getShardMemory() 获取分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardMemory(integer $ShardMemory) 设置分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardStorage() 获取分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardStorage(integer $ShardStorage) 设置分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardNodeCount() 获取单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardNodeCount(integer $ShardNodeCount) 设置单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardCount() 获取实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
 * @method void setShardCount(integer $ShardCount) 设置实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
 * @method string getDbVersionId() 获取数据库引擎版本，当前可选：10.0.10，10.1.9，5.7.17
 * @method void setDbVersionId(string $DbVersionId) 设置数据库引擎版本，当前可选：10.0.10，10.1.9，5.7.17
 * @method boolean getAutoVoucher() 获取是否自动使用代金券进行支付，默认不使用。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动使用代金券进行支付，默认不使用。
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券。
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券。
 */

/**
 *CreateDCDBInstance请求参数结构体
 */
class CreateDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var array 分片节点可用区分布，最多可填两个可用区。当分片规格为一主两从时，其中两个节点在第一个可用区。
     */
    public $Zones;

    /**
     * @var integer 欲购买实例的数量，目前只支持购买1个实例
     */
    public $Count;

    /**
     * @var integer 欲购买的时长，单位：月。
     */
    public $Period;

    /**
     * @var integer 项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
     */
    public $ProjectId;

    /**
     * @var string 虚拟私有网络 ID，不传或传空表示创建为基础网络
     */
    public $VpcId;

    /**
     * @var string 虚拟私有网络子网 ID，VpcId不为空时必填
     */
    public $SubnetId;

    /**
     * @var integer 分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardMemory;

    /**
     * @var integer 分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardStorage;

    /**
     * @var integer 单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardNodeCount;

    /**
     * @var integer 实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
     */
    public $ShardCount;

    /**
     * @var string 数据库引擎版本，当前可选：10.0.10，10.1.9，5.7.17
     */
    public $DbVersionId;

    /**
     * @var boolean 是否自动使用代金券进行支付，默认不使用。
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券。
     */
    public $VoucherIds;
    /**
     * @param array $Zones 分片节点可用区分布，最多可填两个可用区。当分片规格为一主两从时，其中两个节点在第一个可用区。
     * @param integer $Count 欲购买实例的数量，目前只支持购买1个实例
     * @param integer $Period 欲购买的时长，单位：月。
     * @param integer $ProjectId 项目 ID，可以通过查看项目列表获取，不传则关联到默认项目
     * @param string $VpcId 虚拟私有网络 ID，不传或传空表示创建为基础网络
     * @param string $SubnetId 虚拟私有网络子网 ID，VpcId不为空时必填
     * @param integer $ShardMemory 分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardStorage 分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardNodeCount 单个分片节点个数，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardCount 实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
     * @param string $DbVersionId 数据库引擎版本，当前可选：10.0.10，10.1.9，5.7.17
     * @param boolean $AutoVoucher 是否自动使用代金券进行支付，默认不使用。
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ShardNodeCount",$param) and $param["ShardNodeCount"] !== null) {
            $this->ShardNodeCount = $param["ShardNodeCount"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
