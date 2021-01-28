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

package admin_test

import (
	"context"

	"google.golang.org/api/iterator"
	adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	admin "google.golang.org/google/analytics/admin/v1alpha"
)

func ExampleNewAnalyticsAdminClient() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use client.
	_ = c
}

func ExampleAnalyticsAdminClient_GetAccount() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetAccountRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetAccount(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListAccounts() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListAccountsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListAccounts(ctx, req)
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

func ExampleAnalyticsAdminClient_DeleteAccount() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteAccountRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteAccount(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_UpdateAccount() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateAccountRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateAccount(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ProvisionAccountTicket() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ProvisionAccountTicketRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.ProvisionAccountTicket(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListAccountSummaries() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListAccountSummariesRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListAccountSummaries(ctx, req)
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

func ExampleAnalyticsAdminClient_GetProperty() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetPropertyRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetProperty(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListProperties() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListPropertiesRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListProperties(ctx, req)
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

func ExampleAnalyticsAdminClient_CreateProperty() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreatePropertyRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateProperty(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteProperty() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeletePropertyRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteProperty(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_UpdateProperty() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdatePropertyRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateProperty(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_GetUserLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetUserLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetUserLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_BatchGetUserLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.BatchGetUserLinksRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.BatchGetUserLinks(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListUserLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListUserLinksRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListUserLinks(ctx, req)
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

func ExampleAnalyticsAdminClient_AuditUserLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.AuditUserLinksRequest{
		// TODO: Fill request struct fields.
	}
	it := c.AuditUserLinks(ctx, req)
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

func ExampleAnalyticsAdminClient_CreateUserLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreateUserLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateUserLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_BatchCreateUserLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.BatchCreateUserLinksRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.BatchCreateUserLinks(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_UpdateUserLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateUserLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateUserLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_BatchUpdateUserLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.BatchUpdateUserLinksRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.BatchUpdateUserLinks(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteUserLink() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteUserLinkRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteUserLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_BatchDeleteUserLinks() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.BatchDeleteUserLinksRequest{
		// TODO: Fill request struct fields.
	}
	err = c.BatchDeleteUserLinks(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_GetWebDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetWebDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetWebDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteWebDataStream() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteWebDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteWebDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_UpdateWebDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateWebDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateWebDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_CreateWebDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreateWebDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateWebDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListWebDataStreams() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListWebDataStreamsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListWebDataStreams(ctx, req)
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

func ExampleAnalyticsAdminClient_GetIosAppDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetIosAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetIosAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteIosAppDataStream() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteIosAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteIosAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_UpdateIosAppDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateIosAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateIosAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_CreateIosAppDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreateIosAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateIosAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListIosAppDataStreams() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListIosAppDataStreamsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListIosAppDataStreams(ctx, req)
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

func ExampleAnalyticsAdminClient_GetAndroidAppDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetAndroidAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetAndroidAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteAndroidAppDataStream() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteAndroidAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteAndroidAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_UpdateAndroidAppDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateAndroidAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateAndroidAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_CreateAndroidAppDataStream() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreateAndroidAppDataStreamRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateAndroidAppDataStream(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_ListAndroidAppDataStreams() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListAndroidAppDataStreamsRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListAndroidAppDataStreams(ctx, req)
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

func ExampleAnalyticsAdminClient_GetEnhancedMeasurementSettings() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetEnhancedMeasurementSettingsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetEnhancedMeasurementSettings(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_UpdateEnhancedMeasurementSettings() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateEnhancedMeasurementSettingsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateEnhancedMeasurementSettings(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_CreateFirebaseLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreateFirebaseLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateFirebaseLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_UpdateFirebaseLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateFirebaseLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateFirebaseLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteFirebaseLink() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteFirebaseLinkRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteFirebaseLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_ListFirebaseLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListFirebaseLinksRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListFirebaseLinks(ctx, req)
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

func ExampleAnalyticsAdminClient_GetGlobalSiteTag() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetGlobalSiteTagRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetGlobalSiteTag(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_CreateGoogleAdsLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.CreateGoogleAdsLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.CreateGoogleAdsLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_UpdateGoogleAdsLink() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.UpdateGoogleAdsLinkRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.UpdateGoogleAdsLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}

func ExampleAnalyticsAdminClient_DeleteGoogleAdsLink() {
	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.DeleteGoogleAdsLinkRequest{
		// TODO: Fill request struct fields.
	}
	err = c.DeleteGoogleAdsLink(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
}

func ExampleAnalyticsAdminClient_ListGoogleAdsLinks() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"
	// import "google.golang.org/api/iterator"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.ListGoogleAdsLinksRequest{
		// TODO: Fill request struct fields.
	}
	it := c.ListGoogleAdsLinks(ctx, req)
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

func ExampleAnalyticsAdminClient_GetDataSharingSettings() {
	// import adminpb "google.golang.org/genproto/googleapis/analytics/admin/v1alpha"

	ctx := context.Background()
	c, err := admin.NewAnalyticsAdminClient(ctx)
	if err != nil {
		// TODO: Handle error.
	}

	req := &adminpb.GetDataSharingSettingsRequest{
		// TODO: Fill request struct fields.
	}
	resp, err := c.GetDataSharingSettings(ctx, req)
	if err != nil {
		// TODO: Handle error.
	}
	// TODO: Use resp.
	_ = resp
}
