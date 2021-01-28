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
 * `src/v1/agent_endpoint_service_client_config.json`.
 * This file defines retry strategy and timeouts for all API methods in this library.
 */
import * as gapicConfig from './agent_endpoint_service_client_config.json';

const version = require('../../../package.json').version;

/**
 *  OS Config agent endpoint API.
 * @class
 * @memberof v1
 */
export class AgentEndpointServiceClient {
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
  agentEndpointServiceStub?: Promise<{[name: string]: Function}>;

  /**
   * Construct an instance of AgentEndpointServiceClient.
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
    const staticMembers = this.constructor as typeof AgentEndpointServiceClient;
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

    // Some of the methods on this service provide streaming responses.
    // Provide descriptors for these.
    this.descriptors.stream = {
      receiveTaskNotification: new this._gaxModule.StreamDescriptor(gax.StreamType.SERVER_STREAMING)
    };

    // Put together the default options sent with requests.
    this._defaults = this._gaxGrpc.constructSettings(
        'google.cloud.osconfig.agentendpoint.v1.AgentEndpointService', gapicConfig as gax.ClientConfig,
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
    if (this.agentEndpointServiceStub) {
      return this.agentEndpointServiceStub;
    }

    // Put together the "service stub" for
    // google.cloud.osconfig.agentendpoint.v1.AgentEndpointService.
    this.agentEndpointServiceStub = this._gaxGrpc.createStub(
        this._opts.fallback ?
          (this._protos as protobuf.Root).lookupService('google.cloud.osconfig.agentendpoint.v1.AgentEndpointService') :
          // eslint-disable-next-line @typescript-eslint/no-explicit-any
          (this._protos as any).google.cloud.osconfig.agentendpoint.v1.AgentEndpointService,
        this._opts) as Promise<{[method: string]: Function}>;

    // Iterate over each of the methods that the service provides
    // and create an API call method for each.
    const agentEndpointServiceStubMethods =
        ['receiveTaskNotification', 'startNextTask', 'reportTaskProgress', 'reportTaskComplete', 'registerAgent', 'reportInventory'];
    for (const methodName of agentEndpointServiceStubMethods) {
      const callPromise = this.agentEndpointServiceStub.then(
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
        this.descriptors.stream[methodName] ||
        undefined;
      const apiCall = this._gaxModule.createApiCall(
        callPromise,
        this._defaults[methodName],
        descriptor
      );

      this.innerApiCalls[methodName] = apiCall;
    }

    return this.agentEndpointServiceStub;
  }

  /**
   * The DNS address for this API service.
   * @returns {string} The DNS address for this service.
   */
  static get servicePath() {
    return 'osconfig.googleapis.com';
  }

  /**
   * The DNS address for this API service - same as servicePath(),
   * exists for compatibility reasons.
   * @returns {string} The DNS address for this service.
   */
  static get apiEndpoint() {
    return 'osconfig.googleapis.com';
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
    return [];
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
  startNextTask(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest|undefined, {}|undefined
      ]>;
  startNextTask(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest|null|undefined,
          {}|null|undefined>): void;
  startNextTask(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Signals the start of a task execution and returns the task info.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.instanceIdToken
 *   Required. This is the Compute Engine instance identity token described in
 *   https://cloud.google.com/compute/docs/instances/verifying-instance-identity
 *   where the audience is 'osconfig.googleapis.com' and the format is 'full'.
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [StartNextTaskResponse]{@link google.cloud.osconfig.agentendpoint.v1.StartNextTaskResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.startNextTask(request);
 */
  startNextTask(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IStartNextTaskRequest|undefined, {}|undefined
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
    this.initialize();
    return this.innerApiCalls.startNextTask(request, options, callback);
  }
  reportTaskProgress(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest|undefined, {}|undefined
      ]>;
  reportTaskProgress(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest|null|undefined,
          {}|null|undefined>): void;
  reportTaskProgress(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Signals an intermediary progress checkpoint in task execution.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.instanceIdToken
 *   Required. This is the Compute Engine instance identity token described in
 *   https://cloud.google.com/compute/docs/instances/verifying-instance-identity
 *   where the audience is 'osconfig.googleapis.com' and the format is 'full'.
 * @param {string} request.taskId
 *   Required. Unique identifier of the task this applies to.
 * @param {google.cloud.osconfig.agentendpoint.v1.TaskType} request.taskType
 *   Required. The type of task to report progress on.
 *
 *   Progress must include the appropriate message based on this enum as
 *   specified below:
 *   APPLY_PATCHES = ApplyPatchesTaskProgress
 *   EXEC_STEP = Progress not supported for this type.
 * @param {google.cloud.osconfig.agentendpoint.v1.ApplyPatchesTaskProgress} request.applyPatchesTaskProgress
 *   Details about the progress of the apply patches task.
 * @param {google.cloud.osconfig.agentendpoint.v1.ExecStepTaskProgress} request.execStepTaskProgress
 *   Details about the progress of the exec step task.
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [ReportTaskProgressResponse]{@link google.cloud.osconfig.agentendpoint.v1.ReportTaskProgressResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.reportTaskProgress(request);
 */
  reportTaskProgress(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskProgressRequest|undefined, {}|undefined
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
    this.initialize();
    return this.innerApiCalls.reportTaskProgress(request, options, callback);
  }
  reportTaskComplete(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest|undefined, {}|undefined
      ]>;
  reportTaskComplete(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest|null|undefined,
          {}|null|undefined>): void;
  reportTaskComplete(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Signals that the task execution is complete and optionally returns the next
 * task.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.instanceIdToken
 *   Required. This is the Compute Engine instance identity token described in
 *   https://cloud.google.com/compute/docs/instances/verifying-instance-identity
 *   where the audience is 'osconfig.googleapis.com' and the format is 'full'.
 * @param {string} request.taskId
 *   Required. Unique identifier of the task this applies to.
 * @param {google.cloud.osconfig.agentendpoint.v1.TaskType} request.taskType
 *   Required. The type of task to report completed.
 *
 *   The output must include the appropriate message based on the following
 *   enum values:
 *   APPLY_PATCHES = ApplyPatchesTaskOutput
 *   EXEC_STEP = ExecStepTaskOutput
 * @param {string} request.errorMessage
 *   Descriptive error message if the task execution ended in error.
 * @param {google.cloud.osconfig.agentendpoint.v1.ApplyPatchesTaskOutput} request.applyPatchesTaskOutput
 *   Final output details of the apply patches task;
 * @param {google.cloud.osconfig.agentendpoint.v1.ExecStepTaskOutput} request.execStepTaskOutput
 *   Final output details of the exec step task;
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [ReportTaskCompleteResponse]{@link google.cloud.osconfig.agentendpoint.v1.ReportTaskCompleteResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.reportTaskComplete(request);
 */
  reportTaskComplete(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IReportTaskCompleteRequest|undefined, {}|undefined
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
    this.initialize();
    return this.innerApiCalls.reportTaskComplete(request, options, callback);
  }
  registerAgent(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest|undefined, {}|undefined
      ]>;
  registerAgent(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest|null|undefined,
          {}|null|undefined>): void;
  registerAgent(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Registers the agent running on the VM.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.instanceIdToken
 *   Required. This is the Compute Engine instance identity token described in
 *   https://cloud.google.com/compute/docs/instances/verifying-instance-identity
 *   where the audience is 'osconfig.googleapis.com' and the format is 'full'.
 * @param {string} request.agentVersion
 *   Required. The version of the agent.
 * @param {string[]} request.supportedCapabilities
 *   Required. The capabilities supported by the agent. Supported values are:
 *   PATCH_GA
 *   GUEST_POLICY_BETA
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [RegisterAgentResponse]{@link google.cloud.osconfig.agentendpoint.v1.RegisterAgentResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.registerAgent(request);
 */
  registerAgent(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IRegisterAgentRequest|undefined, {}|undefined
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
    this.initialize();
    return this.innerApiCalls.registerAgent(request, options, callback);
  }
  reportInventory(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest,
      options?: CallOptions):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest|undefined, {}|undefined
      ]>;
  reportInventory(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest,
      options: CallOptions,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest|null|undefined,
          {}|null|undefined>): void;
  reportInventory(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest,
      callback: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest|null|undefined,
          {}|null|undefined>): void;
/**
 * Reports the VMs current inventory.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.instanceIdToken
 *   Required. This is the Compute Engine instance identity token described in
 *   https://cloud.google.com/compute/docs/instances/verifying-instance-identity
 *   where the audience is 'osconfig.googleapis.com' and the format is 'full'.
 * @param {string} request.inventoryChecksum
 *   Required. This is a client created checksum that should be generated based on the
 *   contents of the reported inventory.  This will be used by the service to
 *   determine if it has the latest version of inventory.
 * @param {google.cloud.osconfig.agentendpoint.v1.Inventory} [request.inventory]
 *   Optional. This is the details of the inventory.  Should only be provided if the
 *   inventory has changed since the last report, or if instructed by the
 *   service to provide full inventory.
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Promise} - The promise which resolves to an array.
 *   The first element of the array is an object representing [ReportInventoryResponse]{@link google.cloud.osconfig.agentendpoint.v1.ReportInventoryResponse}.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#regular-methods)
 *   for more details and examples.
 * @example
 * const [response] = await client.reportInventory(request);
 */
  reportInventory(
      request: protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest,
      optionsOrCallback?: CallOptions|Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest|null|undefined,
          {}|null|undefined>,
      callback?: Callback<
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryResponse,
          protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest|null|undefined,
          {}|null|undefined>):
      Promise<[
        protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryResponse,
        protos.google.cloud.osconfig.agentendpoint.v1.IReportInventoryRequest|undefined, {}|undefined
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
    this.initialize();
    return this.innerApiCalls.reportInventory(request, options, callback);
  }

/**
 * Stream established by client to receive Task notifications.
 *
 * @param {Object} request
 *   The request object that will be sent.
 * @param {string} request.instanceIdToken
 *   Required. This is the Compute Engine instance identity token described in
 *   https://cloud.google.com/compute/docs/instances/verifying-instance-identity
 *   where the audience is 'osconfig.googleapis.com' and the format is 'full'.
 * @param {string} request.agentVersion
 *   Required. The version of the agent making the request.
 * @param {object} [options]
 *   Call options. See {@link https://googleapis.dev/nodejs/google-gax/latest/interfaces/CallOptions.html|CallOptions} for more details.
 * @returns {Stream}
 *   An object stream which emits [ReceiveTaskNotificationResponse]{@link google.cloud.osconfig.agentendpoint.v1.ReceiveTaskNotificationResponse} on 'data' event.
 *   Please see the
 *   [documentation](https://github.com/googleapis/gax-nodejs/blob/master/client-libraries.md#server-streaming)
 *   for more details and examples.
 * @example
 * const stream = client.receiveTaskNotification(request);
 * stream.on('data', (response) => { ... });
 * stream.on('end', () => { ... });
 */
  receiveTaskNotification(
      request?: protos.google.cloud.osconfig.agentendpoint.v1.IReceiveTaskNotificationRequest,
      options?: CallOptions):
    gax.CancellableStream{
    request = request || {};
    options = options || {};
    this.initialize();
    return this.innerApiCalls.receiveTaskNotification(request, options);
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
      return this.agentEndpointServiceStub!.then(stub => {
        this._terminated = true;
        stub.close();
      });
    }
    return Promise.resolve();
  }
}
