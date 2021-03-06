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

namespace TencentCloud\Cis\V20180408;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cis\V20180408\Models as Models;

/**
* @method Models\CreateContainerInstanceResponse CreateContainerInstance(Models\CreateContainerInstanceRequest $req) 此接口（CreateContainerInstance）用于创建容器实例
* @method Models\DeleteContainerInstanceResponse DeleteContainerInstance(Models\DeleteContainerInstanceRequest $req) 此接口（DeleteContainerInstance）用于删除容器实例
* @method Models\DescribeContainerInstanceResponse DescribeContainerInstance(Models\DescribeContainerInstanceRequest $req) 此接口（DescribeContainerInstance）用于获取容器实例详情
* @method Models\DescribeContainerInstanceEventsResponse DescribeContainerInstanceEvents(Models\DescribeContainerInstanceEventsRequest $req) 此接口（DescribeContainerInstanceEvents）用于查询容器实例事件列表
* @method Models\DescribeContainerInstancesResponse DescribeContainerInstances(Models\DescribeContainerInstancesRequest $req) 此接口（DescribeContainerInstances）查询容器实例列表
* @method Models\DescribeContainerLogResponse DescribeContainerLog(Models\DescribeContainerLogRequest $req) 此接口（DescribeContainerLog）用于获取容器日志信息
* @method Models\InquiryPriceCreateCisResponse InquiryPriceCreateCis(Models\InquiryPriceCreateCisRequest $req) 此接口（InquiryPriceCreateCis）用于查询容器实例价格
 */

class CisClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cis.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-08";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cis")."\\"."V20180408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
