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

package graph

import (
	"context"
	"fmt"
	"math"
	"net/url"
	"time"

	gax "github.com/googleapis/gax-go/v2"
	"google.golang.org/api/option"
	"google.golang.org/api/option/internaloption"
	gtransport "google.golang.org/api/transport/grpc"
	graphpb "google.golang.org/genproto/googleapis/home/graph/v1"
	"google.golang.org/grpc"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/metadata"
)

var newHomeGraphApiClientHook clientHook

// HomeGraphApiCallOptions contains the retry settings for each method of HomeGraphApiClient.
type HomeGraphApiCallOptions struct {
	RequestSyncDevices         []gax.CallOption
	ReportStateAndNotification []gax.CallOption
	DeleteAgentUser            []gax.CallOption
	Query                      []gax.CallOption
	Sync                       []gax.CallOption
}

func defaultHomeGraphApiClientOptions() []option.ClientOption {
	return []option.ClientOption{
		internaloption.WithDefaultEndpoint("homegraph.googleapis.com:443"),
		internaloption.WithDefaultMTLSEndpoint("homegraph.mtls.googleapis.com:443"),
		internaloption.WithDefaultAudience("https://homegraph.googleapis.com/"),
		internaloption.WithDefaultScopes(DefaultAuthScopes()...),
		option.WithGRPCDialOption(grpc.WithDisableServiceConfig()),
		option.WithGRPCDialOption(grpc.WithDefaultCallOptions(
			grpc.MaxCallRecvMsgSize(math.MaxInt32))),
	}
}

func defaultHomeGraphApiCallOptions() *HomeGraphApiCallOptions {
	return &HomeGraphApiCallOptions{
		RequestSyncDevices:         []gax.CallOption{},
		ReportStateAndNotification: []gax.CallOption{},
		DeleteAgentUser: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
					codes.DeadlineExceeded,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		Query: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
					codes.DeadlineExceeded,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		Sync: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
					codes.DeadlineExceeded,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
	}
}

// HomeGraphApiClient is a client for interacting with HomeGraph API.
//
// Methods, except Close, may be called concurrently. However, fields must not be modified concurrently with method calls.
type HomeGraphApiClient struct {
	// Connection pool of gRPC connections to the service.
	connPool gtransport.ConnPool

	// flag to opt out of default deadlines via GOOGLE_API_GO_EXPERIMENTAL_DISABLE_DEFAULT_DEADLINE
	disableDeadlines bool

	// The gRPC API client.
	homeGraphApiClient graphpb.HomeGraphApiServiceClient

	// The call options for this service.
	CallOptions *HomeGraphApiCallOptions

	// The x-goog-* metadata to be sent with each request.
	xGoogMetadata metadata.MD
}

// NewHomeGraphApiClient creates a new home graph api service client.
//
// Google Home Graph API service. The Home Graph service provides support for
// accessing first-party and third-party devices stored in Google’s Home Graph.
// The Home Graph database provides contextual data about the relationships
// between devices and the home.
//
// For more details, see the Home Graph developer
// guide (at https://developers.google.com/assistant/smarthome/concepts/homegraph).
func NewHomeGraphApiClient(ctx context.Context, opts ...option.ClientOption) (*HomeGraphApiClient, error) {
	clientOpts := defaultHomeGraphApiClientOptions()

	if newHomeGraphApiClientHook != nil {
		hookOpts, err := newHomeGraphApiClientHook(ctx, clientHookParams{})
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
	c := &HomeGraphApiClient{
		connPool:         connPool,
		disableDeadlines: disableDeadlines,
		CallOptions:      defaultHomeGraphApiCallOptions(),

		homeGraphApiClient: graphpb.NewHomeGraphApiServiceClient(connPool),
	}
	c.setGoogleClientInfo()

	return c, nil
}

// Connection returns a connection to the API service.
//
// Deprecated.
func (c *HomeGraphApiClient) Connection() *grpc.ClientConn {
	return c.connPool.Conn()
}

// Close closes the connection to the API service. The user should invoke this when
// the client is no longer required.
func (c *HomeGraphApiClient) Close() error {
	return c.connPool.Close()
}

// setGoogleClientInfo sets the name and version of the application in
// the `x-goog-api-client` header passed on each request. Intended for
// use by Google-written clients.
func (c *HomeGraphApiClient) setGoogleClientInfo(keyval ...string) {
	kv := append([]string{"gl-go", versionGo()}, keyval...)
	kv = append(kv, "gapic", versionClient, "gax", gax.Version, "grpc", grpc.Version)
	c.xGoogMetadata = metadata.Pairs("x-goog-api-client", gax.XGoogHeader(kv...))
}

// RequestSyncDevices requests Google to send an action.devices.SYNC
// intent (at https://developers.google.com/assistant/smarthome/reference/intent/sync)
// to your smart home Action to update device metadata for the given user.
//
// The third-party user’s identity is passed via the agent_user_id
// (see
// RequestSyncDevicesRequest).
// This request must be authorized using service account credentials from your
// Actions console project.
func (c *HomeGraphApiClient) RequestSyncDevices(ctx context.Context, req *graphpb.RequestSyncDevicesRequest, opts ...gax.CallOption) (*graphpb.RequestSyncDevicesResponse, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 10000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	ctx = insertMetadata(ctx, c.xGoogMetadata)
	opts = append(c.CallOptions.RequestSyncDevices[0:len(c.CallOptions.RequestSyncDevices):len(c.CallOptions.RequestSyncDevices)], opts...)
	var resp *graphpb.RequestSyncDevicesResponse
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.homeGraphApiClient.RequestSyncDevices(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// ReportStateAndNotification reports device state and optionally sends device notifications.
// Called by your smart home Action when the state of a third-party device
// changes or you need to send a notification about the device.
// See Implement Report
// State (at https://developers.google.com/assistant/smarthome/develop/report-state)
// for more information.
//
// This method updates the device state according to its declared
// traits (at https://developers.google.com/assistant/smarthome/concepts/devices-traits).
// Publishing a new state value outside of these traits will result in an
// INVALID_ARGUMENT error response.
//
// The third-party user’s identity is passed in via the agent_user_id
// (see
// ReportStateAndNotificationRequest).
// This request must be authorized using service account credentials from your
// Actions console project.
func (c *HomeGraphApiClient) ReportStateAndNotification(ctx context.Context, req *graphpb.ReportStateAndNotificationRequest, opts ...gax.CallOption) (*graphpb.ReportStateAndNotificationResponse, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 10000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	ctx = insertMetadata(ctx, c.xGoogMetadata)
	opts = append(c.CallOptions.ReportStateAndNotification[0:len(c.CallOptions.ReportStateAndNotification):len(c.CallOptions.ReportStateAndNotification)], opts...)
	var resp *graphpb.ReportStateAndNotificationResponse
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.homeGraphApiClient.ReportStateAndNotification(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// DeleteAgentUser unlinks the given third-party user from your smart home Action.
// All data related to this user will be deleted.
//
// For more details on how users link their accounts, see
// fulfillment and
// authentication (at https://developers.google.com/assistant/smarthome/concepts/fulfillment-authentication).
//
// The third-party user’s identity is passed in via the agent_user_id
// (see
// DeleteAgentUserRequest).
// This request must be authorized using service account credentials from your
// Actions console project.
func (c *HomeGraphApiClient) DeleteAgentUser(ctx context.Context, req *graphpb.DeleteAgentUserRequest, opts ...gax.CallOption) error {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 10000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "agent_user_id", url.QueryEscape(req.GetAgentUserId())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.DeleteAgentUser[0:len(c.CallOptions.DeleteAgentUser):len(c.CallOptions.DeleteAgentUser)], opts...)
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		_, err = c.homeGraphApiClient.DeleteAgentUser(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	return err
}

// Query gets the current states in Home Graph for the given set of the third-party
// user’s devices.
//
// The third-party user’s identity is passed in via the agent_user_id
// (see QueryRequest).
// This request must be authorized using service account credentials from your
// Actions console project.
func (c *HomeGraphApiClient) Query(ctx context.Context, req *graphpb.QueryRequest, opts ...gax.CallOption) (*graphpb.QueryResponse, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 10000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	ctx = insertMetadata(ctx, c.xGoogMetadata)
	opts = append(c.CallOptions.Query[0:len(c.CallOptions.Query):len(c.CallOptions.Query)], opts...)
	var resp *graphpb.QueryResponse
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.homeGraphApiClient.Query(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// Sync gets all the devices associated with the given third-party user.
//
// The third-party user’s identity is passed in via the agent_user_id
// (see SyncRequest).
// This request must be authorized using service account credentials from your
// Actions console project.
func (c *HomeGraphApiClient) Sync(ctx context.Context, req *graphpb.SyncRequest, opts ...gax.CallOption) (*graphpb.SyncResponse, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 10000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	ctx = insertMetadata(ctx, c.xGoogMetadata)
	opts = append(c.CallOptions.Sync[0:len(c.CallOptions.Sync):len(c.CallOptions.Sync)], opts...)
	var resp *graphpb.SyncResponse
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.homeGraphApiClient.Sync(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}
