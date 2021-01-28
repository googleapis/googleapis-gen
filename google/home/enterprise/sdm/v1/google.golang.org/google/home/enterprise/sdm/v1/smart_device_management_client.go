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

package sdm

import (
	"context"
	"fmt"
	"math"
	"net/url"
	"time"

	"github.com/golang/protobuf/proto"
	gax "github.com/googleapis/gax-go/v2"
	"google.golang.org/api/iterator"
	"google.golang.org/api/option"
	"google.golang.org/api/option/internaloption"
	gtransport "google.golang.org/api/transport/grpc"
	sdmpb "google.golang.org/genproto/googleapis/home/enterprise/sdm/v1"
	"google.golang.org/grpc"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/metadata"
)

var newSmartDeviceManagementClientHook clientHook

// SmartDeviceManagementCallOptions contains the retry settings for each method of SmartDeviceManagementClient.
type SmartDeviceManagementCallOptions struct {
	GetDevice            []gax.CallOption
	ListDevices          []gax.CallOption
	ExecuteDeviceCommand []gax.CallOption
	GetStructure         []gax.CallOption
	ListStructures       []gax.CallOption
	GetRoom              []gax.CallOption
	ListRooms            []gax.CallOption
}

func defaultSmartDeviceManagementClientOptions() []option.ClientOption {
	return []option.ClientOption{
		internaloption.WithDefaultEndpoint("smartdevicemanagement.googleapis.com:443"),
		internaloption.WithDefaultMTLSEndpoint("smartdevicemanagement.mtls.googleapis.com:443"),
		internaloption.WithDefaultAudience("https://smartdevicemanagement.googleapis.com/"),
		internaloption.WithDefaultScopes(DefaultAuthScopes()...),
		option.WithGRPCDialOption(grpc.WithDisableServiceConfig()),
		option.WithGRPCDialOption(grpc.WithDefaultCallOptions(
			grpc.MaxCallRecvMsgSize(math.MaxInt32))),
	}
}

func defaultSmartDeviceManagementCallOptions() *SmartDeviceManagementCallOptions {
	return &SmartDeviceManagementCallOptions{
		GetDevice: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    1000 * time.Millisecond,
					Max:        10000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		ListDevices: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    1000 * time.Millisecond,
					Max:        10000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		ExecuteDeviceCommand: []gax.CallOption{},
		GetStructure: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    1000 * time.Millisecond,
					Max:        10000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		ListStructures: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    1000 * time.Millisecond,
					Max:        10000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		GetRoom: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    1000 * time.Millisecond,
					Max:        10000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		ListRooms: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    1000 * time.Millisecond,
					Max:        10000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
	}
}

// SmartDeviceManagementClient is a client for interacting with Smart Device Management API.
//
// Methods, except Close, may be called concurrently. However, fields must not be modified concurrently with method calls.
type SmartDeviceManagementClient struct {
	// Connection pool of gRPC connections to the service.
	connPool gtransport.ConnPool

	// flag to opt out of default deadlines via GOOGLE_API_GO_EXPERIMENTAL_DISABLE_DEFAULT_DEADLINE
	disableDeadlines bool

	// The gRPC API client.
	smartDeviceManagementClient sdmpb.SmartDeviceManagementServiceClient

	// The call options for this service.
	CallOptions *SmartDeviceManagementCallOptions

	// The x-goog-* metadata to be sent with each request.
	xGoogMetadata metadata.MD
}

// NewSmartDeviceManagementClient creates a new smart device management service client.
//
// A service that allows API consumers to provision and manage Google
// Home structures and devices for enterprise use cases.
func NewSmartDeviceManagementClient(ctx context.Context, opts ...option.ClientOption) (*SmartDeviceManagementClient, error) {
	clientOpts := defaultSmartDeviceManagementClientOptions()

	if newSmartDeviceManagementClientHook != nil {
		hookOpts, err := newSmartDeviceManagementClientHook(ctx, clientHookParams{})
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
	c := &SmartDeviceManagementClient{
		connPool:         connPool,
		disableDeadlines: disableDeadlines,
		CallOptions:      defaultSmartDeviceManagementCallOptions(),

		smartDeviceManagementClient: sdmpb.NewSmartDeviceManagementServiceClient(connPool),
	}
	c.setGoogleClientInfo()

	return c, nil
}

// Connection returns a connection to the API service.
//
// Deprecated.
func (c *SmartDeviceManagementClient) Connection() *grpc.ClientConn {
	return c.connPool.Conn()
}

// Close closes the connection to the API service. The user should invoke this when
// the client is no longer required.
func (c *SmartDeviceManagementClient) Close() error {
	return c.connPool.Close()
}

// setGoogleClientInfo sets the name and version of the application in
// the `x-goog-api-client` header passed on each request. Intended for
// use by Google-written clients.
func (c *SmartDeviceManagementClient) setGoogleClientInfo(keyval ...string) {
	kv := append([]string{"gl-go", versionGo()}, keyval...)
	kv = append(kv, "gapic", versionClient, "gax", gax.Version, "grpc", grpc.Version)
	c.xGoogMetadata = metadata.Pairs("x-goog-api-client", gax.XGoogHeader(kv...))
}

// GetDevice gets a device managed by the enterprise.
func (c *SmartDeviceManagementClient) GetDevice(ctx context.Context, req *sdmpb.GetDeviceRequest, opts ...gax.CallOption) (*sdmpb.Device, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetDevice[0:len(c.CallOptions.GetDevice):len(c.CallOptions.GetDevice)], opts...)
	var resp *sdmpb.Device
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.smartDeviceManagementClient.GetDevice(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// ListDevices lists devices managed by the enterprise.
func (c *SmartDeviceManagementClient) ListDevices(ctx context.Context, req *sdmpb.ListDevicesRequest, opts ...gax.CallOption) *DeviceIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ListDevices[0:len(c.CallOptions.ListDevices):len(c.CallOptions.ListDevices)], opts...)
	it := &DeviceIterator{}
	req = proto.Clone(req).(*sdmpb.ListDevicesRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*sdmpb.Device, string, error) {
		var resp *sdmpb.ListDevicesResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.smartDeviceManagementClient.ListDevices(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetDevices(), resp.GetNextPageToken(), nil
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

// ExecuteDeviceCommand executes a command to device managed by the enterprise.
func (c *SmartDeviceManagementClient) ExecuteDeviceCommand(ctx context.Context, req *sdmpb.ExecuteDeviceCommandRequest, opts ...gax.CallOption) (*sdmpb.ExecuteDeviceCommandResponse, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ExecuteDeviceCommand[0:len(c.CallOptions.ExecuteDeviceCommand):len(c.CallOptions.ExecuteDeviceCommand)], opts...)
	var resp *sdmpb.ExecuteDeviceCommandResponse
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.smartDeviceManagementClient.ExecuteDeviceCommand(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// GetStructure gets a structure managed by the enterprise.
func (c *SmartDeviceManagementClient) GetStructure(ctx context.Context, req *sdmpb.GetStructureRequest, opts ...gax.CallOption) (*sdmpb.Structure, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetStructure[0:len(c.CallOptions.GetStructure):len(c.CallOptions.GetStructure)], opts...)
	var resp *sdmpb.Structure
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.smartDeviceManagementClient.GetStructure(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// ListStructures lists structures managed by the enterprise.
func (c *SmartDeviceManagementClient) ListStructures(ctx context.Context, req *sdmpb.ListStructuresRequest, opts ...gax.CallOption) *StructureIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ListStructures[0:len(c.CallOptions.ListStructures):len(c.CallOptions.ListStructures)], opts...)
	it := &StructureIterator{}
	req = proto.Clone(req).(*sdmpb.ListStructuresRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*sdmpb.Structure, string, error) {
		var resp *sdmpb.ListStructuresResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.smartDeviceManagementClient.ListStructures(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetStructures(), resp.GetNextPageToken(), nil
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

// GetRoom gets a room managed by the enterprise.
func (c *SmartDeviceManagementClient) GetRoom(ctx context.Context, req *sdmpb.GetRoomRequest, opts ...gax.CallOption) (*sdmpb.Room, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "name", url.QueryEscape(req.GetName())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetRoom[0:len(c.CallOptions.GetRoom):len(c.CallOptions.GetRoom)], opts...)
	var resp *sdmpb.Room
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.smartDeviceManagementClient.GetRoom(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// ListRooms lists rooms managed by the enterprise.
func (c *SmartDeviceManagementClient) ListRooms(ctx context.Context, req *sdmpb.ListRoomsRequest, opts ...gax.CallOption) *RoomIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ListRooms[0:len(c.CallOptions.ListRooms):len(c.CallOptions.ListRooms)], opts...)
	it := &RoomIterator{}
	req = proto.Clone(req).(*sdmpb.ListRoomsRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*sdmpb.Room, string, error) {
		var resp *sdmpb.ListRoomsResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.smartDeviceManagementClient.ListRooms(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetRooms(), resp.GetNextPageToken(), nil
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

// DeviceIterator manages a stream of *sdmpb.Device.
type DeviceIterator struct {
	items    []*sdmpb.Device
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
	InternalFetch func(pageSize int, pageToken string) (results []*sdmpb.Device, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *DeviceIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *DeviceIterator) Next() (*sdmpb.Device, error) {
	var item *sdmpb.Device
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *DeviceIterator) bufLen() int {
	return len(it.items)
}

func (it *DeviceIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}

// RoomIterator manages a stream of *sdmpb.Room.
type RoomIterator struct {
	items    []*sdmpb.Room
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
	InternalFetch func(pageSize int, pageToken string) (results []*sdmpb.Room, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *RoomIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *RoomIterator) Next() (*sdmpb.Room, error) {
	var item *sdmpb.Room
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *RoomIterator) bufLen() int {
	return len(it.items)
}

func (it *RoomIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}

// StructureIterator manages a stream of *sdmpb.Structure.
type StructureIterator struct {
	items    []*sdmpb.Structure
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
	InternalFetch func(pageSize int, pageToken string) (results []*sdmpb.Structure, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *StructureIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *StructureIterator) Next() (*sdmpb.Structure, error) {
	var item *sdmpb.Structure
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *StructureIterator) bufLen() int {
	return len(it.items)
}

func (it *StructureIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}
