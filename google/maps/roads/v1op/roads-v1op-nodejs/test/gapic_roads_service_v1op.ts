// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// ** This file is automatically generated by gapic-generator-typescript. **
// ** https://github.com/googleapis/gapic-generator-typescript **
// ** All changes to this file may be overwritten. **

import * as protos from '../protos/protos';
import * as assert from 'assert';
import * as sinon from 'sinon';
import {SinonStub} from 'sinon';
import { describe, it } from 'mocha';
import * as roadsserviceModule from '../src';

import {protobuf} from 'google-gax';

function generateSampleMessage<T extends object>(instance: T) {
    const filledObject = (instance.constructor as typeof protobuf.Message)
        .toObject(instance as protobuf.Message<T>, {defaults: true});
    return (instance.constructor as typeof protobuf.Message).fromObject(filledObject) as T;
}

function stubSimpleCall<ResponseType>(response?: ResponseType, error?: Error) {
    return error ? sinon.stub().rejects(error) : sinon.stub().resolves([response]);
}

function stubSimpleCallWithCallback<ResponseType>(response?: ResponseType, error?: Error) {
    return error ? sinon.stub().callsArgWith(2, error) : sinon.stub().callsArgWith(2, null, response);
}

describe('v1op.RoadsServiceClient', () => {
    it('has servicePath', () => {
        const servicePath = roadsserviceModule.v1op.RoadsServiceClient.servicePath;
        assert(servicePath);
    });

    it('has apiEndpoint', () => {
        const apiEndpoint = roadsserviceModule.v1op.RoadsServiceClient.apiEndpoint;
        assert(apiEndpoint);
    });

    it('has port', () => {
        const port = roadsserviceModule.v1op.RoadsServiceClient.port;
        assert(port);
        assert(typeof port === 'number');
    });

    it('should create a client with no option', () => {
        const client = new roadsserviceModule.v1op.RoadsServiceClient();
        assert(client);
    });

    it('should create a client with gRPC fallback', () => {
        const client = new roadsserviceModule.v1op.RoadsServiceClient({
            fallback: true,
        });
        assert(client);
    });

    it('has initialize method and supports deferred initialization', async () => {
        const client = new roadsserviceModule.v1op.RoadsServiceClient({
            credentials: { client_email: 'bogus', private_key: 'bogus' },
            projectId: 'bogus',
        });
        assert.strictEqual(client.roadsServiceStub, undefined);
        await client.initialize();
        assert(client.roadsServiceStub);
    });

    it('has close method', () => {
        const client = new roadsserviceModule.v1op.RoadsServiceClient({
            credentials: { client_email: 'bogus', private_key: 'bogus' },
            projectId: 'bogus',
        });
        client.close();
    });

    it('has getProjectId method', async () => {
        const fakeProjectId = 'fake-project-id';
        const client = new roadsserviceModule.v1op.RoadsServiceClient({
            credentials: { client_email: 'bogus', private_key: 'bogus' },
            projectId: 'bogus',
        });
        client.auth.getProjectId = sinon.stub().resolves(fakeProjectId);
        const result = await client.getProjectId();
        assert.strictEqual(result, fakeProjectId);
        assert((client.auth.getProjectId as SinonStub).calledWithExactly());
    });

    it('has getProjectId method with callback', async () => {
        const fakeProjectId = 'fake-project-id';
        const client = new roadsserviceModule.v1op.RoadsServiceClient({
            credentials: { client_email: 'bogus', private_key: 'bogus' },
            projectId: 'bogus',
        });
        client.auth.getProjectId = sinon.stub().callsArgWith(0, null, fakeProjectId);
        const promise = new Promise((resolve, reject) => {
            client.getProjectId((err?: Error|null, projectId?: string|null) => {
                if (err) {
                    reject(err);
                } else {
                    resolve(projectId);
                }
            });
        });
        const result = await promise;
        assert.strictEqual(result, fakeProjectId);
    });

    describe('snapToRoads', () => {
        it('invokes snapToRoads without error', async () => {
            const client = new roadsserviceModule.v1op.RoadsServiceClient({
                credentials: {client_email: 'bogus', private_key: 'bogus'},
                projectId: 'bogus',
            });
            client.initialize();
            const request = generateSampleMessage(new protos.google.maps.roads.v1op.SnapToRoadsRequest());
            const expectedOptions = {};
            const expectedResponse = generateSampleMessage(new protos.google.maps.roads.v1op.SnapToRoadsResponse());
            client.innerApiCalls.snapToRoads = stubSimpleCall(expectedResponse);
            const [response] = await client.snapToRoads(request);
            assert.deepStrictEqual(response, expectedResponse);
            assert((client.innerApiCalls.snapToRoads as SinonStub)
                .getCall(0).calledWith(request, expectedOptions, undefined));
        });

        it('invokes snapToRoads without error using callback', async () => {
            const client = new roadsserviceModule.v1op.RoadsServiceClient({
                credentials: {client_email: 'bogus', private_key: 'bogus'},
                projectId: 'bogus',
            });
            client.initialize();
            const request = generateSampleMessage(new protos.google.maps.roads.v1op.SnapToRoadsRequest());
            const expectedOptions = {};
            const expectedResponse = generateSampleMessage(new protos.google.maps.roads.v1op.SnapToRoadsResponse());
            client.innerApiCalls.snapToRoads = stubSimpleCallWithCallback(expectedResponse);
            const promise = new Promise((resolve, reject) => {
                 client.snapToRoads(
                    request,
                    (err?: Error|null, result?: protos.google.maps.roads.v1op.ISnapToRoadsResponse|null) => {
                        if (err) {
                            reject(err);
                        } else {
                            resolve(result);
                        }
                    });
            });
            const response = await promise;
            assert.deepStrictEqual(response, expectedResponse);
            assert((client.innerApiCalls.snapToRoads as SinonStub)
                .getCall(0).calledWith(request, expectedOptions /*, callback defined above */));
        });

        it('invokes snapToRoads with error', async () => {
            const client = new roadsserviceModule.v1op.RoadsServiceClient({
                credentials: {client_email: 'bogus', private_key: 'bogus'},
                projectId: 'bogus',
            });
            client.initialize();
            const request = generateSampleMessage(new protos.google.maps.roads.v1op.SnapToRoadsRequest());
            const expectedOptions = {};
            const expectedError = new Error('expected');
            client.innerApiCalls.snapToRoads = stubSimpleCall(undefined, expectedError);
            await assert.rejects(client.snapToRoads(request), expectedError);
            assert((client.innerApiCalls.snapToRoads as SinonStub)
                .getCall(0).calledWith(request, expectedOptions, undefined));
        });
    });

    describe('listNearestRoads', () => {
        it('invokes listNearestRoads without error', async () => {
            const client = new roadsserviceModule.v1op.RoadsServiceClient({
                credentials: {client_email: 'bogus', private_key: 'bogus'},
                projectId: 'bogus',
            });
            client.initialize();
            const request = generateSampleMessage(new protos.google.maps.roads.v1op.ListNearestRoadsRequest());
            const expectedOptions = {};
            const expectedResponse = generateSampleMessage(new protos.google.maps.roads.v1op.ListNearestRoadsResponse());
            client.innerApiCalls.listNearestRoads = stubSimpleCall(expectedResponse);
            const [response] = await client.listNearestRoads(request);
            assert.deepStrictEqual(response, expectedResponse);
            assert((client.innerApiCalls.listNearestRoads as SinonStub)
                .getCall(0).calledWith(request, expectedOptions, undefined));
        });

        it('invokes listNearestRoads without error using callback', async () => {
            const client = new roadsserviceModule.v1op.RoadsServiceClient({
                credentials: {client_email: 'bogus', private_key: 'bogus'},
                projectId: 'bogus',
            });
            client.initialize();
            const request = generateSampleMessage(new protos.google.maps.roads.v1op.ListNearestRoadsRequest());
            const expectedOptions = {};
            const expectedResponse = generateSampleMessage(new protos.google.maps.roads.v1op.ListNearestRoadsResponse());
            client.innerApiCalls.listNearestRoads = stubSimpleCallWithCallback(expectedResponse);
            const promise = new Promise((resolve, reject) => {
                 client.listNearestRoads(
                    request,
                    (err?: Error|null, result?: protos.google.maps.roads.v1op.IListNearestRoadsResponse|null) => {
                        if (err) {
                            reject(err);
                        } else {
                            resolve(result);
                        }
                    });
            });
            const response = await promise;
            assert.deepStrictEqual(response, expectedResponse);
            assert((client.innerApiCalls.listNearestRoads as SinonStub)
                .getCall(0).calledWith(request, expectedOptions /*, callback defined above */));
        });

        it('invokes listNearestRoads with error', async () => {
            const client = new roadsserviceModule.v1op.RoadsServiceClient({
                credentials: {client_email: 'bogus', private_key: 'bogus'},
                projectId: 'bogus',
            });
            client.initialize();
            const request = generateSampleMessage(new protos.google.maps.roads.v1op.ListNearestRoadsRequest());
            const expectedOptions = {};
            const expectedError = new Error('expected');
            client.innerApiCalls.listNearestRoads = stubSimpleCall(undefined, expectedError);
            await assert.rejects(client.listNearestRoads(request), expectedError);
            assert((client.innerApiCalls.listNearestRoads as SinonStub)
                .getCall(0).calledWith(request, expectedOptions, undefined));
        });
    });
});
