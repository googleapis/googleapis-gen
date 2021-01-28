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

package websecurityscanner_test

import (
	"context"

	websecurityscanner "cloud.google.com/go/websecurityscanner/apiv1beta"
	"google.golang.org/api/iterator"
	websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"
)

func ExampleNewClient() {
	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use client.
	_ = c
}

func ExampleClient_CreateScanConfig() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.CreateScanConfigRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateScanConfig(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_DeleteScanConfig() {
	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.DeleteScanConfigRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteScanConfig(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleClient_GetScanConfig() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.GetScanConfigRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetScanConfig(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_ListScanConfigs() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.ListScanConfigsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListScanConfigs(ctx, req)
	for {
		resp, err := it.Next()
		if err == iterator.Done {
			break
		}
		if err != nil {
			// TODO: Handle error.
		}
		// TODO: Use resp.
		_ = resp
	}
}

func ExampleClient_UpdateScanConfig() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.UpdateScanConfigRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateScanConfig(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_StartScanRun() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.StartScanRunRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.StartScanRun(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_GetScanRun() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.GetScanRunRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetScanRun(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_ListScanRuns() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.ListScanRunsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListScanRuns(ctx, req)
	for {
		resp, err := it.Next()
		if err == iterator.Done {
			break
		}
		if err != nil {
			// TODO: Handle error.
		}
		// TODO: Use resp.
		_ = resp
	}
}

func ExampleClient_StopScanRun() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.StopScanRunRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.StopScanRun(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_ListCrawledUrls() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.ListCrawledUrlsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListCrawledUrls(ctx, req)
	for {
		resp, err := it.Next()
		if err == iterator.Done {
			break
		}
		if err != nil {
			// TODO: Handle error.
		}
		// TODO: Use resp.
		_ = resp
	}
}

func ExampleClient_GetFinding() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.GetFindingRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetFinding(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_ListFindings() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.ListFindingsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListFindings(ctx, req)
	for {
		resp, err := it.Next()
		if err == iterator.Done {
			break
		}
		if err != nil {
			// TODO: Handle error.
		}
		// TODO: Use resp.
		_ = resp
	}
}

func ExampleClient_ListFindingTypeStats() {
	// import websecurityscannerpb "google.golang.org/genproto/googleapis/cloud/websecurityscanner/v1beta"

	ctx := context.Background()
	c, err := websecurityscanner.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &websecurityscannerpb.ListFindingTypeStatsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.ListFindingTypeStats(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}
