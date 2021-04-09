<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Ads\GoogleAds\Tests\Unit\V6\Services;

use Google\Ads\GoogleAds\V6\Services\AdGroupServiceClient;
use Google\Ads\GoogleAds\V6\Resources\AdGroup;
use Google\Ads\GoogleAds\V6\Services\MutateAdGroupsResponse;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Rpc\Code;
use stdClass;

/**
 * @group services
 *
 * @group gapic
 */
class AdGroupServiceClientTest extends GeneratedTest
{
    /**
     * @return TransportInterface
     */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /**
     * @return CredentialsWrapper
     */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /**
     * @return AdGroupServiceClient
     */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new AdGroupServiceClient($options);
    }

    /**
     * @test
     */
    public function getAdGroupTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $resourceName2 = 'resourceName2625949903';
        $id = 3355;
        $name = 'name3373707';
        $baseAdGroup = 'baseAdGroup802276625';
        $trackingUrlTemplate = 'trackingUrlTemplate-1611329070';
        $campaign = 'campaign-139919088';
        $cpcBidMicros = 909381114;
        $cpmBidMicros = 2094758992;
        $targetCpaMicros = 733096280;
        $cpvBidMicros = 933014521;
        $targetCpmMicros = 1294208740;
        $targetRoas = -2.08462819E8;
        $percentCpcBidMicros = 2098488628;
        $finalUrlSuffix = 'finalUrlSuffix-1825164662';
        $effectiveTargetCpaMicros = 248222192;
        $effectiveTargetRoas = -1.71721561E8;
        $expectedResponse = new AdGroup();
        $expectedResponse->setResourceName($resourceName2);
        $expectedResponse->setId($id);
        $expectedResponse->setName($name);
        $expectedResponse->setBaseAdGroup($baseAdGroup);
        $expectedResponse->setTrackingUrlTemplate($trackingUrlTemplate);
        $expectedResponse->setCampaign($campaign);
        $expectedResponse->setCpcBidMicros($cpcBidMicros);
        $expectedResponse->setCpmBidMicros($cpmBidMicros);
        $expectedResponse->setTargetCpaMicros($targetCpaMicros);
        $expectedResponse->setCpvBidMicros($cpvBidMicros);
        $expectedResponse->setTargetCpmMicros($targetCpmMicros);
        $expectedResponse->setTargetRoas($targetRoas);
        $expectedResponse->setPercentCpcBidMicros($percentCpcBidMicros);
        $expectedResponse->setFinalUrlSuffix($finalUrlSuffix);
        $expectedResponse->setEffectiveTargetCpaMicros($effectiveTargetCpaMicros);
        $expectedResponse->setEffectiveTargetRoas($effectiveTargetRoas);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedResourceName = $client->adGroupName('[CUSTOMER_ID]', '[AD_GROUP_ID]');
        $response = $client->getAdGroup($formattedResourceName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.ads.googleads.v6.services.AdGroupService/GetAdGroup', $actualFuncCall);
        $actualValue = $actualRequestObject->getResourceName();
        $this->assertProtobufEquals($formattedResourceName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getAdGroupExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedResourceName = $client->adGroupName('[CUSTOMER_ID]', '[AD_GROUP_ID]');
        try {
            $client->getAdGroup($formattedResourceName);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function mutateAdGroupsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new MutateAdGroupsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $customerId = 'customerId-1772061412';
        $operations = [];
        $response = $client->mutateAdGroups($customerId, $operations);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.ads.googleads.v6.services.AdGroupService/MutateAdGroups', $actualFuncCall);
        $actualValue = $actualRequestObject->getCustomerId();
        $this->assertProtobufEquals($customerId, $actualValue);
        $actualValue = $actualRequestObject->getOperations();
        $this->assertProtobufEquals($operations, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function mutateAdGroupsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $customerId = 'customerId-1772061412';
        $operations = [];
        try {
            $client->mutateAdGroups($customerId, $operations);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
