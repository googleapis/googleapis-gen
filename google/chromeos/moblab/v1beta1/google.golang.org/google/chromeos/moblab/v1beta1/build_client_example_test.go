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

package moblab_test

import (
	"context"

	"google.golang.org/api/iterator"
	moblabpb "google.golang.org/genproto/googleapis/chromeos/moblab/v1beta1"
	moblab "google.golang.org/google/chromeos/moblab/v1beta1"
)

func ExampleNewBuildClient() {
	ctx := context.Background()
	c, err := moblab.NewBuildClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use client.
	_ = c
}

func ExampleBuildClient_ListBuilds() {
	// import moblabpb "google.golang.org/genproto/googleapis/chromeos/moblab/v1beta1"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := moblab.NewBuildClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &moblabpb.ListBuildsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListBuilds(ctx, req)
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

func ExampleBuildClient_CheckBuildStageStatus() {
	// import moblabpb "google.golang.org/genproto/googleapis/chromeos/moblab/v1beta1"

	ctx := context.Background()
	c, err := moblab.NewBuildClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &moblabpb.CheckBuildStageStatusRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CheckBuildStageStatus(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleBuildClient_StageBuild() {
	// import moblabpb "google.golang.org/genproto/googleapis/chromeos/moblab/v1beta1"

	ctx := context.Background()
	c, err := moblab.NewBuildClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &moblabpb.StageBuildRequest{
		// TODO: Fill request struct fields.
	}
	op, err := c.StageBuild(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}

	resp, err := op.Wait(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}
