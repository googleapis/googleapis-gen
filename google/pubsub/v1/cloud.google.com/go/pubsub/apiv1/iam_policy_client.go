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

package pubsub

import (
	"context"
	"fmt"
	"math"
	"net/url"

	gax "github.com/googleapis/gax-go/v2"
	"google.golang.org/api/option"
	"google.golang.org/api/option/internaloption"
	gtransport "google.golang.org/api/transport/grpc"
	iampb "google.golang.org/genproto/googleapis/iam/v1"
	"google.golang.org/grpc"
	"google.golang.org/grpc/metadata"
)

var newIamPolicyClientHook clientHook

// IamPolicyCallOptions contains the retry settings for each method of IamPolicyClient.
type IamPolicyCallOptions struct {
	SetIamPolicy       []gax.CallOption
	GetIamPolicy       []gax.CallOption
	TestIamPermissions []gax.CallOption
}

func defaultIamPolicyClientOptions() []option.ClientOption {
	return []option.ClientOption{
		internaloption.WithDefaultEndpoint("iam-meta-api.googleapis.com:443"),
		internaloption.WithDefaultMTLSEndpoint("iam-meta-api.mtls.googleapis.com:443"),
		internaloption.WithDefaultAudience("https://iam-meta-api.googleapis.com/"),
		internaloption.WithDefaultScopes(DefaultAuthScopes()...),
		option.WithGRPCDialOption(grpc.WithDisableServiceConfig()),
		option.WithGRPCDialOption(grpc.WithDefaultCallOptions(
			grpc.MaxCallRecvMsgSize(math.MaxInt32))),
	}
}

func defaultIamPolicyCallOptions() *IamPolicyCallOptions {
	return &IamPolicyCallOptions{
		SetIamPolicy:       []gax.CallOption{},
		GetIamPolicy:       []gax.CallOption{},
		TestIamPermissions: []gax.CallOption{},
	}
}

// IamPolicyClient is a client for interacting with Cloud Pub/Sub API.
//
// Methods, except Close, may be called concurrently. However, fields must not be modified concurrently with method calls.
type IamPolicyClient struct {
	// Connection pool of gRPC connections to the service.
	connPool gtransport.ConnPool

	// flag to opt out of default deadlines via GOOGLE_API_GO_EXPERIMENTAL_DISABLE_DEFAULT_DEADLINE
	disableDeadlines bool

	// The gRPC API client.
	iamPolicyClient iampb.IAMPolicyClient

	// The call options for this service.
	CallOptions *IamPolicyCallOptions

	// The x-goog-* metadata to be sent with each request.
	xGoogMetadata metadata.MD
}

// NewIamPolicyClient creates a new iam policy client.
//
// API OverviewManages Identity and Access Management (IAM) policies.
//
// Any implementation of an API that offers access control features
// implements the google.iam.v1.IAMPolicy interface.
//
// Data modelAccess control is applied when a principal (user or service account), takes
// some action on a resource exposed by a service. Resources, identified by
// URI-like names, are the unit of access control specification. Service
// implementations can choose the granularity of access control and the
// supported permissions for their resources.
// For example one database service may allow access control to be
// specified only at the Table level, whereas another might allow access control
// to also be specified at the Column level.
//
// Policy StructureSee google.iam.v1.Policy
//
// This is intentionally not a CRUD style API because access control policies
// are created and deleted implicitly with the resources to which they are
// attached.
func NewIamPolicyClient(ctx context.Context, opts ...option.ClientOption) (*IamPolicyClient, error) {
	clientOpts := defaultIamPolicyClientOptions()

	if newIamPolicyClientHook != nil {
		hookOpts, err := newIamPolicyClientHook(ctx, clientHookParams{})
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
	c := &IamPolicyClient{
		connPool:         connPool,
		disableDeadlines: disableDeadlines,
		CallOptions:      defaultIamPolicyCallOptions(),

		iamPolicyClient: iampb.NewIAMPolicyClient(connPool),
	}
	c.setGoogleClientInfo()

	return c, nil
}

// Connection returns a connection to the API service.
//
// Deprecated.
func (c *IamPolicyClient) Connection() *grpc.ClientConn {
	return c.connPool.Conn()
}

// Close closes the connection to the API service. The user should invoke this when
// the client is no longer required.
func (c *IamPolicyClient) Close() error {
	return c.connPool.Close()
}

// setGoogleClientInfo sets the name and version of the application in
// the `x-goog-api-client` header passed on each request. Intended for
// use by Google-written clients.
func (c *IamPolicyClient) setGoogleClientInfo(keyval ...string) {
	kv := append([]string{"gl-go", versionGo()}, keyval...)
	kv = append(kv, "gapic", versionClient, "gax", gax.Version, "grpc", grpc.Version)
	c.xGoogMetadata = metadata.Pairs("x-goog-api-client", gax.XGoogHeader(kv...))
}

// SetIamPolicy sets the access control policy on the specified resource. Replaces any
// existing policy.
func (c *IamPolicyClient) SetIamPolicy(ctx context.Context, req *iampb.SetIamPolicyRequest, opts ...gax.CallOption) (*iampb.Policy, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "resource", url.QueryEscape(req.GetResource())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.SetIamPolicy[0:len(c.CallOptions.SetIamPolicy):len(c.CallOptions.SetIamPolicy)], opts...)
	var resp *iampb.Policy
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.iamPolicyClient.SetIamPolicy(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// GetIamPolicy gets the access control policy for a resource.
// Returns an empty policy if the resource exists and does not have a policy
// set.
func (c *IamPolicyClient) GetIamPolicy(ctx context.Context, req *iampb.GetIamPolicyRequest, opts ...gax.CallOption) (*iampb.Policy, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "resource", url.QueryEscape(req.GetResource())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetIamPolicy[0:len(c.CallOptions.GetIamPolicy):len(c.CallOptions.GetIamPolicy)], opts...)
	var resp *iampb.Policy
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.iamPolicyClient.GetIamPolicy(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// TestIamPermissions returns permissions that a caller has on the specified resource.
// If the resource does not exist, this will return an empty set of
// permissions, not a NOT_FOUND error.
//
// Note: This operation is designed to be used for building permission-aware
// UIs and command-line tools, not for authorization checking. This operation
// may “fail open” without warning.
func (c *IamPolicyClient) TestIamPermissions(ctx context.Context, req *iampb.TestIamPermissionsRequest, opts ...gax.CallOption) (*iampb.TestIamPermissionsResponse, error) {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "resource", url.QueryEscape(req.GetResource())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.TestIamPermissions[0:len(c.CallOptions.TestIamPermissions):len(c.CallOptions.TestIamPermissions)], opts...)
	var resp *iampb.TestIamPermissionsResponse
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.iamPolicyClient.TestIamPermissions(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}
