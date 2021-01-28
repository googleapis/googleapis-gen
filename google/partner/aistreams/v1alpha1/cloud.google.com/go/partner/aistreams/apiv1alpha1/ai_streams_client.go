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

package aistreams

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
	longrunningpb "google.golang.org/genproto/googleapis/longrunning"
	aistreamspb "google.golang.org/genproto/googleapis/partner/aistreams/v1alpha1"
	"google.golang.org/grpc"
	"google.golang.org/grpc/metadata"
)

var newClientHook clientHook

// CallOptions contains the retry settings for each method of Client.
type CallOptions struct {
	ListClusters  []gax.CallOption
	GetCluster    []gax.CallOption
	CreateCluster []gax.CallOption
	UpdateCluster []gax.CallOption
	DeleteCluster []gax.CallOption
	ListStreams   []gax.CallOption
	GetStream     []gax.CallOption
	CreateStream  []gax.CallOption
	UpdateStream  []gax.CallOption
	DeleteStream  []gax.CallOption
}

func defaultClientOptions() []option.ClientOption {
	return []option.ClientOption{
		internaloption.WithDefaultEndpoint("aistreams.googleapis.com:443"),
		internaloption.WithDefaultMTLSEndpoint("aistreams.mtls.googleapis.com:443"),
		internaloption.WithDefaultAudience("https://aistreams.googleapis.com/"),
		internaloption.WithDefaultScopes(DefaultAuthScopes()...),
		option.WithGRPCDialOption(grpc.WithDisableServiceConfig()),
		option.WithGRPCDialOption(grpc.WithDefaultCallOptions(
			grpc.MaxCallRecvMsgSize(math.MaxInt32))),
	}
}

func defaultCallOptions() *CallOptions {
	return &CallOptions{
		ListClusters:  []gax.CallOption{},
		GetCluster:    []gax.CallOption{},
		CreateCluster: []gax.CallOption{},
		UpdateCluster: []gax.CallOption{},
		DeleteCluster: []gax.CallOption{},
		ListStreams:   []gax.CallOption{},
		GetStream:     []gax.CallOption{},
		CreateStream:  []gax.CallOption{},
		UpdateStream:  []gax.CallOption{},
		DeleteStream:  []gax.CallOption{},
	}
}

// Client is a client for interacting with AI Streams API.
//
// Methods, except Close, may be called concurrently. However, fields must not be modified concurrently with method calls.
type Client struct {
	// Connection pool of gRPC connections to the service.
	connPool gtransport.ConnPool

	// flag to opt out of default deadlines via GOOGLE_API_GO_EXPERIMENTAL_DISABLE_DEFAULT_DEADLINE
	disableDeadlines bool

	// The gRPC API client.
	client aistreamspb.AIStreamsClient

	// LROClient is used internally to handle longrunning operations.
	// It is exposed so that its CallOptions can be modified if required.
	// Users should not Close this client.
	LROClient *lroauto.OperationsClient

	// The call options for this service.
	CallOptions *CallOptions

	// The x-goog-* metadata to be sent with each request.
	xGoogMetadata metadata.MD
}

// NewClient creates a new ai streams client.
//
// AIStreams service.
func NewClient(ctx context.Context, opts ...option.ClientOption) (*Client, error) {
	clientOpts := defaultClientOptions()

	if newClientHook != nil {
		hookOpts, err := newClientHook(ctx, clientHookParams{})
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
	c := &Client{
		connPool:         connPool,
		disableDeadlines: disableDeadlines,
		CallOptions:      defaultCallOptions(),

		client: aistreamspb.NewAIStreamsClient(connPool),
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
func (c *Client) Connection() *grpc.ClientConn {
	return c.connPool.Conn()
}

// Close closes the connection to the API service. The user should invoke this when
// the client is no longer required.
func (c *Client) Close() error {
	return c.connPool.Close()
}

// setGoogleClientInfo sets the name and version of the application in
// the `x-goog-api-client` header passed on each request. Intended for
// use by Google-written clients.
func (c *Client) setGoogleClientInfo(keyval ...string) {
	kv := append([]string{"gl-go", versionGo()}, keyval...)
	kv = append(kv, "gapic", versionClient, "gax", gax.Version, "grpc", grpc.Version)
	c.xGoogMetadata = metadata.Pairs("x-goog-api-client", gax.XGoogHeader(kv...))
}

// ListClusters lists Clusters in a given project and location.
func (c *Client) ListClusters(ctx context.Context, req *aistreamspb.ListClustersRequest, opts ...gax.CallOption) *ClusterIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ListClusters[0:len(c.CallOptions.ListClusters):len(c.CallOptions.ListClusters)], opts...)
	it := &ClusterIterator{}
	req = proto.Clone(req).(*aistreamspb.ListClustersRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*aistreamspb.Cluster, string, error) {
		var resp *aistreamspb.ListClustersResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.client.ListClusters(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetClusters(), resp.GetNextPageToken(), nil
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

// GetCluster gets details of a single Cluster.
func (c *Client) GetCluster(ctx context.Context, req *aistreamspb.GetClusterRequest, opts ...gax.CallOption) (*aistreamspb.Cluster, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetCluster[0:len(c.CallOptions.GetCluster):len(c.CallOptions.GetCluster)], opts...)
	var resp *aistreamspb.Cluster
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.GetCluster(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// CreateCluster creates a new Cluster in a given project and location.
func (c *Client) CreateCluster(ctx context.Context, req *aistreamspb.CreateClusterRequest, opts ...gax.CallOption) (*CreateClusterOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 600000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.CreateCluster[0:len(c.CallOptions.CreateCluster):len(c.CallOptions.CreateCluster)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.CreateCluster(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &CreateClusterOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// UpdateCluster updates the parameters of a single Cluster.
func (c *Client) UpdateCluster(ctx context.Context, req *aistreamspb.UpdateClusterRequest, opts ...gax.CallOption) (*UpdateClusterOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "cluster.name", url.QueryEscape(req.GetCluster().GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.UpdateCluster[0:len(c.CallOptions.UpdateCluster):len(c.CallOptions.UpdateCluster)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.UpdateCluster(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &UpdateClusterOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// DeleteCluster deletes a single Cluster.
func (c *Client) DeleteCluster(ctx context.Context, req *aistreamspb.DeleteClusterRequest, opts ...gax.CallOption) (*DeleteClusterOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.DeleteCluster[0:len(c.CallOptions.DeleteCluster):len(c.CallOptions.DeleteCluster)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.DeleteCluster(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &DeleteClusterOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// ListStreams lists Streams in a given project, location and cluster.
func (c *Client) ListStreams(ctx context.Context, req *aistreamspb.ListStreamsRequest, opts ...gax.CallOption) *StreamIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ListStreams[0:len(c.CallOptions.ListStreams):len(c.CallOptions.ListStreams)], opts...)
	it := &StreamIterator{}
	req = proto.Clone(req).(*aistreamspb.ListStreamsRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*aistreamspb.Stream, string, error) {
		var resp *aistreamspb.ListStreamsResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.client.ListStreams(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetStreams(), resp.GetNextPageToken(), nil
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

// GetStream gets details of a single Stream.
func (c *Client) GetStream(ctx context.Context, req *aistreamspb.GetStreamRequest, opts ...gax.CallOption) (*aistreamspb.Stream, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetStream[0:len(c.CallOptions.GetStream):len(c.CallOptions.GetStream)], opts...)
	var resp *aistreamspb.Stream
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.GetStream(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// CreateStream creates a new Stream in a given project and location.
func (c *Client) CreateStream(ctx context.Context, req *aistreamspb.CreateStreamRequest, opts ...gax.CallOption) (*CreateStreamOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 300000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.CreateStream[0:len(c.CallOptions.CreateStream):len(c.CallOptions.CreateStream)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.CreateStream(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &CreateStreamOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// UpdateStream updates the parameters of a single Stream.
func (c *Client) UpdateStream(ctx context.Context, req *aistreamspb.UpdateStreamRequest, opts ...gax.CallOption) (*UpdateStreamOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "stream.name", url.QueryEscape(req.GetStream().GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.UpdateStream[0:len(c.CallOptions.UpdateStream):len(c.CallOptions.UpdateStream)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.UpdateStream(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &UpdateStreamOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// DeleteStream deletes a single Stream.
func (c *Client) DeleteStream(ctx context.Context, req *aistreamspb.DeleteStreamRequest, opts ...gax.CallOption) (*DeleteStreamOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.DeleteStream[0:len(c.CallOptions.DeleteStream):len(c.CallOptions.DeleteStream)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.client.DeleteStream(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &DeleteStreamOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// CreateClusterOperation manages a long-running operation from CreateCluster.
type CreateClusterOperation struct {
	lro *longrunning.Operation
}

// CreateClusterOperation returns a new CreateClusterOperation from a given name.
// The name must be that of a previously created CreateClusterOperation, possibly from a different process.
func (c *Client) CreateClusterOperation(name string) *CreateClusterOperation {
	return &CreateClusterOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *CreateClusterOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Cluster, error) {
	var resp aistreamspb.Cluster
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
func (op *CreateClusterOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Cluster, error) {
	var resp aistreamspb.Cluster
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
func (op *CreateClusterOperation) Metadata() (*aistreamspb.OperationMetadata, error) {
	var meta aistreamspb.OperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *CreateClusterOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *CreateClusterOperation) Name() string {
	return op.lro.Name()
}

// CreateStreamOperation manages a long-running operation from CreateStream.
type CreateStreamOperation struct {
	lro *longrunning.Operation
}

// CreateStreamOperation returns a new CreateStreamOperation from a given name.
// The name must be that of a previously created CreateStreamOperation, possibly from a different process.
func (c *Client) CreateStreamOperation(name string) *CreateStreamOperation {
	return &CreateStreamOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *CreateStreamOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Stream, error) {
	var resp aistreamspb.Stream
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
func (op *CreateStreamOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Stream, error) {
	var resp aistreamspb.Stream
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
func (op *CreateStreamOperation) Metadata() (*aistreamspb.OperationMetadata, error) {
	var meta aistreamspb.OperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *CreateStreamOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *CreateStreamOperation) Name() string {
	return op.lro.Name()
}

// DeleteClusterOperation manages a long-running operation from DeleteCluster.
type DeleteClusterOperation struct {
	lro *longrunning.Operation
}

// DeleteClusterOperation returns a new DeleteClusterOperation from a given name.
// The name must be that of a previously created DeleteClusterOperation, possibly from a different process.
func (c *Client) DeleteClusterOperation(name string) *DeleteClusterOperation {
	return &DeleteClusterOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *DeleteClusterOperation) Wait(ctx context.Context, opts ...gax.CallOption) error {
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
func (op *DeleteClusterOperation) Poll(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.Poll(ctx, nil, opts...)
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *DeleteClusterOperation) Metadata() (*aistreamspb.OperationMetadata, error) {
	var meta aistreamspb.OperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *DeleteClusterOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *DeleteClusterOperation) Name() string {
	return op.lro.Name()
}

// DeleteStreamOperation manages a long-running operation from DeleteStream.
type DeleteStreamOperation struct {
	lro *longrunning.Operation
}

// DeleteStreamOperation returns a new DeleteStreamOperation from a given name.
// The name must be that of a previously created DeleteStreamOperation, possibly from a different process.
func (c *Client) DeleteStreamOperation(name string) *DeleteStreamOperation {
	return &DeleteStreamOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *DeleteStreamOperation) Wait(ctx context.Context, opts ...gax.CallOption) error {
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
func (op *DeleteStreamOperation) Poll(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.Poll(ctx, nil, opts...)
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *DeleteStreamOperation) Metadata() (*aistreamspb.OperationMetadata, error) {
	var meta aistreamspb.OperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *DeleteStreamOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *DeleteStreamOperation) Name() string {
	return op.lro.Name()
}

// UpdateClusterOperation manages a long-running operation from UpdateCluster.
type UpdateClusterOperation struct {
	lro *longrunning.Operation
}

// UpdateClusterOperation returns a new UpdateClusterOperation from a given name.
// The name must be that of a previously created UpdateClusterOperation, possibly from a different process.
func (c *Client) UpdateClusterOperation(name string) *UpdateClusterOperation {
	return &UpdateClusterOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *UpdateClusterOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Cluster, error) {
	var resp aistreamspb.Cluster
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
func (op *UpdateClusterOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Cluster, error) {
	var resp aistreamspb.Cluster
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
func (op *UpdateClusterOperation) Metadata() (*aistreamspb.OperationMetadata, error) {
	var meta aistreamspb.OperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *UpdateClusterOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *UpdateClusterOperation) Name() string {
	return op.lro.Name()
}

// UpdateStreamOperation manages a long-running operation from UpdateStream.
type UpdateStreamOperation struct {
	lro *longrunning.Operation
}

// UpdateStreamOperation returns a new UpdateStreamOperation from a given name.
// The name must be that of a previously created UpdateStreamOperation, possibly from a different process.
func (c *Client) UpdateStreamOperation(name string) *UpdateStreamOperation {
	return &UpdateStreamOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *UpdateStreamOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Stream, error) {
	var resp aistreamspb.Stream
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
func (op *UpdateStreamOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*aistreamspb.Stream, error) {
	var resp aistreamspb.Stream
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
func (op *UpdateStreamOperation) Metadata() (*aistreamspb.OperationMetadata, error) {
	var meta aistreamspb.OperationMetadata
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *UpdateStreamOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *UpdateStreamOperation) Name() string {
	return op.lro.Name()
}

// ClusterIterator manages a stream of *aistreamspb.Cluster.
type ClusterIterator struct {
	items    []*aistreamspb.Cluster
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
	InternalFetch func(pageSize int, pageToken string) (results []*aistreamspb.Cluster, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *ClusterIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *ClusterIterator) Next() (*aistreamspb.Cluster, error) {
	var item *aistreamspb.Cluster
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *ClusterIterator) bufLen() int {
	return len(it.items)
}

func (it *ClusterIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}

// StreamIterator manages a stream of *aistreamspb.Stream.
type StreamIterator struct {
	items    []*aistreamspb.Stream
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
	InternalFetch func(pageSize int, pageToken string) (results []*aistreamspb.Stream, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *StreamIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *StreamIterator) Next() (*aistreamspb.Stream, error) {
	var item *aistreamspb.Stream
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *StreamIterator) bufLen() int {
	return len(it.items)
}

func (it *StreamIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}
