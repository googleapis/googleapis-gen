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

/* global window */
import * as gax from 'google-gax';
import {Callback, CallOptions, Descriptors, ClientOptions} from 'google-gax';
import * as path from 'path';

import * as protos from '../../protos/protos';
/**
 * Client JSON configuration object, loaded from
 * `src/v1/topic_stats_service_client_config.json`.
 * This file defines retry strategy and timeouts for all API methods in this library.
 */
import * as gapicConfig from './topic_stats_service_client_config.json';

const version = require('../../../package.json').version;

/**
 *  This service allows users to get stats about messages in their topic.
 * @class
 * @memberof v1
 */
export class TopicStatsServiceClient {
  private _terminated = false;
  private _opts: ClientOptions;
  private _gaxModule: typeof gax | typeof gax.fallback;
  private _gaxGrpc: gax.GrpcClient | gax.fallback.GrpcClient;
  private _protos: {};
  private _defaults: {[method: string]: gax.CallSettings};
  auth: gax.GoogleAuth;
  descriptors: Descriptors = {
    page: {},
    stream: {},
    longrunning: {},
    batching: {},
  };
  innerApiCalls: {[name: string]: Function};
  pathTemplates: {[name: string]: gax.PathTemplate};
  topicStatsServiceStub?: Promise<{[name: string]: Function}>;

  /**
   * Construct an instance of TopicStatsServiceClient.
   *
   * @param {object} [options] - The configuration object.
   * The options accepted by the constructor are described in detail
   * in [this document](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#creating-the-client-instance).
   * The common options are:
   * @param {object} [options.credentials] - Credentials object.
   * @param {string} [options.credentials.client_email]
   * @param {string} [options.credentials.private_key]
   * @param {string} [options.email] - Account email address. Required when
   *     using a .pem or .p12 keyFilename.
   * @param {string} [options.keyFilename] - Full path to the a .json, .pem, or
   *     .p12 key downloaded from the Google Developers Console. If you provide
   *     a path to a JSON file, the projectId option below is not necessary.
   *     NOTE: .pem and .p12 require you to specify options.email as well.
   * @param {number} [options.port] - The port on which to connect to
   *     the remote host.
   * @param {string} [options.projectId] - The project ID from the Google
   *     Developer's Console, e.g. 'grape-spaceship-123'. We will also check
   *     the environment variable GCLOUD_PROJECT for your project ID. If your
   *     app is running in an environment which supports
   *     {@link https://developers.google.com/identity/protocols/application-default-credentials Application Default Credentials},
   *     your project ID will be detected automatically.
   * @param {string} [options.apiEndpoint] - The domain name of the
   *     API remote host.
   * @param {gax.ClientConfig} [options.clientConfig] - Client configuration override.
   *     Follows the structure of {@link gapicConfig}.
   * @param {boolean} [options.fallback] - Use HTTP fallback mode.
   *     In fallback mode, a special browser-compatible transport implementation is used
   *     instead of gRPC transport. In browser context (if the `window` object is defined)
   *     the fallback mode is enabled automatically; set `options.fallback` to `false`
   *     if you need to override this behavior.
   */
  constructor(opts?: ClientOptions) {
    // Ensure that options include all the required fields.
    const staticMembers = this.constructor as typeof TopicStatsServiceClient;
    const servicePath = opts?.servicePath || opts?.apiEndpoint || staticMembers.servicePath;
    const port = opts?.port || staticMembers.port;
    const clientConfig = opts?.clientConfig ?? {};
    const fallback = opts?.fallback ?? (typeof window !== 'undefined' && typeof window?.fetch === 'function');
    opts = Object.assign({servicePath, port, clientConfig, fallback}, opts);

    // If scopes are unset in options and we're connecting to a non-default endpoint, set scopes just in case.
    if (servicePath !== staticMembers.servicePath && !('scopes' in opts)) {
      opts['scopes'] = staticMembers.scopes;
    }

    // Choose either gRPC or proto-over-HTTP implementation of google-gax.
    this._gaxModule = opts.fallback ? gax.fallback : gax;

    // Create a `gaxGrpc` object, with any grpc-specific options sent to the client.
    this._gaxGrpc = new this._gaxModule.GrpcClient(opts);

    // Save options to use in initialize() method.
    this._opts = opts;

    // Save the auth object to the client, for use by other methods.
    this.auth = (this._gaxGrpc.auth as gax.GoogleAuth);

    // Set the default scopes in auth client if needed.
    if (servicePath === staticMembers.servicePath) {
      this.auth.defaultScopes = staticMembers.scopes;
    }

    // Determine the client header string.
    const clientHeader = [
      `gax/${this._gaxModule.version}`,
      `gapic/${version}`,
    ];
    if (typeof process !== 'undefined' && 'versions' in process) {
      clientHeader.push(`gl-node/${process.versions.node}`);
    } else {
      clientHeader.push(`gl-web/${this._gaxModule.version}`);
    }
    if (!opts.fallback) {
      clientHeader.push(`grpc/${this._gaxGrpc.grpcVersion}`);
    }
    if (opts.libName && opts.libVersion) {
      clientHeader.push(`${opts.libName}/${opts.libVersion}`);
    }
    // Load the applicable protos.
    // For Node.js, pass the path to JSON proto file.
    // For browsers, pass the JSON content.

    const nodejsProtoPath = path.join(__dirname, '..', '..', 'protos', 'protos.json');
    this._protos = this._gaxGrpc.loadProto(
      opts.fallback ?
        // eslint-disable-next-line @typescript-eslint/no-var-requires
        require("../../protos/protos.json") :
        nodejsProtoPath
    );

    // This API contains "path templates"; forward-slash-separated
    // identifiers to uniquely identify resources within the API.
    // Create useful helper objects for these.
    this.pathTemplates = {
      subscriptionPathTemplate: new this._gaxModule.PathTemplate(
        'projects/{project}/locations/{location}/subscriptions/{subscription}'
      ),
      topicPathTemplate: new this._gaxModule.PathTemplate(
        'projects/{project}/locations/{location}/topics/{topic}'
      ),
    };

    // Put together the default options sent with requests.
    this._defaults = this._gaxGrpc.constructSettings(
        'google.cloud.pubsublite.v1.TopicStatsService', gapicConfig as gax.ClientConfig,
        opts.clientConfig || {}, {'x-goog-api-client': clientHeader.join(' ')});

    // Set up a dictionary of "inner API calls"; the core implementation
    // of calling the API is handled in `google-gax`, with this code
    // merely providing the destination and request information.
    this.innerApiCalls = {};
  }

  /**
   * Initialize the client.
   * Performs asynchronous operations (such as authentication) and prepares the client.
   * This function will be called automatically when any class method is called for the
   * first time, but if you need to initialize it before calling an actual method,
   * feel free to call initialize() directly.
   *
   * You can await on this method if you want to make sure the client is initialized.
   *
   * @returns {Promise} A promise that resolves to an authenticated service stub.
   */
  initialize() {
    // If the client stub promise is already initialized, return immediately.
    if (this.topicStatsServiceStub) {
      return this.topicStatsServiceStub;
    }

    // Put together the "service stub" for
    // google.cloud.pubsublite.v1.TopicStatsService.
    this.topicStatsServiceStub = this._gaxGrpc.createStub(
        this._opts.fallback ?
          (this._protos as protobuf.Root).lookupService('google.cloud.pubsublite.v1.TopicStatsService') :
          // eslint-disable-next-line @typescript-eslint/no-explicit-any
          (this._protos as any).google.cloud.pubsublite.v1.TopicStatsService,
        this._opts) as Promise<{[method: string]: Function}>;

    // Iterate over each of the methods that the service provides
    // and create an API call method for each.
    const topicStatsServiceStubMethods =
        ['computeMessageStats', 'computeHeadCursor'];
    for (const methodName of topicStatsServiceStubMethods) {
      const callPromise = this.topicStatsServiceStub.then(
        stub => (...args: Array<{}>) => {
          if (this._terminated) {
            return Promise.reject('The client has already been closed.');
          }
          const func = stub[methodName];
          return func.apply(stub, args);
        },
        (err: Error|null|undefined) => () => {
          throw err;
        });

      const descriptor =
        undefined;
      const apiCall = this._gaxModule.createApiCall(
        callPromise,
        this._defaults[methodName],
        descriptor
      );

      this.innerApiCalls[methodName] = apiCall;
    }

    return this.topicStatsServiceStub;
  }

  /**
   * The DNS address for this API service.
   * @returns {string} The DNS address for this service.
   */
  static get servicePath() {
    return 'pubsublite.googleapis.com';
  }

  /**
   * The DNS address for this API service - same as servicePath(),
   * exists for compatibility reasons.
   * @returns {string} The DNS address for this service.
   */
  static get apiEndpoint() {
    return 'pubsublite.googleapis.com';
  }

  /**
   * The port for this API service.
   * @returns {number} The default port for this service.
   */
  static get port() {
    return 443;
  }

  /**
   * The scopes needed to make gRPC calls for every method defined
   * in this service.
   * @returns {string[]} List of default scopes.
   */
  static get scopes() {
    return [
      'https://www.googleapis.com/auth/cloud-platform'
    ];
  }

  getProjectId(): Promise<string>;
  getProjectId(callback: Callback<string, undefined, undefined>): void;
  /**
   * Return the project ID used by this class.
   * @returns {Promise} A promise that resolves to string containing the project ID.
   */
  getProjectId(callback?: Callback<string, undefined, undefined>):
      Promise<string>|void {
    if (callback) {
      this.auth.getProjectId(callback);
      return;
    }
    return this.auth.getProjectId();
  }

  // -------------------
  // -- Service calls --
  // -------------------
  computeMessageStats(
      request: protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.pubsublite.v1.IComputeMessageStatsResponse,
        protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest|undefined, {}|undefined
      ]>;
  computeMessageStats(
      request: protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsResponse,
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest|null|undefined,
          {}|null|undefined>): void;
  computeMessageStats(
      request: protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest,
      callback: Callback<
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsResponse,
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Compute statistics about a range of messages in a given topic and
 * partition.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.topic
 *   Required. The topic for which we should compute message stats.
 * @param {number} request.partition
 *   Required. The partition for which we should compute message stats.
 * @param {google.cloud.pubsublite.v1.Cursor} request.startCursor
 *   The inclusive start of the range.
 * @param {google.cloud.pubsublite.v1.Cursor} request.endCursor
 *   The exclusive end of the range. The range is empty if end_cursor <=
 *   start_cursor. Specifying a start_cursor before the first message and an
 *   end_cursor after the last message will retrieve all messages.
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [ComputeMessageStatsResponse]{@link google.cloud.pubsublite.v1.ComputeMessageStatsResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.computeMessageStats(request);
 */
  computeMessageStats(
      request: protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsResponse,
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsResponse,
          protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.pubsublite.v1.IComputeMessageStatsResponse,
        protos.google.cloud.pubsublite.v1.IComputeMessageStatsRequest|undefined, {}|undefined
      ]>|void {
    request = request || {};
    let options: CallOptions;
    if (typeof optionsOrCallback === 'function' && callback === undefined) {
      callback = optionsOrCallback;
      options = {};
    }
    else {
      options = optionsOrCallback as CallOptions;
    }
    options = options || {};
    options.otherArgs = options.otherArgs || {};
    options.otherArgs.headers = options.otherArgs.headers || {};
    options.otherArgs.headers[
      'x-goog-request-params'
    ] = gax.routingHeader.fromParams({
      'topic': request.topic || '',
    });
    this.initialize();
    return this.innerApiCalls.computeMessageStats(request, options, callback);
  }
  computeHeadCursor(
      request: protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.pubsublite.v1.IComputeHeadCursorResponse,
        protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest|undefined, {}|undefined
      ]>;
  computeHeadCursor(
      request: protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorResponse,
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest|null|undefined,
          {}|null|undefined>): void;
  computeHeadCursor(
      request: protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest,
      callback: Callback<
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorResponse,
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Compute the head cursor for the partition.
 * The head cursor’s offset is guaranteed to be before or equal to all
 * messages which have not yet been acknowledged to be published, and
 * greater than the offset of any message whose publish has already
 * been acknowledged. It is 0 if there have never been messages on the
 * partition.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.topic
 *   Required. The topic for which we should compute the head cursor.
 * @param {number} request.partition
 *   Required. The partition for which we should compute the head cursor.
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [ComputeHeadCursorResponse]{@link google.cloud.pubsublite.v1.ComputeHeadCursorResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.computeHeadCursor(request);
 */
  computeHeadCursor(
      request: protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorResponse,
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorResponse,
          protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.pubsublite.v1.IComputeHeadCursorResponse,
        protos.google.cloud.pubsublite.v1.IComputeHeadCursorRequest|undefined, {}|undefined
      ]>|void {
    request = request || {};
    let options: CallOptions;
    if (typeof optionsOrCallback === 'function' && callback === undefined) {
      callback = optionsOrCallback;
      options = {};
    }
    else {
      options = optionsOrCallback as CallOptions;
    }
    options = options || {};
    options.otherArgs = options.otherArgs || {};
    options.otherArgs.headers = options.otherArgs.headers || {};
    options.otherArgs.headers[
      'x-goog-request-params'
    ] = gax.routingHeader.fromParams({
      'topic': request.topic || '',
    });
    this.initialize();
    return this.innerApiCalls.computeHeadCursor(request, options, callback);
  }

  // --------------------
  // -- Path templates --
  // --------------------

  /**
   * Return a fully-qualified subscription resource name string.
   *
   * @param {string} project
   * @param {string} location
   * @param {string} subscription
   * @returns {string} Resource name string.
   */
  subscriptionPath(project:string,location:string,subscription:string) {
    return this.pathTemplates.subscriptionPathTemplate.render({
      project: project,
      location: location,
      subscription: subscription,
    });
  }

  /**
   * Parse the project from Subscription resource.
   *
   * @param {string} subscriptionName
   *   A fully-qualified path representing Subscription resource.
   * @returns {string} A string representing the project.
   */
  matchProjectFromSubscriptionName(subscriptionName: string) {
    return this.pathTemplates.subscriptionPathTemplate.match(subscriptionName).project;
  }

  /**
   * Parse the location from Subscription resource.
   *
   * @param {string} subscriptionName
   *   A fully-qualified path representing Subscription resource.
   * @returns {string} A string representing the location.
   */
  matchLocationFromSubscriptionName(subscriptionName: string) {
    return this.pathTemplates.subscriptionPathTemplate.match(subscriptionName).location;
  }

  /**
   * Parse the subscription from Subscription resource.
   *
   * @param {string} subscriptionName
   *   A fully-qualified path representing Subscription resource.
   * @returns {string} A string representing the subscription.
   */
  matchSubscriptionFromSubscriptionName(subscriptionName: string) {
    return this.pathTemplates.subscriptionPathTemplate.match(subscriptionName).subscription;
  }

  /**
   * Return a fully-qualified topic resource name string.
   *
   * @param {string} project
   * @param {string} location
   * @param {string} topic
   * @returns {string} Resource name string.
   */
  topicPath(project:string,location:string,topic:string) {
    return this.pathTemplates.topicPathTemplate.render({
      project: project,
      location: location,
      topic: topic,
    });
  }

  /**
   * Parse the project from Topic resource.
   *
   * @param {string} topicName
   *   A fully-qualified path representing Topic resource.
   * @returns {string} A string representing the project.
   */
  matchProjectFromTopicName(topicName: string) {
    return this.pathTemplates.topicPathTemplate.match(topicName).project;
  }

  /**
   * Parse the location from Topic resource.
   *
   * @param {string} topicName
   *   A fully-qualified path representing Topic resource.
   * @returns {string} A string representing the location.
   */
  matchLocationFromTopicName(topicName: string) {
    return this.pathTemplates.topicPathTemplate.match(topicName).location;
  }

  /**
   * Parse the topic from Topic resource.
   *
   * @param {string} topicName
   *   A fully-qualified path representing Topic resource.
   * @returns {string} A string representing the topic.
   */
  matchTopicFromTopicName(topicName: string) {
    return this.pathTemplates.topicPathTemplate.match(topicName).topic;
  }

  /**
   * Terminate the gRPC channel and close the client.
   *
   * The client will no longer be usable and all future behavior is undefined.
   * @returns {Promise} A promise that resolves when the client is closed.
   */
  close(): Promise<void> {
    this.initialize();
    if (!this._terminated) {
      return this.topicStatsServiceStub!.then(stub => {
        this._terminated = true;
        stub.close();
      });
    }
    return Promise.resolve();
  }
}
