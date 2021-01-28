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

package dialogflow

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
	dialogflowpb "google.golang.org/genproto/googleapis/cloud/dialogflow/v2beta1"
	longrunningpb "google.golang.org/genproto/googleapis/longrunning"
	"google.golang.org/grpc"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/metadata"
	structpbpb "google.golang.org/protobuf/types/known/structpb"
)

var newAgentsClientHook clientHook

// AgentsCallOptions contains the retry settings for each method of AgentsClient.
type AgentsCallOptions struct {
	GetAgent            []gax.CallOption
	SetAgent            []gax.CallOption
	DeleteAgent         []gax.CallOption
	SearchAgents        []gax.CallOption
	TrainAgent          []gax.CallOption
	ExportAgent         []gax.CallOption
	ImportAgent         []gax.CallOption
	RestoreAgent        []gax.CallOption
	GetValidationResult []gax.CallOption
}

func defaultAgentsClientOptions() []option.ClientOption {
	return []option.ClientOption{
		internaloption.WithDefaultEndpoint("dialogflow.googleapis.com:443"),
		internaloption.WithDefaultMTLSEndpoint("dialogflow.mtls.googleapis.com:443"),
		internaloption.WithDefaultAudience("https://dialogflow.googleapis.com/"),
		internaloption.WithDefaultScopes(DefaultAuthScopes()...),
		option.WithGRPCDialOption(grpc.WithDisableServiceConfig()),
		option.WithGRPCDialOption(grpc.WithDefaultCallOptions(
			grpc.MaxCallRecvMsgSize(math.MaxInt32))),
	}
}

func defaultAgentsCallOptions() *AgentsCallOptions {
	return &AgentsCallOptions{
		GetAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		SetAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		DeleteAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		SearchAgents: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		TrainAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		ExportAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		ImportAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		RestoreAgent: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
		GetValidationResult: []gax.CallOption{
			gax.WithRetry(func() gax.Retryer {
				return gax.OnCodes([]codes.Code{
					codes.Unavailable,
				}, gax.Backoff{
					Initial:    100 * time.Millisecond,
					Max:        60000 * time.Millisecond,
					Multiplier: 1.30,
				})
			}),
		},
	}
}

// AgentsClient is a client for interacting with Dialogflow API.
//
// Methods, except Close, may be called concurrently. However, fields must not be modified concurrently with method calls.
type AgentsClient struct {
	// Connection pool of gRPC connections to the service.
	connPool gtransport.ConnPool

	// flag to opt out of default deadlines via GOOGLE_API_GO_EXPERIMENTAL_DISABLE_DEFAULT_DEADLINE
	disableDeadlines bool

	// The gRPC API client.
	agentsClient dialogflowpb.AgentsClient

	// LROClient is used internally to handle longrunning operations.
	// It is exposed so that its CallOptions can be modified if required.
	// Users should not Close this client.
	LROClient *lroauto.OperationsClient

	// The call options for this service.
	CallOptions *AgentsCallOptions

	// The x-goog-* metadata to be sent with each request.
	xGoogMetadata metadata.MD
}

// NewAgentsClient creates a new agents client.
//
// Service for managing Agents.
func NewAgentsClient(ctx context.Context, opts ...option.ClientOption) (*AgentsClient, error) {
	clientOpts := defaultAgentsClientOptions()

	if newAgentsClientHook != nil {
		hookOpts, err := newAgentsClientHook(ctx, clientHookParams{})
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
	c := &AgentsClient{
		connPool:         connPool,
		disableDeadlines: disableDeadlines,
		CallOptions:      defaultAgentsCallOptions(),

		agentsClient: dialogflowpb.NewAgentsClient(connPool),
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
func (c *AgentsClient) Connection() *grpc.ClientConn {
	return c.connPool.Conn()
}

// Close closes the connection to the API service. The user should invoke this when
// the client is no longer required.
func (c *AgentsClient) Close() error {
	return c.connPool.Close()
}

// setGoogleClientInfo sets the name and version of the application in
// the `x-goog-api-client` header passed on each request. Intended for
// use by Google-written clients.
func (c *AgentsClient) setGoogleClientInfo(keyval ...string) {
	kv := append([]string{"gl-go", versionGo()}, keyval...)
	kv = append(kv, "gapic", versionClient, "gax", gax.Version, "grpc", grpc.Version)
	c.xGoogMetadata = metadata.Pairs("x-goog-api-client", gax.XGoogHeader(kv...))
}

// GetAgent retrieves the specified agent.
func (c *AgentsClient) GetAgent(ctx context.Context, req *dialogflowpb.GetAgentRequest, opts ...gax.CallOption) (*dialogflowpb.Agent, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetAgent[0:len(c.CallOptions.GetAgent):len(c.CallOptions.GetAgent)], opts...)
	var resp *dialogflowpb.Agent
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.GetAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// SetAgent creates/updates the specified agent.
func (c *AgentsClient) SetAgent(ctx context.Context, req *dialogflowpb.SetAgentRequest, opts ...gax.CallOption) (*dialogflowpb.Agent, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "agent.parent", url.QueryEscape(req.GetAgent().GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.SetAgent[0:len(c.CallOptions.SetAgent):len(c.CallOptions.SetAgent)], opts...)
	var resp *dialogflowpb.Agent
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.SetAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// DeleteAgent deletes the specified agent.
func (c *AgentsClient) DeleteAgent(ctx context.Context, req *dialogflowpb.DeleteAgentRequest, opts ...gax.CallOption) error {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.DeleteAgent[0:len(c.CallOptions.DeleteAgent):len(c.CallOptions.DeleteAgent)], opts...)
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		_, err = c.agentsClient.DeleteAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	return err
}

// SearchAgents returns the list of agents.
// Since there is at most one conversational agent per project, this method is
// useful primarily for listing all agents across projects the caller has
// access to. One can achieve that with a wildcard project collection id “-”.
// Refer to List
// Sub-Collections (at https://cloud.google.com/apis/design/design_patterns#list_sub-collections).
func (c *AgentsClient) SearchAgents(ctx context.Context, req *dialogflowpb.SearchAgentsRequest, opts ...gax.CallOption) *AgentIterator {
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.SearchAgents[0:len(c.CallOptions.SearchAgents):len(c.CallOptions.SearchAgents)], opts...)
	it := &AgentIterator{}
	req = proto.Clone(req).(*dialogflowpb.SearchAgentsRequest)
	it.InternalFetch = func(pageSize int, pageToken string) ([]*dialogflowpb.Agent, string, error) {
		var resp *dialogflowpb.SearchAgentsResponse
		req.PageToken = pageToken
		if pageSize > math.MaxInt32 {
			req.PageSize = math.MaxInt32
		} else {
			req.PageSize = int32(pageSize)
		}
		err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
			var err error
			resp, err = c.agentsClient.SearchAgents(ctx, req, settings.GRPC...)
			return err
		}, opts...)
		if err != nil {
			return nil, "", err
		}

		it.Response = resp
		return resp.GetAgents(), resp.GetNextPageToken(), nil
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

// TrainAgent trains the specified agent.
//
// Operation <response: google.protobuf.Empty>
func (c *AgentsClient) TrainAgent(ctx context.Context, req *dialogflowpb.TrainAgentRequest, opts ...gax.CallOption) (*TrainAgentOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.TrainAgent[0:len(c.CallOptions.TrainAgent):len(c.CallOptions.TrainAgent)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.TrainAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &TrainAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// ExportAgent exports the specified agent to a ZIP file.
//
// Operation <response: ExportAgentResponse>
func (c *AgentsClient) ExportAgent(ctx context.Context, req *dialogflowpb.ExportAgentRequest, opts ...gax.CallOption) (*ExportAgentOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ExportAgent[0:len(c.CallOptions.ExportAgent):len(c.CallOptions.ExportAgent)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.ExportAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &ExportAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// ImportAgent imports the specified agent from a ZIP file.
//
// Uploads new intents and entity types without deleting the existing ones.
// Intents and entity types with the same name are replaced with the new
// versions from ImportAgentRequest. After the import, the imported draft
// agent will be trained automatically (unless disabled in agent settings).
// However, once the import is done, training may not be completed yet. Please
// call TrainAgent and wait for the operation it returns in order to train
// explicitly.
//
// Operation <response: google.protobuf.Empty>
// An operation which tracks when importing is complete. It only tracks
// when the draft agent is updated not when it is done training.
func (c *AgentsClient) ImportAgent(ctx context.Context, req *dialogflowpb.ImportAgentRequest, opts ...gax.CallOption) (*ImportAgentOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.ImportAgent[0:len(c.CallOptions.ImportAgent):len(c.CallOptions.ImportAgent)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.ImportAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &ImportAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// RestoreAgent restores the specified agent from a ZIP file.
//
// Replaces the current agent version with a new one. All the intents and
// entity types in the older version are deleted. After the restore, the
// restored draft agent will be trained automatically (unless disabled in
// agent settings). However, once the restore is done, training may not be
// completed yet. Please call TrainAgent and wait for the operation it
// returns in order to train explicitly.
//
// Operation <response: google.protobuf.Empty>
// An operation which tracks when restoring is complete. It only tracks
// when the draft agent is updated not when it is done training.
func (c *AgentsClient) RestoreAgent(ctx context.Context, req *dialogflowpb.RestoreAgentRequest, opts ...gax.CallOption) (*RestoreAgentOperation, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.RestoreAgent[0:len(c.CallOptions.RestoreAgent):len(c.CallOptions.RestoreAgent)], opts...)
	var resp *longrunningpb.Operation
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.RestoreAgent(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return &RestoreAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, resp),
	}, nil
}

// GetValidationResult gets agent validation result. Agent validation is performed during
// training time and is updated automatically when training is completed.
func (c *AgentsClient) GetValidationResult(ctx context.Context, req *dialogflowpb.GetValidationResultRequest, opts ...gax.CallOption) (*dialogflowpb.ValidationResult, error) {
	if _, ok := ctx.Deadline(); !ok && !c.disableDeadlines {
		cctx, cancel := context.WithTimeout(ctx, 60000*time.Millisecond)
		defer cancel()
		ctx = cctx
	}
	md := metadata.Pairs("x-goog-request-params", fmt.Sprintf("%s=%v", "parent", url.QueryEscape(req.GetParent())))
	ctx = insertMetadata(ctx, c.xGoogMetadata, md)
	opts = append(c.CallOptions.GetValidationResult[0:len(c.CallOptions.GetValidationResult):len(c.CallOptions.GetValidationResult)], opts...)
	var resp *dialogflowpb.ValidationResult
	err := gax.Invoke(ctx, func(ctx context.Context, settings gax.CallSettings) error {
		var err error
		resp, err = c.agentsClient.GetValidationResult(ctx, req, settings.GRPC...)
		return err
	}, opts...)
	if err != nil {
		return nil, err
	}
	return resp, nil
}

// ExportAgentOperation manages a long-running operation from ExportAgent.
type ExportAgentOperation struct {
	lro *longrunning.Operation
}

// ExportAgentOperation returns a new ExportAgentOperation from a given name.
// The name must be that of a previously created ExportAgentOperation, possibly from a different process.
func (c *AgentsClient) ExportAgentOperation(name string) *ExportAgentOperation {
	return &ExportAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *ExportAgentOperation) Wait(ctx context.Context, opts ...gax.CallOption) (*dialogflowpb.ExportAgentResponse, error) {
	var resp dialogflowpb.ExportAgentResponse
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
func (op *ExportAgentOperation) Poll(ctx context.Context, opts ...gax.CallOption) (*dialogflowpb.ExportAgentResponse, error) {
	var resp dialogflowpb.ExportAgentResponse
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
func (op *ExportAgentOperation) Metadata() (*structpbpb.Struct, error) {
	var meta structpbpb.Struct
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *ExportAgentOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *ExportAgentOperation) Name() string {
	return op.lro.Name()
}

// ImportAgentOperation manages a long-running operation from ImportAgent.
type ImportAgentOperation struct {
	lro *longrunning.Operation
}

// ImportAgentOperation returns a new ImportAgentOperation from a given name.
// The name must be that of a previously created ImportAgentOperation, possibly from a different process.
func (c *AgentsClient) ImportAgentOperation(name string) *ImportAgentOperation {
	return &ImportAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *ImportAgentOperation) Wait(ctx context.Context, opts ...gax.CallOption) error {
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
func (op *ImportAgentOperation) Poll(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.Poll(ctx, nil, opts...)
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *ImportAgentOperation) Metadata() (*structpbpb.Struct, error) {
	var meta structpbpb.Struct
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *ImportAgentOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *ImportAgentOperation) Name() string {
	return op.lro.Name()
}

// RestoreAgentOperation manages a long-running operation from RestoreAgent.
type RestoreAgentOperation struct {
	lro *longrunning.Operation
}

// RestoreAgentOperation returns a new RestoreAgentOperation from a given name.
// The name must be that of a previously created RestoreAgentOperation, possibly from a different process.
func (c *AgentsClient) RestoreAgentOperation(name string) *RestoreAgentOperation {
	return &RestoreAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *RestoreAgentOperation) Wait(ctx context.Context, opts ...gax.CallOption) error {
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
func (op *RestoreAgentOperation) Poll(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.Poll(ctx, nil, opts...)
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *RestoreAgentOperation) Metadata() (*structpbpb.Struct, error) {
	var meta structpbpb.Struct
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *RestoreAgentOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *RestoreAgentOperation) Name() string {
	return op.lro.Name()
}

// TrainAgentOperation manages a long-running operation from TrainAgent.
type TrainAgentOperation struct {
	lro *longrunning.Operation
}

// TrainAgentOperation returns a new TrainAgentOperation from a given name.
// The name must be that of a previously created TrainAgentOperation, possibly from a different process.
func (c *AgentsClient) TrainAgentOperation(name string) *TrainAgentOperation {
	return &TrainAgentOperation{
		lro: longrunning.InternalNewOperation(c.LROClient, &longrunningpb.Operation{Name: name}),
	}
}

// Wait blocks until the long-running operation is completed, returning the response and any errors encountered.
//
// See documentation of Poll for error-handling information.
func (op *TrainAgentOperation) Wait(ctx context.Context, opts ...gax.CallOption) error {
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
func (op *TrainAgentOperation) Poll(ctx context.Context, opts ...gax.CallOption) error {
	return op.lro.Poll(ctx, nil, opts...)
}

// Metadata returns metadata associated with the long-running operation.
// Metadata itself does not contact the server, but Poll does.
// To get the latest metadata, call this method after a successful call to Poll.
// If the metadata is not available, the returned metadata and error are both nil.
func (op *TrainAgentOperation) Metadata() (*structpbpb.Struct, error) {
	var meta structpbpb.Struct
	if err := op.lro.Metadata(&meta); err == longrunning.ErrNoMetadata {
		return nil, nil
	} else if err != nil {
		return nil, err
	}
	return &meta, nil
}

// Done reports whether the long-running operation has completed.
func (op *TrainAgentOperation) Done() bool {
	return op.lro.Done()
}

// Name returns the name of the long-running operation.
// The name is assigned by the server and is unique within the service from which the operation is created.
func (op *TrainAgentOperation) Name() string {
	return op.lro.Name()
}

// AgentIterator manages a stream of *dialogflowpb.Agent.
type AgentIterator struct {
	items    []*dialogflowpb.Agent
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
	InternalFetch func(pageSize int, pageToken string) (results []*dialogflowpb.Agent, nextPageToken string, err error)
}

// PageInfo supports pagination. See the google.golang.org/api/iterator package for details.
func (it *AgentIterator) PageInfo() *iterator.PageInfo {
	return it.pageInfo
}

// Next returns the next result. Its second return value is iterator.Done if there are no more
// results. Once Next returns Done, all subsequent calls will return Done.
func (it *AgentIterator) Next() (*dialogflowpb.Agent, error) {
	var item *dialogflowpb.Agent
	if err := it.nextFunc(); err != nil {
		return item, err
	}
	item = it.items[0]
	it.items = it.items[1:]
	return item, nil
}

func (it *AgentIterator) bufLen() int {
	return len(it.items)
}

func (it *AgentIterator) takeBuf() interface{} {
	b := it.items
	it.items = nil
	return b
}
