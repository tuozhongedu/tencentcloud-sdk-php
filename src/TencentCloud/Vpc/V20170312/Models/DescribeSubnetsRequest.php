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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getSubnetIds() 获取子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100。参数不支持同时指定SubnetIds和Filters。
 * @method void setSubnetIds(array $SubnetIds) 设置子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100。参数不支持同时指定SubnetIds和Filters。
 * @method array getFilters() 获取过滤条件，参数不支持同时指定SubnetIds和Filters。
<li>subnet-id - String - （过滤条件）Subnet实例名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）vpc的cidr。</li>
<li>is-default - Boolean - （过滤条件）是否是默认子网。</li>
<li>subnet-name - String - （过滤条件）子网名称。</li>
<li>zone - String - （过滤条件）可用区。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定SubnetIds和Filters。
<li>subnet-id - String - （过滤条件）Subnet实例名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）vpc的cidr。</li>
<li>is-default - Boolean - （过滤条件）是否是默认子网。</li>
<li>subnet-name - String - （过滤条件）子网名称。</li>
<li>zone - String - （过滤条件）可用区。</li>
 * @method string getOffset() 获取偏移量
 * @method void setOffset(string $Offset) 设置偏移量
 * @method string getLimit() 获取返回数量
 * @method void setLimit(string $Limit) 设置返回数量
 */

/**
 *DescribeSubnets请求参数结构体
 */
class DescribeSubnetsRequest extends AbstractModel
{
    /**
     * @var array 子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100。参数不支持同时指定SubnetIds和Filters。
     */
    public $SubnetIds;

    /**
     * @var array 过滤条件，参数不支持同时指定SubnetIds和Filters。
<li>subnet-id - String - （过滤条件）Subnet实例名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）vpc的cidr。</li>
<li>is-default - Boolean - （过滤条件）是否是默认子网。</li>
<li>subnet-name - String - （过滤条件）子网名称。</li>
<li>zone - String - （过滤条件）可用区。</li>
     */
    public $Filters;

    /**
     * @var string 偏移量
     */
    public $Offset;

    /**
     * @var string 返回数量
     */
    public $Limit;
    /**
     * @param array $SubnetIds 子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100。参数不支持同时指定SubnetIds和Filters。
     * @param array $Filters 过滤条件，参数不支持同时指定SubnetIds和Filters。
<li>subnet-id - String - （过滤条件）Subnet实例名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）vpc的cidr。</li>
<li>is-default - Boolean - （过滤条件）是否是默认子网。</li>
<li>subnet-name - String - （过滤条件）子网名称。</li>
<li>zone - String - （过滤条件）可用区。</li>
     * @param string $Offset 偏移量
     * @param string $Limit 返回数量
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
        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
