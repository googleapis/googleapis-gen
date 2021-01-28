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

package aiplatform_test

import (
	"context"

	aiplatform "cloud.google.com/go/aiplatform/apiv1"
	"google.golang.org/api/iterator"
	aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"
)

func ExampleNewSpecialistPoolClient() {
	ctx := context.Background()
	c, err := aiplatform.NewSpecialistPoolClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use client.
	_ = c
}

func ExampleSpecialistPoolClient_CreateSpecialistPool() {
	// import aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"

	ctx := context.Background()
	c, err := aiplatform.NewSpecialistPoolClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &aiplatformpb.CreateSpecialistPoolRequest{
		// TODO: Fill request struct fields.
	}
	op, err := c.CreateSpecialistPool(ctx, req)
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

func ExampleSpecialistPoolClient_GetSpecialistPool() {
	// import aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"

	ctx := context.Background()
	c, err := aiplatform.NewSpecialistPoolClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &aiplatformpb.GetSpecialistPoolRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetSpecialistPool(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleSpecialistPoolClient_ListSpecialistPools() {
	// import aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := aiplatform.NewSpecialistPoolClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &aiplatformpb.ListSpecialistPoolsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListSpecialistPools(ctx, req)
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

func ExampleSpecialistPoolClient_DeleteSpecialistPool() {
	// import aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"

	ctx := context.Background()
	c, err := aiplatform.NewSpecialistPoolClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &aiplatformpb.DeleteSpecialistPoolRequest{
		// TODO: Fill request struct fields.
	}
	op, err := c.DeleteSpecialistPool(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}

	err = op.Wait(ctx)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleSpecialistPoolClient_UpdateSpecialistPool() {
	// import aiplatformpb "google.golang.org/genproto/googleapis/cloud/aiplatform/v1"

	ctx := context.Background()
	c, err := aiplatform.NewSpecialistPoolClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &aiplatformpb.UpdateSpecialistPoolRequest{
		// TODO: Fill request struct fields.
	}
	op, err := c.UpdateSpecialistPool(ctx, req)
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
