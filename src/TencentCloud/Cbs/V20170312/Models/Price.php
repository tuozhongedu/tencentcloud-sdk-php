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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getOriginalPrice() 获取预支费用的原价，单位：元。
 * @method void setOriginalPrice(float $OriginalPrice) 设置预支费用的原价，单位：元。
 * @method float getDiscountPrice() 获取预支费用的折扣价，单位：元。
 * @method void setDiscountPrice(float $DiscountPrice) 设置预支费用的折扣价，单位：元。
 */

/**
 *描述了云盘的价格
 */
class Price extends AbstractModel
{
    /**
     * @var float 预支费用的原价，单位：元。
     */
    public $OriginalPrice;

    /**
     * @var float 预支费用的折扣价，单位：元。
     */
    public $DiscountPrice;
    /**
     * @param float $OriginalPrice 预支费用的原价，单位：元。
     * @param float $DiscountPrice 预支费用的折扣价，单位：元。
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
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
