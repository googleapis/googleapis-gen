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

package playablelocations_test

import (
	"context"

	playablelocationspb "google.golang.org/genproto/googleapis/maps/playablelocations/v3"
	playablelocations "google.golang.org/google/maps/playablelocations/v3"
)

func ExampleNewClient() {
	ctx := context.Background()
	c, err := playablelocations.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	defer c.Close()

	// TODO: Use client.
	_ = c
}

func ExampleClient_SamplePlayableLocations() {
	ctx := context.Background()
	c, err := playablelocations.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	defer c.Close()

	req := &playablelocationspb.SamplePlayableLocationsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.SamplePlayableLocations(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_LogPlayerReports() {
	ctx := context.Background()
	c, err := playablelocations.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	defer c.Close()

	req := &playablelocationspb.LogPlayerReportsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.LogPlayerReports(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleClient_LogImpressions() {
	ctx := context.Background()
	c, err := playablelocations.NewClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	defer c.Close()

	req := &playablelocationspb.LogImpressionsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.LogImpressions(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}
