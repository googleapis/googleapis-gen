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

// Code generated by protoc-gen-go_gapic. DO NOT EDIT.

package aiplatform

import (
	"context"
	"fmt"
	"math"
	"net/url"
	"time"

	"cloud.google.com/go/longrunning"
	lroauto "cloud.google.com/go/longrunning/autogen"
	"github.com/golang/protobuf/proto"
	gax "github.com/googleapis/gax-go/v2"
	"google.golang.org/api/iterator"
	"google.golang.org/api/option"
	"google.golang.org/api/option/internaloption"
	gtransport "google.golang.org/api/transport/grpc"
	aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"
	longrunningpb "google.golang.org/genproto/googleapis/longrunning"
	"google.golang.org/grpc"
	"google.golang.org/grpc/metadata"
)

var newEndpointClientHook clientHook

// EndpointCallOptions contains the retry settings for each method of EndpointClient.
type EndpointCallOptions struct {
	CreateEndpoint []gax.CallOption
	GetEndpoint    []gax.CallOption
	ListEndpoints  []gax.CallOption
	UpdateEndpoint []gax.CallOption
	DeleteEndpoint []gax.CallOption
	DeployModel    []gax.CallOption
	UndeployModel  []gax.CallOption
}

func defaultEndpointClientOptions() []option.ClientOption {
	return []option.ClientOption{
		internaloption.WithDefaultEndpoint("aiplatform.googleapis.com:443"),
		internaloption.WithDefaultMTLSEndpoint("aiplatform.mtls.googleapis.com:443"),
		internaloption.WithDefaultAudience("https://aiplatform.googleapis.com/"),
		internaloption.WithDefaultScopes(DefaultAuthScopes()...),
		option.WithGRPCDialOption(grpc.WithDisableServiceConfig()),
		option.WithGRPCDialOption(grpc.WithDefaultCallOptions(
			grpc.MaxCallRecvMsgSize(math.MaxInt32))),
	}
}

func defaultEndpointCallOptions() *EndpointCallOptions {
	return &EndpointCallOptions{
		CreateEndpoint: []gax.CallOption{},
		GetEndpoint:    []gax.CallOption{},
		ListEndpoints:  []gax.CallOption{},
		UpdateEndpoint: []gax.CallOption{},
		DeleteEndpoint: []gax.CallOption{},
		DeployModel:    []gax.CallOption{},
		UndeployModel:  []gax.CallOption{},
	}
}

// EndpointClient is a client for interacting with Cloud AI Platform API.
//
// Methods, except Close, may be called concurrently. However, fields must not be modified concurrently with method calls.
type EndpointClient struct {
	// Connection pool of gRPC connections to the service.
	connPool gtransport.ConnPool

	// flag to opt out of default deadlines via GOOGLE_API_GO_EXPERIMENTAL_DISABLE_DEFAULT_DEADLINE
	disableDeadlines bool

	// The gRPC API client.
	endpointClient aiplatformpb.EndpointServiceClient

	// LROClient is used internally to handle longrunning operations.
	// It is exposed so that its CallOptions can be modified if required.
	// Users should not Close this client.
	LROClient *lroauto.OperationsClient

	// The call options for this service.
	CallOptions *EndpointCallOptions

	// The x-goog-* metadata to be sent with each request.
	xGoogMetadata metadata.MD
}

// NewEndpointClient creates a new endpoint service client.
//
func NewEndpointClient(ctx context.Context, opts ...option.ClientOption) (*EndpointClient, error) {
	clientOpts := defaultEndpointClientOptions()

	if newEndpointClientHook != nil {
		hookOpts, err := newEndpointClientHook(ctx, clientHookParams{})
		if err != nil {
			return nil, err
		}
		clientOpts = append(clientOpts, hookOpts...)
	}

	disableDeadlines, err := checkDisableDeadlines()
	if err != nil {
		return nil, err
	}

	connPool, err := gtransport.DialPool(ctx, append(clientOpts, opts...)...)
	if err != nil {
		return nil, err
	}
	c := &EndpointClient{
		connPool:         connPool,
		disableDeadlines: disableDeadlines,
		CallOptions:      defaultEndpointCallOptions(),

		endpointClient: aiplatformpb.NewEndpointServiceClient(connPool),
	}
	c.setGoogleClientInfo()

	c.LROClient, err = lroauto.NewOperationsClient(ctx, gtransport.WithConnPool(connPool))
	if err != nil {
		// This error "should not happen", since we are just reusing old connection pool
		// and never actually need to dial.
		// If this does happen, we could leak connp. However, we cannot close conn:
		// If the user invoked the constructor with option.WithGRPCConn,
		// we would close a connection that's still in use.
		// TODO: investigate error conditions.
		return nil, err
	}
	return c, nil
}

// Connection returns a connection to the API service.
//
// Deprecated.
func (c *EndpointClient) Connection() *grpc.ClientConn {
	return c.connPool.Conn()
}

// Close closes the connection to the API service. The user should invoke this when
// the client is no longer required.
func (c *EndpointClient) Close() error {
	return c.connPool.Close()
}

// setGoogleClientInfo sets the name and version of the application in
// the `x-goog-api-client` header passed on each request. Intended for
// use by Google-written clients.
func (c *EndpointClient) setGoogleClientInfo(keyval ...string) {
	kv := append([]string{"gl-go", versionGo()}, keyval...)
	kv = append(kv, "gapic", versionClient, "gax", gax.Version, "grpc", grpc.Version)
	c.xGoogMetadata = metadata.Pairs("x-goog-api-client", gax.XGoogHeader(kv...))
}

// CreateEndpoint creates an Endpoint.
func (c *EndpointClient) CreateEndpoint(ctx context.Context, req *aiplatformpb.CreateEndpointRequest, opts ...gax.CallOption) (*CreateEndpointOperation, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.CreateEndpoint[0:len(c.CallOptions.CreateEndpoint):len(c.CallOptions.CreateEndpoint)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.endpointClient.CreateEndpoint(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &CreateEndpointOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// GetEndpoint gets an Endpoint.
func (c *EndpointClient) GetEndpoint(ctx context.Context, req *aiplatformpb.GetEndpointRequest, opts ...gax.CallOption) (*aiplatformpb.Endpoint, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetEndpoint[0:len(c.CallOptions.GetEndpoint):len(c.CallOptions.GetEndpoint)], opts...)
	var resp *aiplatformpb.Endpoint
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.endpointClient.GetEndpoint(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// ListEndpoints lists Endpoints in a Location.
func (c *EndpointClient) ListEndpoints(ctx context.Context, req *aiplatformpb.ListEndpointsRequest, opts ...gax.CallOption) *EndpointIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ListEndpoints[0:len(c.CallOptions.ListEndpoints):len(c.CallOptions.ListEndpoints)], opts...)
	it := &EndpointIterator{}
	req = proto.Clone(req).(*aiplatformpb.ListEndpointsRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*aiplatformpb.Endpoint, string, error) {
		var resp *aiplatformpb.ListEndpointsResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.endpointClient.ListEndpoints(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetEndpoints(), resp.GetNextPageToken(), nil
	}
	fetch := func(pageSize int, pageToken string) (string, error) {
		items, nextPageToken, err := it.InternalFetch(pageSize, pageToken)
		if err != nil {
			return "", err
		}
		it.items = append(it.items, items...)
		return nextPageToken, nil
	}
	it.pageInfo, it.nextFunc = iterator.NewPageInfo(fetch, it.bufLen, it.takeBuf)
	it.pageInfo.MaxSize = int(req.GetPageSize())
	it.pageInfo.Token = req.GetPageToken()
	return it
}

// UpdateEndpoint updates an Endpoint.
func (c *EndpointClient) UpdateEndpoint(ctx context.Context, req *aiplatformpb.UpdateEndpointRequest, opts ...gax.CallOption) (*aiplatformpb.Endpoint, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "endpoint.name", url.QueryEscape(req.GetEndpoint().GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.UpdateEndpoint[0:len(c.CallOptions.UpdateEndpoint):len(c.CallOptions.UpdateEndpoint)], opts...)
	var resp *aiplatformpb.Endpoint
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.endpointClient.UpdateEndpoint(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// DeleteEndpoint deletes an Endpoint.
func (c *EndpointClient) DeleteEndpoint(ctx context.Context, req *aiplatformpb.DeleteEndpointRequest, opts ...gax.CallOption) (*DeleteEndpointOperation, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.DeleteEndpoint[0:len(c.CallOptions.DeleteEndpoint):len(c.CallOptions.DeleteEndpoint)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.endpointClient.DeleteEndpoint(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &DeleteEndpointOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// DeployModel deploys a Model into this Endpoint, creating a DeployedModel within it.
func (c *EndpointClient) DeployModel(ctx context.Context, req *aiplatformpb.DeployModelRequest, opts ...gax.CallOption) (*DeployModelOperation, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "endpoint", url.QueryEscape(req.GetEndpoint())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.DeployModel[0:len(c.CallOptions.DeployModel):len(c.CallOptions.DeployModel)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.endpointClient.DeployModel(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &DeployModelOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// UndeployModel undeploys a Model from an Endpoint, removing a DeployedModel from it, and
// freeing all resources it’s using.
func (c *EndpointClient) UndeployModel(ctx context.Context, req *aiplatformpb.UndeployModelRequest, opts ...gax.CallOption) (*UndeployModelOperation, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "endpoint", url.QueryEscape(req.GetEndpoint())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.UndeployModel[0:len(c.CallOptions.UndeployModel):len(c.CallOptions.UndeployModel)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.endpointClient.UndeployModel(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &UndeployModelOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// CreateEndpointOperation manages a long-running operation from CreateEndpoint.
type CreateEndpointOperation struct {
	lro *longrunning.Operation
}

// CreateEndpointOperation returns a new CreateEndpointOperation from a given name.
// The name must be that of a previously created CreateEndpointOperation, possibly from a different process.
func (c *EndpointClient) CreateEndpointOperation(name string) *CreateEndpointOperation {
	return &CreateEndpointOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *CreateEndpointOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aiplatformpb.Endpoint, error) {
	var resp aiplatformpb.Endpoint
	if err := op.lro.WaitWithInterval(ctx, &resp, time.Minute, opts...); err != nil {
		return nil, err
	}
	return &resp, nil
}

// Poll fetches the latest state of the long-running operation.
//
// Poll also fetches the latest metadata, which can be retrieved by Metadata.
//
// If Poll fails, the error is returned and op is unmodified. If Poll succeeds and
// the operation has completed with failure, the error is returned and op.Done will return true.
// If Poll succeeds and the operation has completed successfully,
// op.Done will return true, and the response of the operation is returned.
// If Poll succeeds and the operation has not completed, the returned response and error are both nil.
func (op *CreateEndpointOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aiplatformpb.Endpoint, error) {
	var resp aiplatformpb.Endpoint
	if err := op.lro.Poll(ctx, &resp, opts...); err != nil {
		return nil, err
	}
	if !op.Done() {
		return nil, nil
	}
	return &resp, nil
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *CreateEndpointOperation) Metadata() (*aiplatformpb.CreateEndpointOperationMetadata, error) {
	var meta aiplatformpb.CreateEndpointOperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *CreateEndpointOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *CreateEndpointOperation) Name() string {
	return op.lro.Name()
}

// DeleteEndpointOperation manages a long-running operation from DeleteEndpoint.
type DeleteEndpointOperation struct {
	lro *longrunning.Operation
}

// DeleteEndpointOperation returns a new DeleteEndpointOperation from a given name.
// The name must be that of a previously created DeleteEndpointOperation, possibly from a different process.
func (c *EndpointClient) DeleteEndpointOperation(name string) *DeleteEndpointOperation {
	return &DeleteEndpointOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *DeleteEndpointOperation) Wait(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.WaitWithInterval(ctx, nil, time.Minute, opts...)
}

// Poll fetches the latest state of the long-running operation.
//
// Poll also fetches the latest metadata, which can be retrieved by Metadata.
//
// If Poll fails, the error is returned and op is unmodified. If Poll succeeds and
// the operation has completed with failure, the error is returned and op.Done will return true.
// If Poll succeeds and the operation has completed successfully,
// op.Done will return true, and the response of the operation is returned.
// If Poll succeeds and the operation has not completed, the returned response and error are both nil.
func (op *DeleteEndpointOperation) Poll(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.Poll(ctx, nil, opts...)
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *DeleteEndpointOperation) Metadata() (*aiplatformpb.DeleteOperationMetadata, error) {
	var meta aiplatformpb.DeleteOperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *DeleteEndpointOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *DeleteEndpointOperation) Name() string {
	return op.lro.Name()
}

// DeployModelOperation manages a long-running operation from DeployModel.
type DeployModelOperation struct {
	lro *longrunning.Operation
}

// DeployModelOperation returns a new DeployModelOperation from a given name.
// The name must be that of a previously created DeployModelOperation, possibly from a different process.
func (c *EndpointClient) DeployModelOperation(name string) *DeployModelOperation {
	return &DeployModelOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *DeployModelOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aiplatformpb.DeployModelResponse, error) {
	var resp aiplatformpb.DeployModelResponse
	if err := op.lro.WaitWithInterval(ctx, &resp, time.Minute, opts...); err != nil {
		return nil, err
	}
	return &resp, nil
}

// Poll fetches the latest state of the long-running operation.
//
// Poll also fetches the latest metadata, which can be retrieved by Metadata.
//
// If Poll fails, the error is returned and op is unmodified. If Poll succeeds and
// the operation has completed with failure, the error is returned and op.Done will return true.
// If Poll succeeds and the operation has completed successfully,
// op.Done will return true, and the response of the operation is returned.
// If Poll succeeds and the operation has not completed, the returned response and error are both nil.
func (op *DeployModelOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aiplatformpb.DeployModelResponse, error) {
	var resp aiplatformpb.DeployModelResponse
	if err := op.lro.Poll(ctx, &resp, opts...); err != nil {
		return nil, err
	}
	if !op.Done() {
		return nil, nil
	}
	return &resp, nil
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *DeployModelOperation) Metadata() (*aiplatformpb.DeployModelOperationMetadata, error) {
	var meta aiplatformpb.DeployModelOperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *DeployModelOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *DeployModelOperation) Name() string {
	return op.lro.Name()
}

// UndeployModelOperation manages a long-running operation from UndeployModel.
type UndeployModelOperation struct {
	lro *longrunning.Operation
}

// UndeployModelOperation returns a new UndeployModelOperation from a given name.
// The name must be that of a previously created UndeployModelOperation, possibly from a different process.
func (c *EndpointClient) UndeployModelOperation(name string) *UndeployModelOperation {
	return &UndeployModelOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *UndeployModelOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aiplatformpb.UndeployModelResponse, error) {
	var resp aiplatformpb.UndeployModelResponse
	if err := op.lro.WaitWithInterval(ctx, &resp, time.Minute, opts...); err != nil {
		return nil, err
	}
	return &resp, nil
}

// Poll fetches the latest state of the long-running operation.
//
// Poll also fetches the latest metadata, which can be retrieved by Metadata.
//
// If Poll fails, the error is returned and op is unmodified. If Poll succeeds and
// the operation has completed with failure, the error is returned and op.Done will return true.
// If Poll succeeds and the operation has completed successfully,
// op.Done will return true, and the response of the operation is returned.
// If Poll succeeds and the operation has not completed, the returned response and error are both nil.
func (op *UndeployModelOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aiplatformpb.UndeployModelResponse, error) {
	var resp aiplatformpb.UndeployModelResponse
	if err := op.lro.Poll(ctx, &resp, opts...); err != nil {
		return nil, err
	}
	if !op.Done() {
		return nil, nil
	}
	return &resp, nil
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *UndeployModelOperation) Metadata() (*aiplatformpb.UndeployModelOperationMetadata, error) {
	var meta aiplatformpb.UndeployModelOperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *UndeployModelOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *UndeployModelOperation) Name() string {
	return op.lro.Name()
}

// EndpointIterator manages a stream of *aiplatformpb.Endpoint.
type EndpointIterator struct {
	items    []*aiplatformpb.Endpoint
	pageInfo *iterator.PageInfo
	nextFunc func() error

	// Response is the raw response for the current page.
	// It must be cast to the RPC response type.
	// Calling Next() or InternalFetch() updates this value.
	Response interface{}

	// InternalFetch is for use by the Google Cloud Libraries only.
	// It is not part of the stable interface of this package.
	//
	// InternalFetch returns results from a single call to the underlying RPC.
	// The number of results is no greater than pageSize.
	// If there are no more results, nextPageToken is empty and err is nil.
	InternalFetch func(pageSize int, pageToken string) (results []*aiplatformpb.Endpoint, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *EndpointIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *EndpointIterator) Next() (*aiplatformpb.Endpoint, error) {
	var item *aiplatformpb.Endpoint
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *EndpointIterator) bufLen() int {
	return len(it.items)
}

func (it *EndpointIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}
